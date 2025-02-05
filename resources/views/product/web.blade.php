@extends('produitBase')

@section('product')
    <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 max-w-5xl mx-auto">
        <!-- Offer 1 -->
        <div class="flex flex-col bg-white rounded-2xl shadow-md ring-1 ring-gray-200 p-8">
            <h3 class="text-lg font-semibold text-primary">Offre Découverte</h3>
            <p class="mt-4 text-4xl font-bold text-gray-900">$29<span class="text-base font-medium text-gray-500">/mois</span></p>
            <p class="mt-2 text-sm text-gray-600">Idéal pour commencer votre présence en ligne.</p>
            <ul class="mt-6 space-y-3 text-sm text-gray-600">
                <li class="flex items-center gap-x-2">
                    <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                        clip-rule="evenodd" /></svg>
                    Hébergement de 10 sites
                </li>
                <li class="flex items-center gap-x-2">
                    <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                        clip-rule="evenodd" /></svg>
                    20 GB d'espace disque
                </li>
                <li class="flex items-center gap-x-2">
                    <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                        clip-rule="evenodd" /></svg>
                    Support 24/7
                </li>
            </ul>
            <a href="#" class="mt-auto rounded-md bg-primary text-center !text-white py-2.5 text-sm font-semibold shadow">Commencer</a>
        </div>

        <!-- Offer 2 -->
        <div class="flex flex-col bg-gray-900 text-white rounded-2xl shadow-md p-8">
            <h3 class="text-lg font-semibold text-primary">Offre Avancée</h3>
            <p class="mt-4 text-4xl font-bold">$99<span class="text-base font-medium text-gray-400">/mois</span></p>
            <p class="mt-2 text-sm text-gray-400">Pour les entreprises ambitieuses.</p>
            <ul class="mt-6 space-y-3 text-sm">
                <li class="flex items-center gap-x-2">
                    <svg class="w-5 h-5 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                        clip-rule="evenodd" /></svg>
                    Hébergement illimité
                </li>
                <li class="flex items-center gap-x-2">
                    <svg class="w-5 h-5 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                        clip-rule="evenodd" /></svg>
                    100 GB d'espace disque
                </li>
                <li class="flex items-center gap-x-2">
                    <svg class="w-5 h-5 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                        clip-rule="evenodd" /></svg>
                    Support dédié
                </li>
            </ul>
            <a href="#" class="mt-3 rounded-md bg-primary text-center text-white py-2.5 text-sm font-semibold shadow">Commencer</a>
        </div>
    </div>
@endsection