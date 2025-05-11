<?php

namespace App\Http\Controllers;

use App\Mail\CodeActivationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthPageController extends Controller
{   
    // Section de déconnexion
    public function logout(Request $request)
    {
        Auth::logout(); // Logs out the user

        $request->session()->invalidate(); // Invalidate session
        $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect('/manager/auth/login'); // Redirect to login page
    }

    // section de connexion
    public function index_login(Request $request) {
        // exit;
        session()->put('url_source', $request->get('url_source'));
        return view('manager.auth.login',
            [   
                'slimHeader' => true,
                'data' => ["email" => ""],
            ]
        );
    }

    public function post_login(Request $request) {
        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        if(!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Password incorrect');
        }

        Auth::login($user);


        if(!is_null(session()->get('url_source'))) {
            return response()->redirectTo(session()->get('url_source'));
        } else {
            return redirect()->to(url('/manager/'));
        }
    }

    // Section d'inscription
    public function index_register(Request $request) {
        session()->put('url_source', $request->get('url_source'));
        $etape = $request->session()->get('etapeSuivante');
        switch($etape) {
            case 'etape_code': 
                return view('manager.auth.register.etape_code',
                    [
                        'slimHeader' => true,
                        'data' => [
                            "email" => "",
                        ]
                    ]
                );
            case 'etape_fin':
                return view('manager.auth.register.etape_final',
                    [
                        'slimHeader' => true,
                        'data' => [
                            "adresse" => "",
                        ]
                    ]
                );
            default:
                return view('manager.auth.register.etape_debut',
                    [
                        'slimHeader' => true,
                        'data' => [
                            "email" => "",
                        ]
                    ]
                );
        }
    }

    public function post_register(Request $request) {
        switch($request->string('etape')->trim()) {
            case 'etape_debut':
                $this->InscriptionCompte($request);
                return redirect()->to(url()->current());
            case 'code_confidentiel':
                $this->InscriptionCode($request);
                return redirect()->to(url()->current());
                break;
            case 'etape_fin':
                $this->InscriptionFinal($request);
                if(!is_null(session()->get('url_source'))) {
                    return response()->redirectTo(session()->get('url_source'));
                } else {
                    return redirect()->to(url('/manager/'));
                }
                break;
        }
    }

    // Section gestion
    private function InscriptionCompte(Request $request) {
        $user = new User();
        try {
            if($user->where('email', $request->input('_email'))->exists()) {
                return redirect()->back()->with('error', 'Email déjà utilisé');
            }
            $user->email = $request->input('_email');
            $user->first_name = $request->input('_first_name');
            $user->last_name = $request->input('_last_name');
            $user->password = Hash::make($request->input('_password'));
            
            // Génération et affectation du code de confirmation
            $codeConfirmation = $this->GenerateurCode();
            $user->mail_confirm = $codeConfirmation;
    
            // Enregistrement de l'utilisateur dans la base de données
            $user->save();
    
            // Envoi de l'email avec le code d'activation
            Mail::to($user->email)->send(new CodeActivationMail($codeConfirmation));
    
            // Stocker uniquement l'ID de l'utilisateur dans la session, PAS l'objet complet
            $request->session()->put('etapeSuivante', 'etape_code');
            $request->session()->put('user_id', $user->id);  // Utiliser l'ID uniquement, pas l'objet complet
    
            $request->session()->save();
            
            // Vérification de la session et redirection
            if ($request->session()->has('user_id') && $request->session()->has('etapeSuivante')) {
                return redirect()->to(url()->current())->with('success', 'Compte créé avec succès');
            } else {
                return redirect()->back()->with('error', 'Erreur lors de la création du compte');
            }
        } catch (\Exception $e) {
            // Gestion des erreurs
            return redirect()->back()->with('error', $e->getMessage());
        }
    }    
    
    private function InscriptionCode(Request $request) {
        $user = User::where('id', $request->session()->get('user_id'))->first();
        try {
            if($user->mail_confirm == $request->string('_code')->trim()) {
                $user->mail_confirm = 'confirmed';
                $user->email_verified_at = now();
                $user->save();
                $request->session()->put('etapeSuivante', 'etape_fin');
                $request->session()->save();
                return redirect()->to(url()->current())->with('success', 'Code de confirmation correct');
            } else {
                return redirect()->back()->with('error', 'Code de confirmation incorrect');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e);
        }
    }

    private function InscriptionFinal(Request $request) {
        $user = User::where('id', $request->session()->get('user_id'))->first();
        try {
           if($request->input('type_status') == "particulier") {
                $user->address = $request->string('_adresse_particulier')->trim();
                $user->address2 = $request->filled('_adresse2_particulier') ? $request->input('_adresse2_particulier') : null;
                $user->postal_code = $request->string('_code_postal_particulier')->trim();
                $user->city = $request->string('_ville_particulier')->trim();
                $user->country = $request->string('_pays_particulier')->trim();
                $user->phone = $request->string('_phonenumber_particulier')->trim();
            } elseif($request->input('type_status') == "professionnel") {
                $user->address = $request->string('_adresse_professionnel')->trim();
                $user->address2 = $request->filled('_adresse2_professionnel') ? $request->input('_adresse2_professionnel') : null;
                $user->postal_code = $request->string('_code_postal_professionnel')->trim();
                $user->city = $request->string('_ville_professionnel')->trim();
                $user->country = $request->string('_pays_professionnel')->trim();
                $user->phone = $request->string('_phonenumber_professionnel')->trim();
                $user->company_name = $request->string('_companyname_professionnel')->trim();
                $user->tva_code = $request->string('_tva_code_professionnel')->trim();
            }
            $user->save();

            Auth::login($user);
            $request->session()->put('etapeSuivante', 'success');
            $request->session()->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e);
        }
    }

    private function GenerateurCode($longueur = 6) {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $codeAleatoire = '';

        for ($i = 0; $i < $longueur; $i++) {
            $codeAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }

        return $codeAleatoire;
    }

    public function authTransfert(Request $request)
    {   
        $authenticatedUser = Auth::user();
        return response()->json([
            'message' => 'Authentification réussie',
            'user' => $authenticatedUser,
            'cookie' => $request->cookie()
        ]);
    }
}

