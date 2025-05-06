@extends('base')

@section('title', "Création d'un ticket")

@section('body')
<main class="flex justify-center p-6">
    <form action="" method="post" class="w-full md:w-3/4 bg-white p-6 shadow rounded-lg">
        <h2 class="text-2xl font-bold text-gray-700 mb-6">Créer un ticket</h2>
        @csrf
        <!-- Titre du ticket -->
        <div class="mb-4">
            <label for="titre" class="block text-sm font-medium text-gray-600">Titre du ticket</label>
            <input type="text" name="titre" id="titre" class="w-full mt-2 p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Titre du ticket" required>
        </div>

        <!-- Département et Produit concerné -->
        <div class="flex flex-col md:flex-row gap-6 mb-4">
            <!-- Département -->
            <div class="w-full">
                <label for="departement" class="block text-sm font-medium text-gray-600">Département</label>
                <select name="departement" id="departement" class="w-full mt-2 p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="technique" selected>Technique</option>
                    <option value="commercial">Commercial</option>
                </select>
            </div>
            <!-- Produit concerné -->
            <div class="w-full">
                <label for="product" class="block text-sm font-medium text-gray-600">Produit concerné</label>
                <select name="product" id="product" class="w-full mt-2 p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="null" selected>----------</option>
                    @if(isset($services) && $services)
                        @foreach ($services as $service)
                            <option value="{{ $service['id'] }}">{{ $service['name'] }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>

        <!-- Message -->
        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-600">Message</label>
            <textarea name="content" id="message" class="w-full mt-2 p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Message" rows="6" required></textarea>
        </div>

        <!-- Bouton d'envoi -->
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-medium rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Envoyer
            </button>
        </div>
    </form>
</main>

<style>
    textarea {
        height: auto;
    }
    @media (min-width: 768px) {
        textarea {
            height: 200px;
        }
    }
</style>
@endsection