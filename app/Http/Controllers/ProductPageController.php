<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductPageController extends Controller
{   
    private $url;
    private $offres;

    public function __construct(Request $request) {
        $url = array_slice(explode('/', $request->getRequestUri()), 1);
        $this->url = [
            'categorys' => $url[0],
            'produit' => $url[1]
        ];

        $this->offres = config("global.categorie.".$this->url['categorys'].".group_list.".$this->url['produit']);
        
        if(is_null($this->offres)) {
            return redirect()->to(url('/'));
            exit;
        }
    }

    public function index(Request $request) {

        switch($this->url['categorys']) {
            case "hebergement":
                if($this->url['produit'] == "web") {
                    return $this->HebergementWeb($request, $this->url);
                }
                break;
            case "gaming":
                return $this->HebergementGaming($request, $this->url);
                break;
        }
    }

    public function HebergementWeb(Request $request, $url) {

        return view("product.web",
            [   
                "produit" => $this->offres,
                "offres" => $this->offres['product_list'],
                "description" => "Découvrez nos offres web pour tout type de projets, qu'il soit petit, ou avancée."
            ]
            );
    }

    public function HebergementGaming(Request $request, $url) {

        return view("product.gaming",
            [   
                "produit" => $this->offres,
                "offres" => $this->offres['product_list'],
                "description" => "Découvrez nos offres gaming pour tout type de projets, qu'il soit petit, ou avancée."
            ]
            );
    }
}
