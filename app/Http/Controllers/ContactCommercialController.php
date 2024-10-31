<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactCommercialController extends Controller
{
    public function view_contact_commercial()
    {
        return view('contact_commercial', [
            'description' => "Page de contact commercial"
        ]);
    }
}
