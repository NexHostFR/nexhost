<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{   
    private $url = null;
    private $categorie;
    private $produit;
    private $offres;

    public function __construct(Request $request) {
        $url = array_slice(explode('/', $request->getRequestUri()), 1);
        if(!empty($url)) {
            $this->categorie = Categorie::where('url', $url[0])->get();
            $this->offres = Categorie::where('url', $url[1])->get()->first();
            $this->produit = Produits::where('categorie_id', $this->offres->id)->get();
            $this->url = [
                'categorys' => $url[0],
                'produit' => $url[1]
            ];
        }
        
        if(is_null($this->offres) && is_null($this->categorie) && is_null($this->produit)) {
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
                "offres" => $this->produit,
                "description" => "Découvrez nos offres web pour tout type de projets, qu'il soit petit, ou avancée."
            ]
            );
    }

    public function HebergementGaming(Request $request, $url) {
        return view("product.gaming",
            [
                "produit" => $this->offres,
                "offres" => $this->produit,
                "description" => "Découvrez nos offres gaming pour tout type de projets, qu'il soit petit, ou avancée.",
                "keywords" => "hebergement, gaming, anti ddos fivem, minecraft hosting, hebergeur serveur minecraft, fivem server, hosting france, hébergeur minecraft, fivem anti ddos, hébergeur fivem gratuit, hebergeur fivem gratuit, hébergeur fivem gratuit 24h"
            ]
            );
    }
}
