@extends('baseMail')

@section('body')
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-center text-gray-800">Votre code d'activation</h1>
        <p class="text-lg text-center text-gray-600 mt-4">
            Utilisez le code ci-dessous pour activer votre compte :
        </p>
        <div class="mt-6 text-center">
            <strong class="text-3xl font-semibold text-blue-600 bg-blue-100 px-6 py-2 rounded-lg">
                {{ $codeActivation }}
            </strong>
        </div>
        <p class="text-center text-gray-600 mt-4">
            Sélectionnez le code et copiez-le manuellement.
        </p>
    </div>
@endsection
