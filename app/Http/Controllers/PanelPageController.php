<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Facture;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelPageController extends Controller
{
    public function index() {
        $ticketsListe = Ticket::where('user_id', auth()->user()->id)->get();
        
        $CardListeInformationCompte = [
            [
                "titre" => "Mes services",
                "information" => Commande::where('user_id', Auth::user()->id)->count()
            ],
            [
                "titre" => "Mes factures",
                "information" => Facture::where('id_user', Auth::user()->id)->count()
            ],
            [
                "titre" => "Mes tickets",
                "information" => count($ticketsListe)
            ]
        ];
        return view('manager.panel_page', [
            'CardListeInformationCompte' => $CardListeInformationCompte,
            'ticketListe' => $ticketsListe,
            "productListe" => Commande::where('user_id', Auth::user()->id)->get()
        ]);
    }
}

