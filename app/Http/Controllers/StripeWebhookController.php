<?php

namespace App\Http\Controllers;

use App\Mail\CommandeEffectueMail;
use App\Models\Commande;
use App\Models\Customer;
use App\Models\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Services\PterodactylService;
use App\Services\StripeService;
use Stripe\Checkout\Session;
use Stripe\Webhook;

class StripeWebhookController extends Controller
{

    public function handle(Request $request) {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $secret = env('STRIPE_WEBHOOK_SECRET');

        $PteroService = new PterodactylService();
        $StripeService = new StripeService();
        try {
            $event = Webhook::constructEvent($payload, $sigHeader, $secret);
            
            if($event->type === "checkout.session.completed") {
                $session = $event->data->object;
                $parts = explode('/', $session->metadata->product_list);

                if (count($parts) === 2) {
                    [$categorie, $id] = $parts;
                } else {
                    Log::error('Format de product_list invalide', [
                        'product_id' => $session->metadata->product_list,
                        'file' => __FILE__,
                        'line' => __LINE__,
                    ]);
                    return response('Invalid product ID format', 400);
                }

                $config_produit = config('global')[$categorie][$id];

                $user_stripe = $StripeService->searchCustomer(Customer::where('id', $session->metadata->user_id)->first()->id_stripe);
                if (!$user_stripe) {
                    Log::error('Utilisateur Stripe introuvable', [
                        'user_id' => $session->metadata->user_id,
                        'file' => __FILE__,
                        'line' => __LINE__,
                    ]);
                    return response('User not found', 404);
                }

                $commande = Commande::create([
                    "user_id" => $session->metadata->user_id,
                    "categorie" => $categorie,
                    "produit" => $id,
                    "prix" => $config_produit['price'],
                    "duration" => 30,
                    "status" => "paye",
                    "finish_at" => now()->addDays(30)
                ]);
                $StripeService->createFactureCheckout($session->invoice, $session->metadata->user_id, $commande->id);

                $namePart = explode(' ', $user_stripe->name, 2);

                $PteroService->createPteroAccount([
                    'email' => $user_stripe->email,
                    'username' => preg_replace('/[^a-zA-Z0-9_-]/', '_', uniqid()), 
                    'first_name' => $namePart[0], 
                    'last_name' => $namePart[1] ?? '',
                ]);

                $PteroService->setEgg($config_produit['egg']);
                $PteroService->setDockerImage($config_produit['docker_image']);
                $PteroService->setStartup($config_produit['startup']);
                $PteroService->setLimits([
                    'memory' => $config_produit['memory'],
                    'swap' => $config_produit['swap'],
                    'disk' => $config_produit['disk'],
                    'io' => 10,
                    'cpu' => $config_produit['cpu'],
                ]);
                $PteroService->setFeatureLimits([
                    'databases' => $config_produit['databases'],
                    'backups' => $config_produit['backups'],
                ]);
                if($categorie == "fivem") {
                    $PteroService->setEnvironment([
                        'FIVEM_LICENSE' => env('cfxk_1M2UsT8v0fgy4uU6GZnsk_1WSnOo'),
                        'MAX_PLAYERS' => 48,
                        'SERVER_HOSTNAME' => "Serveur de ".Auth::user()->first_name,
                        'FIVEM_VERSION' => "12255-c95b323ade0432603f67cc73d23460c517822e28",
                        'STEAM_WEBAPIKEY' => "670152740F9F99C91709DC173CC7CE6B",
                        'TXADMIN_ENABLE' => 1,
                        'TXADMIN_PORT' => 40120,
                    ]);
                } elseif($categorie == "minecraft") {
                    $PteroService->setEnvironment([
                        "BUNGEE_VERSION"=> "latest",
                        "VANILLA_VERSION"=> "1.20.1",
                        "SERVER_JARFILE" => "server.jar",
                    ]);
                }

                // Envoi de l'e-mail de confirmation
                Mail::to($user_stripe->email)->send(new CommandeEffectueMail($user_stripe->email));
            
            } elseif ($event->type === "invoice.paid") {
                // Invoice payment succeeded
                $session = $event->data->object;
                if(Facture::where("id_stripe", $session->id)->where("status", "paye")->first()) {
                    Log::info('Facture déjà payée', ["invoice" => $session]);
                    return response()->json(['status' => 'success'], 200);
                }
                Log::info('Invoice payment succeeded', ["invoice" => $session]);
            } elseif ($event->type === "payment_intent.payment_failed") {
                // Payment failed
                Log::info('Payment failed');
            } else {
                // Other event types
                Log::info('Other event type: ' . $event->type);

            }
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            Log::info('Invalid payload');
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            Log::info('Invalid signature');
            return response()->json(['error' => 'Invalid signature'], 400);
        } catch (\Exception $e) {
            // Other errors
            Log::info('Other error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine());
            return response()->json(['error' => 'Other error'], 500);
        }
        return response()->json(['status' => 'success'], 200);
    }
}
