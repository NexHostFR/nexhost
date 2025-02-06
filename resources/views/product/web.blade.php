@extends('produitBase')

@section('title_head_page')
<div class="text-center max-w-3xl mx-auto">
    <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Choisissez votre offre d'hébergement</h2>
    <p class="mt-4 text-lg text-gray-600">Des solutions adaptées à vos besoins pour faire briller votre site.</p>
</div>
@endsection

@section('product')
    <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 max-w-5xl mx-auto">
        @foreach ($offres as $offer)
            <div class="flex flex-col rounded-2xl shadow-md p-8 
                {{ $offer['highlight'] ? 'bg-gray-900 text-white' : 'bg-white ring-1 ring-gray-200' }}">
                
                <h3 class="text-lg font-semibold text-primary">{{ $offer['title'] }}</h3>
                <p class="mt-4 text-4xl font-bold">
                    {{$offer['price_currency']}}{{ $offer['price_format'] }}<span class="text-base font-medium {{ $offer['highlight'] ? 'text-gray-400' : 'text-gray-500' }}">
                        /{{ $offer['period'] }}
                    </span>
                </p>
                <p class="mt-2 text-sm {{ $offer['highlight'] ? 'text-gray-400' : 'text-gray-600' }}">
                    {{ $offer['description'] }}
                </p>

                <ul class="mt-6 space-y-3 text-sm {{ $offer['highlight'] ? '' : 'text-gray-600' }}">
                    @foreach ($offer['features'] as $feature)
                        <li class="flex items-center gap-x-2">
                            <svg class="w-5 h-5 {{ $offer['highlight'] ? 'text-indigo-400' : 'text-indigo-500' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>

                <a href="#" class="mt-4 rounded-md bg-primary text-center text-white py-2.5 text-sm font-semibold shadow">
                    Commencer
                </a>
            </div>
        @endforeach
    </div>
@endsection

@section('hero')
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
@endsection


@section('boost')
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
@endsection