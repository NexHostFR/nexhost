<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelPageController extends Controller
{
    public function index() {
        // Mail::to("camillefameck@gmail.com")->send(new TicketReponseMail(1));
        $ticketsListe = Ticket::where('user_id', auth()->user()->id)->get();
        
        $CardListeInformationCompte = [
            [
                "titre" => "Mes services",
                "information" => DB::connection('mysql_shop')->table('commandes')->where('user_id', Auth::user()->id)->count()
            ],
            [
                "titre" => "Mes factures",
                "information" => DB::connection('mysql_shop')->table('factures')->where('id_user', Auth::user()->id)->count()
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

