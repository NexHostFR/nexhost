<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HebergementPage extends Controller
{
    public function orderSuccess() {
        return view("order.success", [
            "title" => "Paiement réussi"
        ]);
    }

    public function orderCancel() {
        return view("order.cancel", [
            "title" => "Paiement annulé"
        ]);
    }
}
