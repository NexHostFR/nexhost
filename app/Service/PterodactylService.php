<?php

namespace App\Services;

use App\Models\PterodactylUser;
use App\Models\PterodactylUserServer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PterodactylService {
    private $url_pterodactyl = "http://panel.nexhost.fr/api/application/";

    private $api_key;
    private $user_id;
    private $egg;
    private $dockerImage;
    private $startup;
    private $limits;
    private $featureLimits;
    private $environment;

    public function __construct() {
        $this->api_key = env('API_PTERODACTYL');
    }
    public function createPteroAccount($user_data)
    {
        try {
            // Vérifie si l'utilisateur existe déjà
            if (PterodactylUser::where('email', $user_data['email'])->exists()) {
                return PterodactylUser::where('email', $user_data['email'])->first()->id_ptero;
            }

            $ch = curl_init($this->url_pterodactyl . "users");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $this->api_key,
                'Content-Type: application/json',
                'Accept: Application/vnd.pterodactyl.v1+json'
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($user_data));

            $result = curl_exec($ch);

            if (curl_errno($ch)) {
                throw new \Exception('cURL error: ' . curl_error($ch));
            }

            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if (!$result) {
                throw new \Exception('API request failed — no response.');
            }

            $response = json_decode($result);

            if (!isset($response->attributes->id)) {
                throw new \Exception("User creation failed. HTTP $http_code. Response: " . $result);
            }

            $id_user = $response->attributes->id;

            // Enregistre l'utilisateur en base
            PterodactylUser::create([
                "id_ptero" => $id_user,
                "email" => $user_data['email'],
                "username" => $user_data['username']
            ]);

            $this->setUserId($id_user);

            return $id_user;

        } catch (\Exception $e) {
            Log::error('Erreur dans createPteroAccount(): ' . $e->getMessage(), [
                'user_data' => $user_data,
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'error' => 'Erreur lors de la création du compte Pterodactyl.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function getAllocations()
    {
        try {
            $ch = curl_init($this->url_pterodactyl . "nodes/1/allocations");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $this->api_key,
                'Content-Type: application/json',
                "Accept: application/json"
            ));

            $result = curl_exec($ch);

            if (curl_errno($ch)) {
                throw new \Exception('cURL error: ' . curl_error($ch));
            }

            curl_close($ch);

            $response = json_decode($result);

            if (!isset($response->data)) {
                throw new \Exception('Réponse invalide de l’API : ' . $result);
            }

            foreach ($response->data as $allocation) {
                if ($allocation->attributes->assigned == false) {
                    return $allocation->attributes->id;
                }
            }

            throw new \Exception('Aucune allocation disponible trouvée.');

        } catch (\Exception $e) {
            Log::error('Erreur dans getAllocations(): ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json(['error' => 'Erreur lors de la récupération des allocations.'], 500);
        }
    }

    public function createServer()
    {
        try {
            $ch = curl_init($this->url_pterodactyl . "servers");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $this->api_key,
                'Content-Type: application/json',
                'Accept: application/json'
            ));

            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
                "name" => "Serveur de " . Auth::user()->first_name,
                "user" => $this->getUserId(),
                "egg" => $this->getEgg(),
                "docker_image" => $this->getDockerImage(),
                "startup" => $this->getStartup(),
                "limits" => $this->getLimits(),
                "feature_limits" => $this->getFeatureLimits(),
                "environment" => $this->getEnvironment(),
                "allocation" => [
                    "default" => $this->getAllocations()
                ]
            ]));

            $result = curl_exec($ch);

            if (curl_errno($ch)) {
                throw new \Exception('cURL error: ' . curl_error($ch));
            }

            curl_close($ch);

            $response = json_decode($result);

            if (!isset($response->attributes->id)) {
                throw new \Exception('Erreur lors de la création du serveur : ' . $result);
            }

            PterodactylUserServer::create([
                "id_user" => $this->getUserId(),
                "id_server" => $response->attributes->id
            ]);

        } catch (\Exception $e) {
            Log::error('Erreur dans createServer(): ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
        }
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function getEgg() {
        return $this->egg;
    }

    public function setEgg($egg) {
        $this->egg = $egg;
    }

    public function getDockerImage() {
        return $this->dockerImage;
    }

    public function setDockerImage($dockerImage) {
        $this->dockerImage = $dockerImage;
    }

    public function getStartup() {
        return $this->startup;
    }

    public function setStartup($startup) {
        $this->startup = $startup;
    }

    public function getLimits() {
        return $this->limits;
    }

    public function setLimits($limits) {
        $this->limits = $limits;
    }

    public function getFeatureLimits() {
        return $this->featureLimits;
    }

    public function setFeatureLimits($featureLimits) {
        $this->featureLimits = $featureLimits;
    }

    public function getEnvironment() {
        return $this->environment;
    }


    public function setEnvironment($environment) {
        $this->environment = $environment;
    }
}