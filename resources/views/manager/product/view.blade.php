@extends('base')

@section('title', "$product->produit - Détails")

@section('body')
@php
$status = match(strtolower($product->status)) {
    'paye' => 'Paye',
    'closed' => 'Fermé',
    'client' => 'En attente de réponse',
    'support' => 'Une réponse vous attend',
    default => 'Inconnu',
};
@endphp
<main class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg text-center">
        <div class="flex flex-col items-center">
            <div class="bg-blue-100 p-6 rounded-lg w-full flex flex-col items-center">
                {{-- <div class="bg-blue-600 p-4 rounded-lg flex items-center justify-center"> 
                    <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V10m4 11V10m-5-6h6a2 2 0 012 2v2H7V6a2 2 0 012-2z"></path></svg>
                </div>--}}
                <h2 class="text-2xl font-semibold mt-4">{{ $product->produit }}</h2>
                <span class="bg-gray-300 text-gray-800 px-4 py-1 rounded-full text-sm mt-2 inline-block">{{ $status }}</span>
            </div>
            <div class="w-full mt-6 text-sm text-gray-700 text-center space-y-2">
                <p><strong>Date d'inscription :</strong> {{ $product->created_at }}</p>
                <p><strong>Montant récurrent :</strong> €{{ number_format($product->prix, 2) }} EUR</p>
                <p><strong>Cycle de facturation :</strong> {{ ucfirst($product->duration) }} jours</p>
                <p><strong>Date d'échéance :</strong> {{ $product->finish_at }}</p>
            </div>
        </div>

        <div class="mt-8">
            <a href="/tickets/create" class="w-full bg-red-600 text-white py-3 px-2 rounded-lg hover:bg-red-700 block text-center">Demande d'annulation</a>
        </div>
        <div class="mt-6">
            <a href="http://panel.nexhost.fr/" class="w-full block bg-green-600 text-white text-center py-3 rounded-lg hover:bg-green-700">Go to Panel</a>
        </div>
    </div>
</main>
@endsection