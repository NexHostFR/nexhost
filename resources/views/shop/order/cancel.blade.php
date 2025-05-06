@extends('shop.base')

@section('body')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-red-500">Quelque chose a mal tourné !</h1>
            <p class="mt-4 text-lg text-gray-700">Nous n'avons pas pu traiter votre paiement. Veuillez réessayer ou contacter le support si le problème persiste.</p>
            <div class="mt-6">
                <i class="fa fa-times-circle text-red-500 text-6xl"></i>
            </div>
            <p class="mt-4 text-lg text-gray-600">Il semble qu'il y ait eu une erreur avec votre transaction. Essayez de refaire le paiement ou contactez notre service client pour assistance.</p>
            <div class="mt-6 space-x-4">
                <a href="{{ url()->previous() }}" class="inline-block px-6 py-2 text-lg font-semibold text-white bg-gray-500 rounded-lg hover:bg-gray-600">Retour à la page précédente</a>
                <a href="{{ url('/') }}" class="inline-block px-6 py-2 text-lg font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Retour à l'accueil</a>
            </div>
        </div>
    </div>
@endsection
