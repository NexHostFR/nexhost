@extends('shop.base')

@section('body')
<div class="max-w-2xl mx-auto mt-20 p-8 rounded-2xl shadow-lg">
    <div class="text-center">
        <h1 class="text-3xl font-bold text-green-400">✅ Paiement confirmé !</h1>
        <p class="mt-2">Ton serveur est presque prêt à drop dans la partie 🎮</p>
    </div>

    <div class="mt-6">
        <p class="text-lg font-semibold text-white">Voici ce qui arrive maintenant :</p>

        <ol class="list-decimal list-inside mt-4 space-y-3">
            <li><strong>Déploiement du serveur en cours</strong> ⚙️  
                <br>On installe ta machine de guerre sur nos serveurs ultra-rapides.</li>

            <li><strong>Envoi des infos par email</strong> 📬  
                <br>Tu recevras :
            <ul class="list-disc list-inside ml-4 mt-1">
                <li>L’adresse de ton serveur</li>
                <li>Les modalités d’accès à ton panel de gestion</li>
                <li>Un petit guide pour t’aider à démarrer</li>
            </ul>
            </li>

            <li><strong>Support réactif 24/7</strong> 🎧  
                <br>Besoin d’un coup de main ? Notre team est là, même en pleine nuit.</li>
        </ol>

        <a class="mt-6 text-blue-400 italic text-center" href="<?php echo env('APP_URL_MANAGER') ?>">Le lobby est prêt. À toi de lancer la partie ! 🚀</a>
    </div>
</div>
@endsection
