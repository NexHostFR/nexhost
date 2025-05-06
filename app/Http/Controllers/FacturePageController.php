<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturePageController extends Controller
{   
    private $factureManager;

    public function __construct() {
        $this->factureManager = new Facture();
    }

    public function view_list() {
        return view('manager.facture.list', [
            'factureListe' => $this->factureManager::with('commande')->where("id_user", Auth::id())->get()
        ]);
    }
}
