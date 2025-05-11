@extends('manager.base')

@section('body')
{{-- Ici, on va affiche un tableau en format liste, ou on fait apparaitre le produit, l'état et un bouton d'interaction (potentiellement aussi voir facture lier a ce produit) --}}
    <main class="container mx-auto p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 bg-white rounded-lg shadow">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Produit</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">État</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!is_null($productListe) && count($productListe) > 0)
                        @foreach ($productListe as $product)
                            @php
                                $status = match(strtolower($product->status)) {
                                    'paye' => 'Actif',
                                    'closed' => 'Fermé',
                                    'client' => 'En attente de réponse',
                                    'support' => 'Une réponse vous attend',
                                    default => 'Inconnu',
                                };
                            @endphp
                            <tr 
                            class="cursor-pointer hover:bg-gray-100 transition" 
                            onclick="window.location.href='/services/view/{{ $product->id }}'">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $product->produit }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $status }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-gray-500" colspan="2">Aucun produit actuellement</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </main>
@endsection