<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HebergementPage extends Controller
{
    public function orderSuccess() {
        return view("shop.order.success", [
            "title" => "Paiement réussi"
        ]);
    }

    public function orderCancel() {
        return view("shop.order.cancel", [
            "title" => "Paiement annulé"
        ]);
    }
}
