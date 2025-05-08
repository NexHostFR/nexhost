@extends('manager.baseMail')

@section('body')
    <main>
        <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-center text-gray-800">Votre ticket a été ouvert</h1>
            <p class="text-lg text-center text-gray-600 mt-4">
                Votre ticket a été ouvert avec succès. Vous pouvez suivre son évolution en vous connectant à votre espace client.
            </p>
            <div class="mt-6 text-center">
                <a href="{{$url}}" class="text-blue-600 bg-blue-100 px-6 py-2 rounded-lg inline-block mt-4">
                    Voir le ticket
                </a>
            </div>
        </div>
    </main>
@endsection