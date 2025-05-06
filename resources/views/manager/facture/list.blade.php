@extends('base')

@section('title', "Mes factures")

@section('body')
<main class="container mx-auto p-4">
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 bg-white rounded-lg shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Produit</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Prix</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Date</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (isset($factureListe) && $factureListe->isNotEmpty())
                    @foreach ($factureListe as $facture)
                        @php
                            $status = match($facture->status) {
                                'paye' => 'Paye',
                                'closed' => 'Fermé',
                                'client' => 'En attente de réponse',
                                'support' => 'Une réponse vous attend',
                                default => 'Inconnu',
                            };
                        @endphp
                        <tr class="hover:bg-gray-100 transition">
                            <td class="px-6 py-4 text-sm text-gray-800"><?php echo (!is_null($facture->commande)) ? $facture->commande->produit : 'Aucun produit'?></td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $facture->prix/100 }}€</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $facture->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-6 py-4 text-sm font-medium {{ $facture->status === 'open' ? 'text-green-600' : 'text-gray-600' }}">
                                {{ $status }}
                            </td>
                            {{-- Action possible --}}
                            <td>
                                <a href="{{$facture->url_visualisation}}" target="_blank" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Voir</a>
                                <a href="{{$facture->url_pdf}}" target="_blank" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Télécharger</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            Aucune facture de disponible pour le moment.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</main>
@endsection