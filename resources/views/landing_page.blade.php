@extends('base')

@section('body')
<main>
    <div class="flex flex-col md:flex-row py-10 my-10 items-center">
        <div class="md:w-1/2 mx-auto text-center">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">NxHost</h1>
            <p class="mt-4">Découvrez nos offres à petit prix, des hébergements à partir de 1.99€ par mois. Nous proposons des serveurs très qualitatifs afin de monter votre projet sans aucun problème d'hébergeur.</p>
        </div>
        {{-- <div class="md:w-1/2 mx-auto mt-8 md:mt-0"> 
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="text-lg font-semibold">Commencez par une offre gratuite:</div>
                <h2 class="text-2xl font-bold mt-2">OFFRE WEB ( GRATUIT )</h2>
                <p class="mt-2">Offre gratuite pour les petits projets.</p>
                <a href="/produit/hebergement-web">
                    <button class="w-full bg-gray-700 text-white py-2 mt-4 rounded hover:bg-gray-800">Voir l'offre</button>
                </a>
            </div>
        </div>--}}
    </div>
    <div class="overflow-hidden py-10 container mx-auto">
        <div class="flex flex-col sm:flex-row">
            <div class="sm:w-1/2">
                <h2 class="text-2xl font-bold">Pourquoi choisir NxHost</h2>
                <div class="mt-4">
                    <dl class="mb-6">
                        <dt class="font-semibold">Créé au cœur de l'Europe</dt>
                        <dd class="mt-2 text-gray-900 dark:text-gray-300">Nous développons nos propres solutions qui sont conçues en France et hébergées en Europe.</dd>
                    </dl>
                    <dl class="mb-6">
                        <dt class="font-semibold">Performances optimisées</dt>
                        <dd class="mt-2 text-gray-700 dark:text-gray-300">Nos services garantissent une disponibilité élevée et des performances optimales pour vos projets en ligne.</dd>
                    </dl>
                    <dl class="mb-6">
                        <dt class="font-semibold">Support exceptionnel</dt>
                        <dd class="mt-2 text-gray-700 dark:text-gray-300">Profitez de la meilleure expérience d'assistance avec des experts dédiés à votre organisation.</dd>
                    </dl>
                    <dl class="mb-6">
                        <dt class="font-semibold">Respect de la vie privée</dt>
                        <dd class="mt-2 text-gray-700 dark:text-gray-300">Nous sommes indépendants et contribuons à un Internet qui garantit la confidentialité et protège la vie privée.</dd>
                    </dl>
                </div>
            </div>
            <div class="sm:w-1/2 mt-8 sm:mt-0">
                <img class="rounded-lg border-2 border-gray-300" src="/asset/img/serveur-image-ssd.jpg" alt="Serveur SSD" />
            </div>
        </div>
    </div>    
    @include('components.discord')
    <!-- Liste des produit les plus bas de chaque catégorie -->
    {{-- <div class="container mt-3 b-4 pb-4">
        <div class="d-flex flex-row row-cols-1 row-cols-md-3 justify-content-center text-center">
            {% for product in listeProduitPasCher %}
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{ product.name }}</h4>
                            <p class="mt-2">{{ product.text_description }}</p>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">{{ product.price }}€<small class="text-body-secondary fw-light">/mois</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                {% for description in product.description %}
                                    <li>{{ description }}</li>
                                {% endfor %}
                            </ul>
                            <a href="/produit/{{ product.category }}"><button class="w-100 btn btn-lg btn-secondary">Voir l'offre</button></a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div> --}}
    <div class="container mx-auto mt-6 pt-6">
        <div class="flex flex-col sm:flex-row">
            <div class="sm:mr-6 w-full sm:w-1/2">
                <img class="rounded-lg border-2 border-light" src="/asset/img/europe-carte.jpg" alt="Carte de l'europe obtenue sur pixbay">
            </div>
            <div class="sm:ml-6 w-full sm:w-1/2 mt-6 sm:mt-0">
                <h2 class="text-2xl font-bold">Votre hébergement partenaire en Europe</h2>
                <p class="mt-4 text-gray-700">NxHost, votre hébergeur 100% européen, vous offre des solutions de haute performance, à des prix compétitifs. Nos serveurs, situés en Europe, garantissent des performances optimales et une sécurité renforcée pour tous vos projets.
                <br>
                NxHost respecte les législations sur la protection des données les plus strictes d'Europe.
                </p>
            </div>
        </div>
    </div>    
    <!-- Section liste de produit -->
    <div>

    </div>
    <!-- Section Donnee et information -->
    <div class="container mx-auto px-6 py-6 my-6 rounded-lg">
        <div>
            <h2 class="text-2xl font-bold">Confiez vos données à une entreprise indépendante</h2>
            <!--<img src="" alt="Allée de rack dans un datacenter">-->
            <div class="mt-6 space-y-6">
                <div>
                    <h2 class="text-lg font-semibold">Respect de la vie privée et de vos données</h2>
                    <p class="text-gray-600">NxHost appartient à son fondateur, ses employés et ses clients. Vos données sont traitées en interne par des logiciels développés en France, qui respectent votre vie privée et vos données.</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold">Sécurité et protection des données</h2>
                    <p class="text-gray-600">NxHost maîtrise de bout en bout ses services pour assurer la sécurité et la confidentialité des données.</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold">Un cloud 100% indépendant</h2>
                    <p class="text-gray-600">NxHost conçoit et développe ses propres solutions en interne, en France.</p>
                </div>
            </div>
        </div>
        <div class="my-6">
            <div class="text-start mt-16">
                <h1 class="text-3xl font-bold">NxHost</h1>
                <p class="text-gray-700">1 an d'expertise et d'innovation</p>
            </div>
            <div class="border-t mt-6">
                <?php foreach ($ListeInformations as $information) { ?>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">{{ $information['information'] }}</h3>
                        <p class="text-gray-600">{{ $information['description'] }}</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>    
    <!-- Section NewsLetter -->
    @include('components.newsletter')
    <!-- Section Support -->
    @include('components.support_information')
</main>
@endsection