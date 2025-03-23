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
                "information" => "3",
                "description" => "serveurs basés en France"
            ),
            array(
                "information" => "1",
                "description" => "employé"
            ),
            array(
                "information" => "+90 %",
                "description" => "des ressources consacrées a la R&D"
            ),
            array(
                "information" => "100 %",
                "description" => "de nos clients satisfaits"
            ),
            array(
                "information" => "100 %",
                "description" => "créé en interne pour viser la souveraineté"
            )
        );
        return view('landing_page', [
            'ListeInformations' => $ListeInformations,
            'description' => "NxHost, l'hébergeur éthique et eco-responsable - Nous cherchons a vous fournir une infrastructure de qualités à des prix compétitif. Support local et accessible 7/7"
        ]);
    }

    public function store_newsletter(Request $request)
    {   
        $newsletter = new Newsletter();
        $newsletter->saveNewsletter($request);

        return redirect()->back()->with('message', 'Merci pour votre inscription à notre newsletter');
    }
}
