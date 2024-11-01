<?php

namespace App\Http\Controllers;

use App\Models\ContactCommercial;
use Illuminate\Http\Request;

class ContactCommercialController extends Controller
{
    public function view_contact_commercial()
    {
        return view('contact_commercial', [
            'description' => "Page de contact commercial"
        ]);
    }

    public function send_contact_commercial(Request $request) {
        try {
            $contactCommercial = new ContactCommercial();
            $contactCommercial->entite = $request->input('entite');
            $contactCommercial->nombre_employes = $request->input('nombre_employes');
            $contactCommercial->nom = $request->input('nom');
            $contactCommercial->prenom = $request->input('prenom');
            $contactCommercial->email = $request->input('email');
            $contactCommercial->telephone = $request->input('telephone');
            $contactCommercial->fonction = $request->input('fonction');
            $contactCommercial->nom_organisation = $request->input('nom_organisation');
            $contactCommercial->country = $request->input('country');
            $contactCommercial->city = $request->input('city');
            $contactCommercial->category_product = $request->input('category_product');
            $contactCommercial->langue = $request->input('langue');
            $contactCommercial->source_info = $request->input('source_info');
            $contactCommercial->demande_projet = $request->input('demande_projet');

            $contactCommercial->save();
            return redirect()->to(url()->current())->with('success', 'Votre demande a bien été enregistrée');
        } catch (\Exception $e) {
            return redirect()->to(url()->current())->with('error', 'Une erreur est survenue lors de l\'enregistrement de votre demande');
        }
    }
}
