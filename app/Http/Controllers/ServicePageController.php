<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

