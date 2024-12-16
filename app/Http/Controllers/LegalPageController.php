<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalPageController extends Controller
{
    public function document_legaux() {
        return view("legal.document_legaux", [
            "description" => "Page avec l'ensemble des documents légeux de NxHost"
        ]);
    }

    public function mentions_legales() {
        return view("legal.mentions_legales", [
            "description" => "Page avec les mentions légal du site NxHost"
        ]);
    }

    public function protection_donnes() {
        return view();
    }

    public function politique_confidentilite() {
        return view();
    }
}
