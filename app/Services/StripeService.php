<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Exception\CardException;
use Stripe\StripeClient;

class StripeService
{
    /**
     * Create a new class instance.
     */
    private $secret_key = "";

    private $stripe_client = null;
    private $stripe_session = null;
    
    public function __construct()
    {
        $this->secret_key = config("services.stripe.secret");
        Stripe::setApiKey($this->secret_key);
        $this->stripe_client = new StripeClient($this->secret_key);
    }

    public function createCheckout($produit)
    {   
        if(!empty(Auth::user())) {
            $user = Auth::user();
        } else {
            return back()->with('error', 'Vous devez être connecté pour effectuer un paiement.');
        }

        return $this->stripe_client->checkout->sessions->create([
            'customer' => $this->createCustomer($user->email, $user->id, request()),
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $produit['name'],
                    ],
                    'unit_amount' => $produit['price'],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'metadata' => [
                'product_list' => $produit['id'],
                'user_id' => (string) $user->id,
            ],

            'success_url' => route('success'),
            'cancel_url' => route('cancel'),

            'invoice_creation' => [
                'enabled' => true,
            ],
        ]);
    }

    public function searchCustomer($customer_id) {
        $customer = $this->stripe_client->customers->retrieve($customer_id);
        if ($customer) {
            if ($customer instanceof \Stripe\Customer) {
                // Si c'est déjà un objet Stripe\Customer, retourner directement l'objet sans l'encapsuler
                return $customer;
            }
            throw new \Exception("Le client récupéré n'est pas valide ou est d'un autre type.");
        } else {
            throw new \Exception("Erreur : Le client n'a pas été trouvé.");
        }
    }

    public function createFactureCheckout($facture_id, $user_id, $id_commande) {
        $invoice = $this->stripe_client->invoices->retrieve($facture_id);

        $facture = new Facture();
        $facture->id_user = $user_id;
        $facture->id_stripe = $facture_id;
        $facture->id_commande = $id_commande;
        $facture->prix = $invoice->amount_paid;
        $facture->status = "paye";
        $facture->url_visualisation = $invoice->hosted_invoice_url;
        $facture->url_pdf = $invoice->invoice_pdf;
        $facture->save();
        return $facture;
    }

    public function createCharge($price, $mode, $nom, $source) {
        // Vérification des paramètres
        if ($price <= 0 || !in_array($mode, ['payment', 'subscription'])) {
            throw new \InvalidArgumentException("Paramètres invalides pour la création de la session.");
        }

        $charge = $this->stripe_client->charges->create([
            'amount' => $price,
            "currency" => 'eur',
            "source" => $source,
            "description" => $nom
        ]);

        // var_dump($charge);
    }

    public function createCustomer($email, $id, Request $request) {
        $customerManager = new Customer();
        $customer = $customerManager->where("id", $id)->first();
        $customer_stripe = $this->stripe_client->customers->search([
            "query" => 'email:"' . $email . '"'
        ]);
        if ($customer) {
            return $customer->id_stripe;
        }
        if (!empty($customer_stripe->data)) {
            $customerManager->id = $id;
            $customerManager->id_stripe = $customer_stripe->data[0]->id;
            $customerManager->save();
            if(!empty($customer_stripe->data[0]->id)) {
                return $customer_stripe->data[0]->id;
            }
        }
        $result = $this->stripe_client->customers->create([
            'email' => $email,
            'name' => $request->card_name
        ]);
        
        $customerManager->id = $id;
        $customerManager->id_stripe = $result->id;
        $customerManager->save();

        return $result->id;   
    }

    public function createFacture($customer_id, $price, $description, $id_commande) {
        $invoiceItem = $this->stripe_client->invoiceItems->create([
            "customer" => $customer_id,
            "amount" => $price, // Convert to cents
            "currency" => "eur",
            "description" =>$description,
        ]);
        if (!$invoiceItem) {
            throw new \Exception("Erreur : L'item de facturation n'a pas été créé.");
        }
        $reponse = $this->stripe_client->invoices->create([
            "customer" => $customer_id,
            "auto_advance" => true,
            "pending_invoice_items_behavior" => "include"
        ]);
        
        $invoice = $this->stripe_client->invoices->finalizeInvoice($reponse->id);

        $invoice = $this->stripe_client->invoices->pay($invoice->id, ["paid_out_of_band" => true]);
        
        $facture = new Facture();
        $facture->id_user = Auth::user()->id;
        $facture->id_stripe = $invoice->id;
        $facture->id_commande = $id_commande;
        $facture->prix = $price;
        $facture->status = "paye";
        $facture->url_visualisation = $invoice->hosted_invoice_url;
        $facture->url_pdf = $invoice->invoice_pdf;
        $facture->save();
    }

    public function generateFactureImpaie($customer_id, $price, $description, $id_commande) {
        $invoiceItem = $this->stripe_client->invoiceItems->create([
            "customer" => $customer_id,
            "amount" => $price, // Convert to cents
            "currency" => "eur",
            "description" =>$description,
        ]);

        if (!$invoiceItem) {
            throw new \Exception("Erreur : L'item de facturation n'a pas été créé.");
        }

        $invoice = $this->stripe_client->invoices->create([
            "customer" => $customer_id,
            "auto_advance" => false, // La facture ne sera pas finalisée automatiquement
        ]);
    
        // Vérification de la création de la facture
        if (!$invoice) {
            throw new \Exception("Erreur : La facture n'a pas été créée.");
        }
    
        // Enregistrement de la facture dans la base de données
        $facture = new Facture();
        $facture->id_user = Auth::user()->id; // Assurez-vous que l'utilisateur est authentifié
        $facture->id_stripe = $invoice->id; // Utilisation de l'ID de la facture Stripe
        $facture->id_commande = $id_commande; // Assurez-vous que $id_commande est passé correctement
        $facture->prix = $price; // Montant de la facture
        $facture->status = "attente"; // Statut en attente
        $facture->url_visualisation = $invoice->hosted_invoice_url; // URL pour visualiser la facture
        $facture->url_pdf = $invoice->invoice_pdf; // URL pour télécharger la facture en PDF
        $facture->save(); // Sauvegarde de la facture dans la base de données
    }
}
