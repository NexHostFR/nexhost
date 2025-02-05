@extends('base')

@section('body')
<main>
    <!-- Hero Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 flex flex-row items-center">
            <div class="w-1/2">
                <h1 class="text-4xl font-bold mb-4">L'hébergement Web qui grandit avec vous</h1>
                <p class="text-gray-700 mb-6">Tout ce qui est nécessaire à la création de site web professionnel, sécurisé, et une performance absolue avec un support de qualité.</p>
                <a href="https://shop.nxhost.fr/order/select/hosting" target="_blank" class="bg-primary text-white font-bold py-2 px-4 rounded">Démarrer avec 30 jours gratuits</a>
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

    <div class="relative isolate px-6 py-24 sm:py-32 lg:px-8 bg-gray-50">
        <!-- Background Decoration -->
        <div class="absolute inset-x-0 -top-3 -z-10 transform overflow-hidden px-36 blur-3xl" aria-hidden="true">
          <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-pink-300 to-indigo-300 opacity-30"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
          </div>
        </div>
      
        <!-- Title Section -->
        <div class="text-center max-w-3xl mx-auto">
          <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Choisissez votre offre d'hébergement</h2>
          <p class="mt-4 text-lg text-gray-600">Des solutions adaptées à vos besoins pour faire briller votre site.</p>
        </div>
      
        <!-- Pricing Cards -->
        @yield('product')
    </div>      

    @include('components.information_general')

    @include('components.information_backup')

    <div>
        {{-- Avantage --}}
    </div>
</main>
@endsection
