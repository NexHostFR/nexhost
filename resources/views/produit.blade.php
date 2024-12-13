@extends('base')

@section('body')
<main>
    <!-- Hero Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 flex flex-row items-center">
            <div class="w-1/2">
                <h1 class="text-4xl font-bold mb-4">L'hébergement Web qui grandit avec vous</h1>
                <p class="text-gray-700 mb-6">Tout ce qui est nécessaire à la création de site web professionnel, sécurisé, et une performance absolue avec un support de qualité.</p>
                <a href="https://shop.nxhost.fr/order/select/hosting" target="_blank" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded">Démarrer avec 30 jours gratuits</a>
            </div>
            <div class="w-1/2">
                <!-- Image or illustration for the hero section -->
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-12">
        <div class="container mx-auto px-4 flex flex-row mb-8">
            <div class="w-1/2">
                <h2 class="text-2xl font-semibold mb-4">Puissant et grandit avec vous</h2>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Profitez d'une amélioration continue que nous apportons</li>
                    <li>Boostez vos sites avec une infrastructure efficace</li>
                    <li>Bénéficiez d'un support de qualité</li>
                </ul>
            </div>
            <div class="w-1/2">
                <!-- Image or content related to features -->
            </div>
        </div>
    </section>

    <!-- For Any Site Section -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4 flex flex-row mb-8">
            <div class="w-1/2">
                <!-- Placeholder for content or image -->
            </div>
            <div class="w-1/2">
                <h2 class="text-2xl font-semibold mb-4">Conçus pour n'importe quel site</h2>
                <p class="text-gray-700">L'hébergement Web de NxHost vous offre toute la puissance et l'efficacité technologiques dont vous avez besoin pour réussir vos projets en ligne.</p>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        {{-- Liste en ligne de toutes les technologies --}}
    </div>
</main>
@endsection
