<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AProposController extends Controller
{
    public function a_propos()
    {
        return view('a_propos.a_propos', [
            'description' => "Page a propos de NxHost, décrivant l'entreprise et ses valeurs"
        ]);
    }

    public function view_equipe() {
        return view('a_propos.equipe', [
            'description' => "Page a propos de l'équipe de NxHost"
        ]);
    }

    public function view_carriere() {
        return view('a_propos.recrutement', [
            'description' => "Page a propos des offres d'emplois chez NxHost",
            "offreEmplois" => null
        ]);
    }
}
