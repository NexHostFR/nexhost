@extends('base')

@section('title', 'Inscription')

@section('body')
<main class="flex justify-center items-center h-screen">
    <form method="POST" action="{{ route('register') }}" class="w-full sm:w-96 bg-white p-8 rounded-lg shadow-lg">
        @csrf
        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                {{ session('error') }}
            </div>
        @endif
        <h1 class="text-center text-2xl font-semibold mb-6">Inscription</h1>

        <!-- Champ prénom -->
        <div class="mb-4">
            <label for="_first_name" class="block text-sm font-medium text-gray-700">Prénom</label>
            <input 
                class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('_first_name') border-red-500 @enderror" 
                type="text" 
                name="_first_name" 
                id="_first_name" 
                value="{{ old('_first_name') }}" 
                required 
                autofocus
            >
            @error('_first_name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Champ nom -->
        <div class="mb-4">
            <label for="_last_name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input 
                class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('_last_name') border-red-500 @enderror" 
                type="text" 
                name="_last_name" 
                id="_last_name" 
                value="{{ old('_last_name') }}" 
                required
            >
            @error('_last_name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Champ email -->
        <div class="mb-4">
            <label for="_email" class="block text-sm font-medium text-gray-700">Email</label>
            <input 
                class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('_email') border-red-500 @enderror" 
                type="email" 
                name="_email" 
                id="_email" 
                value="{{ old('_email') }}" 
                required
            >
            @error('_email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Champ mot de passe -->
        <div class="mb-4">
            <label for="_password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
            <input 
                class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('_password') border-red-500 @enderror" 
                type="password" 
                name="_password" 
                id="_password" 
                required
            >
            @error('_password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Champ caché pour l'étape -->
        <input type="hidden" name="etape" value="etape_debut">

        <!-- Lien vers la connexion -->
        <div class="text-center mb-4">
            <span>Vous avez déjà un compte ? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Connexion</a></span>
        </div>

        <!-- Bouton de soumission -->
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Créer un compte
        </button>
    </form>
</main>  
@endsection
