@extends('base')

@section('body')
<main>
    <div class="d-flex flex-column flex-md-row py-5 my-5 align-items-center">
        <div class="col col-md-5 mx-auto text-center">
            <h1 class="display-5 fw-bold text-body-emphasis text-center">NexHost</h1>
            <p>Découvrez nos offres à petit prix, des hébergements web à partir de 1.99€ par mois. Nous proposons des serveurs très qualitatifs afin de monter votre projet sans aucun problème d'hébergeur.</p>
        </div>
        <div class="col col-md-5 mx-auto">
            <!--<p class="lead mb-4">Découvrez nos offres à petit prix, des hébergements web à partir de 1.99€ par mois. Nous proposons des serveurs très qualitatifs afin de monter votre projet sans aucun problème d'hébergeur.</p>-->
            <div class="card">
                <div class="card-body">
                    <div class="lead">Commencez par une offre gratuite:</div>
                    <h2>OFFRE WEB ( GRATUIT )</h2>
                    <p>Offre gratuite pour les petits projets.</p>
                    <a href="/produit/hebergement-web"><button class="w-100 btn btn-lg btn-secondary">Voire l'offre</button></a>
                    <!--<form class="d-flex flex-row border">
                        <span class="col-1 align-items-center">www.</span>
                        <input class="col" type="text" id="domain" aria-title="Rechercher votre nom de domaine">
                        <button class="col-1" type="submit">R</button>
                    </form>-->
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden py-5 container">
        <div class="d-flex flex-sm-row flex-column">
            <div class="col">
                <h2>Pourquoi choisir NexHost</h2>
                <div>
                    <dl>
                        <dt>Créé au cœur de l'Europe</dt>
                        <dd>Nous développons nos propres solutions qui sont conçues en France et hébergées en Europe.</dd>
                    </dl>
                </div>
                <div>
                    <dl>
                        <dt>Performances optimisées</dt>
                        <dd>Nos services garantissent une disponibilité élevée et des performances optimales pour vos projets en ligne.</dd>
                    </dl>
                </div>
                <div>
                    <dl>
                        <dt>Support exceptionnel</dt>
                        <dd>Profitez de la meilleure expérience d'assistance avec des experts dédiés à votre organisation.</dd>
                    </dl>
                </div>
                <div>
                    <dl>
                        <dt>Respect de la vie privée</dt>
                        <dd>Nous sommes indépendants et contribuons à un Internet qui garantit la confidentialité et protège la vie privée.</dd>
                    </dl>
                </div>
            </div>
            <div class="col">
                <img class="rounded-3 border border-2 border-light" width="100%" src="{{ asset('img/serveur-image-ssd.jpg') }}" alt="">
            </div>
        </div>
    </div>
    {% include 'compenents/discord.html.twig' %}
    <!-- Liste des produit les plus bas de chaque catégorie -->
    <div class="container mt-3 b-4 pb-4">
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
    </div>
    <div class="container mt-3 pt-4">
        <div class="d-flex flex-sm-row flex-column">
            <div class="col me-4">
                <img class="rounded-3 border border-2 border-light" width="100%" src="{{ asset('img/europe-carte.jpg') }}" alt="Carte de l'europe obtenue sur pixbay">
            </div>
            <div class="col ms-4">
                <h2>Votre hébergement partenaire en Europe</h2>
                <p>NexHost, votre hébergeur 100% européen, vous offre des solutions de haute performance, optimisées pour WordPress et d'autres CMS ou d'autres projets, à des prix compétitifs. Nos serveurs, situés en Europe, garantissent des performances optimales et une sécurité renforcer pour tous vos projets.
                <br>
                NexHost respect les législations sur la protection des données les plus stricte d'Europe.
                </p>
            </div>
        </div>
    </div>
    <!-- Section liste de produit -->
    <div>

    </div>
    <!-- Section Donnee et information -->
    <div class="container px-5 py-5 my-5 rounded rounded-3 border border-3">
        <div class="">
            <h2>Confiez vos données à une entreprise indépendante</h2>
            <!--<img src="" alt="Allée de rack dans un datacenter">-->
            <div>
                <div>
                    <h2 class="h4">Respect de la vie privée et de vos données</h2>
                    <p class="lead text-muted">NexHost appartient a son fondateur, ses employés et ses clients. Vos données sont traités en interne par des logiciel développer en France, qui respect votre vie priver et vos données.</p>
                </div>
                <div>
                    <h2 class="h4">Sécurité et protection des données</h2>
                    <p class="lead text-muted">NexHost maitrise de bout en bout ses services pour assurer la sécurité et la confidentialité des données.</p>
                </div>
                <div>
                    <h2 class="h4">Un cloud 100% indépendant</h2>
                    <p class="lead text-muted">NexHost, conçois et développe ses propres solution en interne, en France.</p>
                </div>
            </div>
        </div>
        <div class="my-5">
            <div>
                <h1>NexHost</h1>
                <p>1 an d'expertise et d'innovation</p>
            </div>
            <div class="border-top">
                {% for information in ListeInformations %}
                    <div class="p-5">
                        <h3>{{ information.information }}</h3>
                        <p>{{ information.description }}</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
    <!-- Section NewsLetter -->
    {% include 'compenents/newsletter.html.twig' %}
    <!-- Section Support -->
    {% include 'compenents/support_information.html.twig' %}
</main>
@endsection