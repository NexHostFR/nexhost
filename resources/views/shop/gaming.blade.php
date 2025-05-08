@extends('shop.basePaiement')

@section('body')
<div class="p-6 bg-white rounded-lg shadow-sm">
    {{-- Section authentification --}}
    <div class="mb-10">
        <?php if(!is_null($user)) { ?>
            <h2 class="text-2xl font-semibold text-gray-800">Bonjour, <?php echo $user->first_name; ?> <?php echo $user->last_name ?> !</h2>
            <p>Vous êtes actuellement connecter a votre compte, vous pouvez procéder au paiement.</p>
        <?php } else { ?>
            <h2 class="text-2xl font-bold mb-2">Une connexion est requise</h2>
            <p class="text-gray-600 mb-6">Veuillez vous connecter ou vous inscrire pour continuer votre achat.</p>
            <div class="flex flex-row gap-3">
                <a href="/manager/auth/login?url_source={{$url_source}}" class="btn bg-gray-400 text-white">Connexion</a>
                <a href="/manager/auth/register?url_source={{$url_source}}" class="btn bg-gray-400 text-white">Inscription</a>
            </div>
        <?php } ?>
    </div>
    {{-- Type d'abonnement --}}
    <div class="mb-6">
        <h2 class="text-2xl font-semibold">Choisissez un cycle de facturation</h2>
        <p class="text-gray-600">Actuellement, le cycle de facturation disponible est uniquement mensuel.</p>
        <div class="flex flex-wrap">

        </div>
    </div>
</div>

@endsection