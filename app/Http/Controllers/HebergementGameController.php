<?php

namespace App\Http\Controllers;

use App\Mail\CommandeEffectueMail;
use App\Models\Commande;
use App\Models\PterodactylUser;
use App\Models\PterodactylUserServer;
use App\Models\User;
use App\Services\StripeService;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Stripe\Exception\ApiErrorException;
use Stripe\Exception\CardException;
use App\Services\PterodactylService;

class HebergementGameController extends Controller
{   
    private $api_key;
    private $url_pterodactyl = "https://panel.nexhost.fr/api/application/";
    private $config;

    public function __construct(Request $request) {
        $this->api_key = env('API_PTERODACTYL');
        $this->config = config('game');
    }

    public function orderGameHosting($categorie, $id, Request $request) {
        if(!empty(Auth::user())) {
            $user = Auth::user();
        } else {
            $user = null;
        }
        return view('shop.gaming', [
            "data_produit" => [
                "id" => $id,
                "name" => $this->config[$categorie][$id]['name'],
                "price" => $this->config[$categorie][$id]['price']/100,
            ],
            "total_price" => $this->config[$categorie][$id]['price']/100,
            "url_source" => $request->fullUrl(),
            "manager_url" => env("APP_URL_MANAGER"),
            "user" => $user
        ]);
    }

    public function GameHostingLandingPage($categorie) {
        // Faire apparaitre pour choisir les categorie de jeu, se base sur jeu
    }

    public function buyGameHosting($categorie, $id, Request $request) {
        if(isset($this->config[$categorie][$id]["type"]) && $this->config[$categorie][$id]["type"] == "essaie") {
            $commande = Commande::where('user_id', Auth::user()->id)->where('categorie', $categorie)->where('produit', $id)->where('status', 'essaie')->first();
            if($commande) {
                return back()->with('error', "Vous avez déjà un essaie en cours.");
            }
        } else {
            $stripeManager = new StripeService();

            $produit = $this->config[$categorie][$id];
            $produit['id'] = $categorie."/".$id;
            
            header('Location:' . $stripeManager->createCheckout($produit)->url);
            exit;
        }
    
        // Paiement réussi : maintenant on peut créer la commande
        $duration = 2;
        $status = "essaie"; 
        $commande = Commande::create([
            "user_id" => Auth::user()->id,
            "categorie" => $categorie,
            "produit" => $id,
            "prix" => $this->config[$categorie][$id]['price'],
            "duration" => $duration,
            "status" => $status,
            "finish_at" => now()->addDays($duration)
        ]);
    
        // Création du compte Pterodactyl
        $uniqueUsername = preg_replace('/[^a-zA-Z0-9_-]/', '_', uniqid());
        $id_user = $this->createPteroAccount([
            'email' => Auth::user()->email,
            'username' => preg_replace('/[^a-zA-Z0-9_-]/', '_', uniqid()), 
            'first_name' => Auth::user()->first_name, 
            'last_name' => Auth::user()->last_name
        ]);
    
        // Envoi de l'e-mail de confirmation
        Mail::to(Auth::user()->email)->send(new CommandeEffectueMail(Auth::user()->email));
    
        // Configuration et création du serveur en fonction de la catégorie
        $this->config = $this->config[$categorie][$id];
    
        switch ($categorie) {
            case "minecraft":
                $this->createMinecraft($id_user, $request);
                break;
            case "fivem":
                $this->createFivem($id_user, $request);
                break;
        }
    
        return redirect()->to("/shop/success?id_produit=" . $id);
    }    

    public function createPteroAccount($user_data) {
        // Crée compte sur le ptero
        if(PterodactylUser::where('email', $user_data['email'])->exists()) {
            return PterodactylUser::where('email', $user_data['email'])->first()->id_ptero;
        }
        $ch = curl_init($this->url_pterodactyl . "users");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $this->api_key,
            'Content-Type: application/json',
            "Accept: Application/vnd.pterodactyl.v1+json"
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($user_data));

        $result = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if (!$result) {
            // Si la requête échoue, vous pouvez renvoyer une erreur ou gérer cela
            return response()->json(['error' => 'API request failed'], 500);
        }
    

        $response = json_decode($result);
        // Vérifie si l'ID existe dans la réponse
        if (isset($response->attributes->id)) {
            $id_user = $response->attributes->id;
            // Insère l'utilisateur dans votre base de données avec l'ID récupéré
            PterodactylUser::create([
                "id_ptero" => $id_user,
                "email" => $user_data['email'],
                "username" => $user_data['username']
            ]);
            return $id_user;
        } else {
            // Si l'ID n'est pas présent dans la réponse, gérer cette erreur
            return response()->json([
                'error' => 'Failed to create user in Pterodactyl',
                'http_code' => $http_code,
                'response' => $response
            ], 500);
        }
    }

    public function createFivem($id_user, Request $request) {
        // Create du serveur fivem for user
        $PteroService = new PterodactylService();
        $allocationId = $PteroService->getAllocations();
         ($allocationId);
        $ch = curl_init($this->url_pterodactyl . "servers");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $this->api_key,
            'Content-Type: application/json',
            "Accept: application/json"
        ));

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            "name" => "Serveur de ".Auth::user()->first_name,
            "user" => $id_user,
            "egg" => $this->config['egg'],
            "docker_image" => "ghcr.io/ptero-eggs/yolks:debian",
            "startup" => '$(pwd)/alpine/opt/cfx-server/ld-musl-x86_64.so.1 --library-path "$(pwd)/alpine/usr/lib/v8/:$(pwd)/alpine/lib/:$(pwd)/alpine/usr/lib/" -- $(pwd)/alpine/opt/cfx-server/FXServer +set citizen_dir $(pwd)/alpine/opt/cfx-server/citizen/ +set sv_licenseKey ${FIVEM_LICENSE} +set steam_webApiKey ${STEAM_WEBAPIKEY} +set sv_maxplayers ${MAX_PLAYERS} +set serverProfile default +set txAdminPort ${TXADMIN_PORT} $( [ "$TXADMIN_ENABLE" == "1" ] || printf %s "+exec server.cfg" )',
            "limits" => [
                "memory" => $this->config['memory'],
                "swap" => $this->config['swap'],
                "io" => "10",
                "cpu" => $this->config['cpu'],
                "disk" => $this->config['disk']
            ],
            "feature_limits" => [
                "databases" => $this->config['databases'],
                "backups" => $this->config['backups'],
            ],
            "environment" => [
                "FIVEM_LICENSE" => "cfxk_1M2UsT8v0fgy4uU6GZnsk_1WSnOo",
                "MAX_PLAYERS" => "48",
                "SERVER_HOSTNAME" => "test",
                "FIVEM_VERSION" => "12255-c95b323ade0432603f67cc73d23460c517822e28",
                "STEAM_WEBAPIKEY" => "670152740F9F99C91709DC173CC7CE6B",
                "TXADMIN_ENABLE" => "1",
                "TXADMIN_PORT" => "40120",
            ],
            "allocation" => [
                "default" => $allocationId // But I don't need that
            ]
        ]));


        $result = curl_exec($ch);
         ($result);
        curl_close($ch);

        $response = json_decode($result);
         ($response);
        PterodactylUserServer::create([
            "id_user" => $id_user,
            "id_server" => $response->attributes->id
        ]);
    }

    public function createMinecraft($id_user, Request $request) {
        $PteroService = new PterodactylService();
        $allocationId = $PteroService->getAllocations();
        // Create du serveur minecraft for user
        $ch = curl_init($this->url_pterodactyl . "servers");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $this->api_key,
            'Content-Type: application/json',
            "Accept: application/json"
        ));

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            "name" => "Serveur de ".Auth::user()->first_name,
            "user" => $id_user,
            "egg" => $this->config['egg'],
            "docker_image" => "ghcr.io/pterodactyl/yolks:java_21",
            "startup" => "java -Xms128M -XX:MaxRAMPercentage=95.0 -jar {{SERVER_JARFILE}}",
            "limits" => [
                "memory" => $this->config['memory'],
                "swap" => $this->config['swap'],
                "io" => "10",
                "cpu" => $this->config['cpu'],
                "disk" => $this->config['disk']
            ],
            "feature_limits" => [
                "databases" => $this->config['databases'],
                "backups" => $this->config['backups'],
            ],
            "environment" => [
                "BUNGEE_VERSION"=> "latest",
                "VANILLA_VERSION"=> "1.20.1",
                "SERVER_JARFILE" => "server.jar"
            ],
            "allocation" => [
                "default" => $allocationId // But I don't need that
            ]
        ]));

        $result = curl_exec($ch);
        
        curl_close($ch);

        $response = json_decode($result);
         ($response);
        PterodactylUserServer::create([
            "id_user" => $id_user,
            "id_server" => $response->attributes->id
        ]);
    }
}
