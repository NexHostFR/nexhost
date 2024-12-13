<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function index(Request $request) {
        // On récupère et on le traite afin de plus facilement manipuler par la suite
        $url = array_slice(explode('/', $request->getRequestUri()), 1);
        $url = [
            'categorys' => $url[0],
            'produit' => $url[1]
        ];

        $categorie = config("global.categorie.".$url['categorys']);
        
        if(is_null($categorie)) {
            return redirect()->to(url('/'));
            exit;
        }

        return view("produit",
            [
                "description" => "Découvrez nos offres web pour tout type de projets, qu'il soit petit, ou avancée."
            ]
            );
    }
}
