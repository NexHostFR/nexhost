<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
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

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'accept_consent' => 'required'
        ]);

        $newsletter = new Newsletter();
        $newsletter->saveNewsletter($request);

        return redirect()->back()->with('message', 'Merci pour votre inscription à notre newsletter');
    }
}
