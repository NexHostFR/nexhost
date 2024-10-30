@extends('base')

@extends('body')
<main>
    <div class="container-fluid">

    </div>
    <!-- Section introductive avec la culture -->
    <div class="container text-center">
        <h3>Notre culture</h3>
        <p>Chez NexHost, nous valorisons la passion et l'innovation. Ici, chaque membre de l'équipe a la possibilité de partager ses idées, d'explorer de nouvelles technologies et de contribuer au développement de solutions numériques à la fois éthiques, durables et indépendantes des géants de l'internet. Nous croyons en un futur numérique plus responsable, où chaque contribution compte.</p>
        <p>Travailler chez NexHost, c'est aussi évoluer dans un cadre bienveillant et stimulant. Nous mettons un point d'honneur à garantir un environnement de travail équilibré, où le respect de la vie personnelle est aussi important que l'accomplissement professionnel. Ici, ton épanouissement, tant personnel que professionnel, est au cœur de nos priorités.</p>
        <p>Rejoins-nous pour façonner l'avenir de l'internet, tout en préservant un équilibre sain entre créativité, collaboration et bien-être au quotidien.</p>
    </div>
    <!-- Section Benefice et Avantage -->
    <div class="container mt-10">
        <div class="d-flex flex-md-row flex-column">
            <div class="col">

            </div>
            <div class="col">
                <div class="benefit-item">
                    <h5>Télétravail et horaires flexibles</h5>
                    <p>Nous comprenons l'importance de l'équilibre entre vie professionnelle et personnelle. Chez NexHost, tu bénéficieras d'une grande flexibilité dans l'organisation de ton temps de travail, avec la possibilité de travailler à distance. Profite d'une liberté qui te permet d'être productif tout en respectant ton rythme de vie.</p>
                </div>
                <div class="benefit-item">
                    <h5>Travaille sérieusement, mais avec du fun</h5>
                    <p>Chez NexHost, nous croyons que le travail doit être stimulant et plaisant. Tout en maintenant un niveau élevé de professionnalisme, nous encourageons la créativité et la bonne humeur. Que ce soit à travers des projets passionnants ou des moments de détente entre collègues, nous combinons travail sérieux et atmosphère conviviale.</p>
                </div>
                <div class="benefit-item">
                    <h5>Un environnement collaboratif</h5>
                    <p>La collaboration est au cœur de notre culture. Tu rejoindras une équipe soudée où chaque voix compte. Partage tes idées, apprends de tes collègues et progresse dans une ambiance d'entraide et d'innovation.</p>
                </div>
                <div class="benefit-item">
                    <h5>Épanouissement personnel et professionnel</h5>
                    <p>Nous encourageons le développement de tes compétences et de ta créativité. Que ce soit à travers des formations ou des projets ambitieux, NexHost est l'endroit idéal pour grandir tout en restant toi-même.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sectrion liste des offres -->
    <div class="container mt-10 mb-5">
        <h3 class="text-center mb-5">Nos offres d'emploi</h3>
        {% if offresEmplois != null %}
            {% for offre in offresEmplois %}
                <div class="justify-content-between d-flex flex-column flex-md-row">
                    <h3>{{offre.NomOffre}}</h3>
                    <div class="d-flex flex-row">
                        <p>{{offre.TypeContrat}}</p>
                        <p>{{offre.Localisation}}</p>
                        <p>{{offre.Service}}</p>
                    </div>
                    <div>
                        <a href="{{ path('offre_emploi', {'id': offre.id}) }}">Voir l'offre</a>
                    </div>
                </div>
            {% endfor %}
            {% else %}
                <p class="text-center">Il n'y a pas d'offre pour le moment</p>
        {% endif %}
        
    </div>
    {% include "compenents/faq.html.twig" %}
</main>
@endsection