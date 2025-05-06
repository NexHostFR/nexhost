<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="mx-auto max-w-5xl">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl">Paiement sécurisé</h2>

            @if(session('error'))
                <div class="mb-4 p-4 text-sm text-red-600 bg-red-100 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif


            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
                <!-- Formulaire Stripe -->
                <form id="payment-form" action="" method="POST" class="w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800 sm:p-8 lg:max-w-xl">
                    @csrf  <!-- Assure-toi que la directive CSRF est présente -->
                    
                    <!-- Section des informations utilisateur -->
                    <input type="hidden" name="user_id" value="{{ Auth::check() ? Auth::user()->id : '' }}">
                    
                    <div class="mb-4">
                        <label for="card_name" class="block text-sm font-medium text-gray-900 dark:text-white">Nom complet*</label>
                        <input type="text" id="card_name" name="card_name" required class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" placeholder="Jean Dupont">
                    </div>
                
                    <div class="mb-4">
                        <label for="card-element" class="block text-sm font-medium text-gray-900 dark:text-white">Carte bancaire*</label>
                        <div id="card-element" class="p-3 border rounded-lg bg-gray-50 dark:bg-gray-700"></div>
                        <div id="card-errors" class="mt-2 text-sm text-red-500"></div>
                    </div>
                
                    <button id="submit-button" class="w-full rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">
                        Payer maintenant
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

            <p class="mt-6 text-center text-gray-500 dark:text-gray-400 sm:mt-8">
                Paiement sécurisé via <a href="#" class="text-blue-600 underline dark:text-blue-400">Stripe</a>.
            </p>
        </div>
    </div>
</section>

<script src="https://js.stripe.com/v3/"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const stripe = Stripe('{{ env("STRIPE_PUBLIC_KEY") }}');  // Remplace par ta clé publique Stripe
    const elements = stripe.elements();
    
    // Personnalisation du champ carte
    const style = {
        base: {
            fontSize: "16px",
            color: "#32325d",
            "::placeholder": { color: "#aab7c4" }
        },
        invalid: { color: "#fa755a" }
    };

    // Création du champ carte
    const card = elements.create("card", { style });
    card.mount("#card-element");

    // Gestion des erreurs en live
    card.addEventListener("change", function(event) {
        const displayError = document.getElementById("card-errors");
        displayError.textContent = event.error ? event.error.message : "";
    });

    // Soumission du paiement
    const form = document.getElementById("payment-form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        document.getElementById("submit-button").disabled = true;

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                document.getElementById("card-errors").textContent = result.error.message;
                document.getElementById("submit-button").disabled = false;
            } else {
                // Ajouter le token à un champ caché dans le formulaire
                const tokenInput = document.createElement("input");
                tokenInput.type = "hidden";
                tokenInput.name = "stripeToken";
                tokenInput.value = result.token.id;
                form.appendChild(tokenInput);
                
                // Soumettre le formulaire avec le token Stripe
                form.submit();
            }
        });
    });
});
</script>