@extends('base')

@section('body')
<main class="bg-gray-50 text-gray-800 py-12 px-4 sm:px-8 lg:px-24">
    <section class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl p-8 space-y-10">
        <header class="text-center">
            <p class="bg-gradient-to-r from-pink-500 to-violet-500 bg-clip-text text-5xl font-extrabold text-transparent ...">
            Mentions Légales</p>
            <p class="text-sm text-gray-500">Conformément aux obligations légales en vigueur</p>
        </header>

        <article class="space-y-4">
            <h2 class="text-2xl font-semibold text-blue-500">1. Informations légales</h2>
            <p>Le présent site web est édité par :</p>
            <ul class="list-disc list-inside text-gray-700">
                <li><strong>Nom de l'éditeur :</strong> NxHost</li>
                <li><strong>Adresse :</strong> 16 Rue de la paix, 57490 Carling, France</li>
                {{-- <li><strong>Téléphone :</strong> 01 23 45 67 89</li> --}}
                <li><strong>Email :</strong> <a href="mailto:contact@nxhost.fr" class="text-blue-600 hover:underline">contact@nxhost.fr</a></li>
            </ul>
        </article>

        <article class="space-y-4">
            <h2 class="text-2xl font-semibold text-blue-500">2. Hébergement</h2>
            <p>Le site est hébergé par :</p>
            <ul class="list-disc list-inside text-gray-700">
                <li><strong>Nom :</strong> OVH Cloud</li>
                <li><strong>Adresse :</strong> 2 rue Kellermann, 59100 Roubaix, France</li>
                <li><strong>Téléphone :</strong> 1007</li>
            </ul>
        </article>

        <article class="space-y-4">
            <h2 class="text-2xl font-semibold text-blue-500">3. Propriétaire du site</h2>
            <p><strong>Nom :</strong> Nom de la personne ou de l'entreprise</p>
        </article>

        <article class="space-y-4">
            <h2 class="text-2xl font-semibold text-blue-500">4. Propriété intellectuelle</h2>
            <p>Tous les contenus présents sur ce site (textes, images, logos, etc.) sont protégés par des droits d'auteur. Toute reproduction, représentation, modification ou distribution de ces contenus sans autorisation est interdite.</p>
        </article>

        <article class="space-y-4">
            <h2 class="text-2xl font-semibold text-blue-500">5. Responsabilité</h2>
            <p>L'éditeur s'efforce d'assurer l'exactitude des informations, mais ne peut être tenu responsable des erreurs ou omissions. L'accès au site peut être suspendu pour maintenance.</p>
        </article>

        <article class="space-y-4">
            <h2 class="text-2xl font-semibold text-blue-500">6. Protection des données personnelles</h2>
            <p>Les données collectées sont utilisées selon la politique de confidentialité. Vous pouvez exercer vos droits d'accès, rectification ou suppression en contactant l’administrateur.</p>
        </article>

        <article class="space-y-4">
            <h2 class="text-2xl font-semibold text-blue-500">7. Cookies</h2>
            <p>Ce site utilise des cookies pour améliorer votre expérience de navigation. En continuant, vous acceptez leur utilisation.</p>
        </article>

        <footer class="text-center pt-8 border-t border-gray-200">
            <p class="text-sm text-gray-500"><em>Dernière mise à jour : {{ date('d/m/Y') }}</em></p>
        </footer>
    </section>

@endsection
