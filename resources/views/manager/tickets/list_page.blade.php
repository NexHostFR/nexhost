@extends('manager.base')

@section('title', "Mes tickets")

@section('body')
<main class="container mx-auto p-4">
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 bg-white rounded-lg shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Département</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Titre</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Date</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Status</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($ticketsListe) && $ticketsListe->isNotEmpty())
                    @foreach ($ticketsListe as $ticket)
                        @php
                            $status = match($ticket->status) {
                                'open' => 'Ouvert',
                                'closed' => 'Fermé',
                                'client' => 'En attente de réponse',
                                'support' => 'Une réponse vous attend',
                                default => 'Inconnu',
                            };
                        @endphp
                        <tr 
                            class="cursor-pointer hover:bg-gray-100 transition" 
                            onclick="window.location.href='/tickets/view/{{ $ticket->id }}'">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $ticket->departement }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $ticket->titre }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $ticket->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-6 py-4 text-sm font-medium {{ $ticket->status === 'open' ? 'text-green-600' : 'text-gray-600' }}">
                                {{ $status }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            Aucun ticket disponible pour le moment.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</main>
@endsection