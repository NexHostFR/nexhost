@extends('produitBase')

@section('title_head_page')
<div class="text-center max-w-3xl mx-auto">
    <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{$produit['titre_head']}}</h2>
    <p class="mt-4 text-lg text-gray-600">{{$produit['description_head']}}</p>
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

                <a href="https://shop.nxhost.fr/order{{$offer['url']}}" class="mt-4 rounded-md bg-primary text-center text-white py-2.5 text-sm font-semibold shadow">
                    Commencer
                </a>
            </div>
        @endforeach
    </div>
@endsection

@section('hero')
<section class="py-12">
    <div class="container mx-auto px-4 flex flex-row items-center">
        <div class="w-1/2">
            <h1 class="text-4xl font-bold mb-4">Découvre un serveur de jeu puissant</h1>
            <p class="text-gray-700 mb-6">Tout ce qui est nécessaire à la création d'un serveur de jeu, sécurisé, et une performance absolue avec un support de qualité.</p>
        </div>
        <div class="w-1/2">
            <!-- Image or illustration for the hero section -->
        </div>
    </div>
</section>
@endsection