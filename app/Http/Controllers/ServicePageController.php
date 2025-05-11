<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicePageController extends Controller
{   
    private $productManager;

    public function __construct() {
        $this->productManager = new Commande();
    }

    public function viewListeProduct() {
        return view('manager.product.liste',[
            'productListe' => $this->productManager->where("user_id", Auth::id())->get()
        ]);
    }

    public function viewProduct($id) {
        return view('product.view',[
            'product' => $this->productManager->where("id", $id)->first()
        ]);
    }
}

