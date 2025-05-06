@extends('shop.base')

@section('body')
    <main>
        {{-- Section de l'offre selectionner et de son choix --}}
        @include('shop.components.offre')

        {{-- Section de la commande --}}
        
        {{-- Section d'authentification --}}
        @include('shop.components.auth')

        {{-- Section de payement --}}
        @if($total_price != 0)
            @include('shop.components.paiement')
        @else
            @if(session('error'))
                <div class="mb-4 p-4 text-sm text-red-600 bg-red-100 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif


            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
                <!-- Formulaire Stripe -->
                <form id="payment-form" action="" method="POST" class="w-full min-w-80 rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800 sm:p-8 lg:max-w-xl">
                    @csrf  <!-- Assure-toi que la directive CSRF est présente -->
                    
                    <!-- Section des informations utilisateur -->
                    <input type="hidden" name="user_id" value="{{ Auth::check() ? Auth::user()->id : '' }}">
                
                    <button id="submit-button" class="w-full rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">
                        Obtener maintenant
                    </button>
                </form>                

                <!-- Détails de la commande -->
                <div class="mt-6 grow sm:mt-8 lg:mt-0">
                    <div class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
                        <dl class="flex mb-3 item-center justify-between">
                            <dt class="text-sm text-gray-500 dark:text-gray-400">{{$data_produit["name"]}}</dt>
                            <dd class="text-lg font-bold text-gray-900 dark:text-white">{{$data_produit["price"]}}€</dd>
                        </dl>
                        <dl class="flex items-center justify-between">
                            <dt class="text-sm text-gray-500 dark:text-gray-400">Total</dt>
                            <dd class="text-lg font-bold text-gray-900 dark:text-white">{{$total_price}}€</dd>
                        </dl>
                    </div>

                    <div class="mt-6 flex items-center justify-center gap-8">
                        <img class="h-8 w-auto" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal.svg" alt="PayPal" />
                        <img class="h-8 w-auto" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa.svg" alt="Visa" />
                        <img class="h-8 w-auto" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard.svg" alt="MasterCard" />
                    </div>
                </div>
            </div>
        @endif
    </main>
@endsection