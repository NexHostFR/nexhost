@extends('base')

@section('title', 'Inscription')

@section('body')
<main class="flex justify-center items-center min-h-screen bg-gray-100">
    <form action="{{ route('register') }}" method="POST" class="w-full sm:w-96 p-8 bg-white rounded-lg shadow-lg flex flex-col">

        <h1 class="text-center text-2xl font-semibold mb-6">Inscription - Finalisation</h1>

        <!-- Sélection du type de statut -->
        <div class="flex justify-between mb-6">
            <div class="flex items-center">
                <input type="radio" class="form-radio text-blue-500" name="type_status" id="status_particulier" value="particulier" checked>
                <label for="status_particulier" class="ml-2">Particulier</label>
            </div>
            <div class="flex items-center">
                <input type="radio" class="form-radio text-blue-500" name="type_status" id="status_professionnel" value="professionnel">
                <label for="status_professionnel" class="ml-2">Professionnel / Organisation</label>
            </div>
        </div>

        <!-- Section Particulier -->
        <div class="section" id="section_particulier">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="form-group">
                    <label for="_adresse_particulier" class="block text-sm font-medium text-gray-700">Adresse</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_adresse_particulier" id="_adresse" >
                </div>
                <div class="form-group">
                    <label for="_phonenumber_particulier" class="block text-sm font-medium text-gray-700">Téléphone</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_phonenumber_particulier" id="_phonenumber" >
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="form-group">
                    <label for="_adresse2_particulier" class="block text-sm font-medium text-gray-700">Adresse 2</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_adresse2_particulier" id="_adresse2">
                </div>
                <div class="form-group">
                    <label for="_code_postal_particulier" class="block text-sm font-medium text-gray-700">Code postal</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_code_postal_particulier" id="_code_postal" >
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="form-group">
                    <label for="_ville_particulier" class="block text-sm font-medium text-gray-700">Ville</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_ville_particulier" id="_ville" >
                </div>
                <div class="form-group">
                    <label for="_pays_particulier" class="block text-sm font-medium text-gray-700">Pays</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_pays_particulier" id="_pays" >
                </div>
            </div>
        </div>

        <!-- Section Professionnel -->
        <div class="section hidden" id="section_professionnel">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="form-group">
                    <label for="_companyname_professionnel" class="block text-sm font-medium text-gray-700">Nom de l'entreprise</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_companyname_professionnel" id="_companyname" >
                </div>
                <div class="form-group">
                    <label for="_tva_code_professionnel" class="block text-sm font-medium text-gray-700">Numéro de TVA</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_tva_code_professionnel" id="_tva_code" >
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="form-group">
                    <label for="_adresse_professionnel" class="block text-sm font-medium text-gray-700">Adresse</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_adresse_professionnel" id="_adresse" >
                </div>
                <div class="form-group">
                    <label for="_phonenumber_professionnel" class="block text-sm font-medium text-gray-700">Téléphone</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_phonenumber_professionnel" id="_phonenumber" >
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="form-group">
                    <label for="_adresse2_professionnel" class="block text-sm font-medium text-gray-700">Adresse 2</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_adresse2_professionnel" id="_adresse2">
                </div>
                <div class="form-group">
                    <label for="_code_postal_professionnel" class="block text-sm font-medium text-gray-700">Code postal</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_code_postal_professionnel" id="_code_postal" >
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="form-group">
                    <label for="_ville_professionnel" class="block text-sm font-medium text-gray-700">Ville</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_ville_professionnel" id="_ville" >
                </div>
                <div class="form-group">
                    <label for="_pays_professionnel" class="block text-sm font-medium text-gray-700">Pays</label>
                    <input type="text" class="form-input mt-1 block w-full border border-gray-300 rounded-lg" name="_pays_professionnel" id="_pays" >
                </div>
            </div>
        </div>

        @csrf

        <input type="hidden" name="etape" value="etape_fin">

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Finaliser l'inscription
        </button>
    </form>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Form submit listener
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            if (document.getElementById('status_particulier').checked) {
                // Remove 'required' attribute from the professionnel section
                document.querySelectorAll('#section_professionnel input').forEach(input => {
                    input.removeAttribute('required');
                });
            } else if (document.getElementById('status_professionnel').checked) {
                // Remove 'required' attribute from the particulier section
                document.querySelectorAll('#section_particulier input').forEach(input => {
                    input.removeAttribute('required');
                });
            }
        });

        // Radio button toggle event listener
        document.querySelectorAll('.form-radio').forEach((radio) => {
            radio.addEventListener('click', (event) => {
                const status = event.target.value;
                document.querySelectorAll('.section').forEach((section) => {
                    section.classList.add('hidden');
                });
                document.getElementById(`section_${status}`).classList.remove('hidden');
            });
        });
    });
</script>
@endsection