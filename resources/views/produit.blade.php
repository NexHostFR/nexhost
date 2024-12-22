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
        {{-- Caroussel de tout les CMS compatible --}}
    </div>

    <div class="relative isolate px-6 py-24 sm:py-32 lg:px-8">
        {{-- Presentation des produit --}}
        <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
            <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Choisissez le meilleur hébergement pour votre site</h2>
        </div>
        <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
            <div class="rounded-3xl rounded-t-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none sm:p-10 lg:mx-0 lg:rounded-bl-3xl lg:rounded-tr-none">
                <h3 id="tier-hobby" class="text-base/7 font-semibold text-indigo-600">Hébergement Découverte</h3>
            </div>
        </div>
    </div>

    @include('components.information_general')

    @include('components.information_backup')

    <div>
        {{-- Avantage --}}
    </div>
</main>
@endsection
