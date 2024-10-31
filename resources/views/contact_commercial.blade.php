@extends('base')

@section('body')
<main>
    <div class="my-5 mx-auto text-center">
        <h1 class="display-5 fw-bold text-body-emphasis text-center">Contactez notre équipe commerciale</h1>
        <p>Développer vos activités avec un partenaire éthique et souverrain engagé pour la protection des données.</p>    
    </div>
    <!-- Liste d'information pour organisation -->
    <div class="container">
        <div class="d-flex flex-column flex-md-row">
            <div class="col m-4">
                <div class="m-2 p-2 rounded rounded-3 border">
                    <h5>Entreprise et administrations publiques</h5>
                    <p>Notre équipe commerciale est la pour  vous accompagne dans :</p>
                    <ul>
                        <li>la sélection de vos produits</li>
                        <li>votre transition numérique</li>
                        <li>la réalisation du devis</li>
                    </ul>
                </div>
                <div class="m-2 p-2 rounded rounded-3 border">
                    <h5>Start-Ups, non-profits et éducation</h5>
                    <p>NexHost soutient les associations à but non lucratif et les start-ups qui contribue à la protection des données et la souvraineté numérique.</p>
                </div>
                <div class="m-2 p-2 rounded rounded-3 border">
                    <h5>Une offre personnaliser</h5>
                    <p>NexHost vous crée une offre sur mesure en fonction de vos besoins.   </p>
                </div>
            </div>
            <div class="col m-4">
                <h3>Parlez-nous de votre projet</h3>
                <p>Pour vous aider au mieux, merci de nous fournir quelques informations sur vous :</p>
                {{ form_start(form_commercial_contact) }}

                <div class="d-flex flex-column flex-md-row">
                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.entite, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.nombre_employes, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>

                <div class="d-flex flex-column flex-md-row">
                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.nom, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.prenom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>

                <div class="d-flex flex-column flex-md-row">
                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.email, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.telephone, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>

                <div class="d-flex flex-column flex-md-row">
                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.fonction, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.nom_organisation, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>

                <div class="d-flex flex-column flex-md-row">
                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.country, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.city, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>


                <div class="d-flex flex-column flex-md-row">
                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.category_product, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.langue, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>

                <div class="d-flex flex-column flex-md-row">
                    <div class="col mb-3 m-2">
                        {{ form_widget(form_commercial_contact.source_info, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>

                <div class="col mb-3 m-2">
                    {{ form_widget(form_commercial_contact.demande_projet, {'attr': {'class': 'form-control'}}) }}
                </div>

                <button class="btn btn-outline-secondary text-body-emphasis m-2" type="submit">Envoyer ma demande</button>

                {{ form_end(form_commercial_contact) }}
            </div>
        </div>
    </div>
    <!-- Information sur le chef developpemetn business -->
    <div>
    
    </div>
    <!-- Caroussel avec des expérience de client -->
    <div>

    </div>
    <!-- Pourquoi choisir NexHost -->
    {% include 'compenents/information_general.html.twig' %}
</main>
@endsection
