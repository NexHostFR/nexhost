<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {   
        $ListeInformations = array(
            array(
                "information" => "+50",
                "description" => "serveurs répartie dans toute l'Europe"
            ),
            array(
                "information" => "1",
                "description" => "employé"
            ),
            array(
                "information" => "+90 %",
                "description" => "des ressources consacrées a la R&D"
            )
        );
        return view('landing_page', [
            'ListeInformations' => $ListeInformations,
            'description' => "Bienvenue sur notre site web"
        ]);
    }
}
