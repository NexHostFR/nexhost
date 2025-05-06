@extends('base')

@section('title', "Manager")

@section('body')
<main>
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row">
            @foreach ($CardListeInformationCompte as $InformationCompte)
                <div class="card border shadow-md m-3 p-4 flex flex-col">
                    <div class="card-body">
                        <h2 class="text-xl font-bold mb-2">{{ $InformationCompte['titre'] }}</h2>
                        <span class="text-gray-700">{{ $InformationCompte['information'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row">
            <div class="card border shadow-md m-4 flex-1">
                <div class="card-header bg-gray-100 p-4 font-semibold text-lg">
                    Mes Services
                </div>
                <div class="card-body p-4">
                    @if(!is_null($productListe) && count($productListe) > 0)
                        @foreach($productListe as $product)
                            @php
                                switch(strtolower($product->status)) {
                                    case 'paye':
                                        $status = 'Actif';
                                        break;
                                    case 'closed':
                                        $status = 'Fermé';
                                        break;
                                    case 'client':
                                        $status = 'En attente de réponse';
                                        break;
                                    case 'support':
                                        $status = 'Une réponse vous attend';
                                        break;
                                    default:
                                        $status = 'Inconnu';
                                        break;
                                }
                            @endphp
                            <a class="flex items-center no-underline hover:bg-gray-50 p-4 rounded transition" href="/services/view/{{ $product->id }}">
                                <div class="flex-1 flex items-center">
                                    <span class="text-green-600 font-semibold mr-4">{{$status}}</span>
                                    <div>
                                        <h5 class="text-lg font-bold">{{$product->produit}}</h5>
                                    </div>
                                </div>
                                <button class="btn border border-gray-300 rounded px-4 py-2 hover:bg-gray-100 transition">
                                    Afficher le détails
                                </button>
                            </a>
                        @endforeach
                    @else
                        <div class="text-center text-gray-500">
                            Aucun produit actuellement
                        </div>
                    @endif
                </div>
            </div>
            <div class="card border shadow-md m-4 flex-1 md:flex-none md:w-1/4">
                <div class="card-header bg-gray-100 p-4 font-semibold text-lg">
                    Mes Tickets
                </div>
                <div class="card-body p-4">
                    @if(!empty($ticketListe))
                        @foreach ($ticketListe as $ticket)
                            @php
                                switch($ticket->status) {
                                    case "open":
                                        $status = "Ouvert";
                                        break;
                                    case "closed":
                                        $status = "Fermé";
                                        break;
                                    case "client":
                                        $status = "En attente de réponse";
                                        break;
                                    case "support": 
                                        $status = "Une réponse vous attend";
                                        break;
                                }
                            @endphp
                            <a href="/tickets/view/{{ $ticket->id }}" class="ticket flex items-center cursor-pointer hover:bg-gray-50 p-4 rounded transition">
                                <span class="flex-1 text-gray-600">{{ $status }}</span>
                                <h5 class="text-lg font-bold">{{ $ticket->titre }}</h5>
                            </a>
                        @endforeach
                    @else
                        <div class="text-center text-gray-500">
                            Aucun ticket actuellement
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
@endsection