<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ trim($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) . ' - ' : '' }}Shop NxHost
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="/asset/img/logo.png" type="image/x-icon">
</head>
<body>
    <form class="md:px-10" action="" method="POST" id="payment-form">
        @csrf
        <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
            <div class="w-8/12">
                @yield('body')
            </div>
            <!-- Détails de la commande -->
            <div class="mt-6 grow sm:mt-8 lg:mt-0 w-4/10">
                <div class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
                    <h3 class="text-xl font-bold mb-4">Récapitulatif de la commande</h3>
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
                <p class="mt-6 text-center text-gray-500 dark:text-gray-400 sm:mt-8">
                    Paiement sécurisé via <a href="https://stripe.com/" class="text-blue-600 underline dark:text-blue-400">Stripe</a>.
                </p>
            </div>
        </div>
        <button type="submit" class="btn bg-neutral-600 text-white">Procéder au paiement</button>
    </form>
</body>
</html>