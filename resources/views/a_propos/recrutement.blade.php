@extends('base')

@section('body')
<main>
    <div class="w-full"> </div>

    <!-- Section introductive avec la culture -->
    <div class="container mx-auto text-center py-8">
        <h3 class="text-xl font-bold mb-4">Notre culture</h3>
        <p class="text-gray-700 leading-relaxed">Chez NexHost, nous valorisons la passion et l'innovation. Ici, chaque membre de l'équipe a la possibilité de partager ses idées, d'explorer de nouvelles technologies et de contribuer au développement de solutions numériques à la fois éthiques, durables et indépendantes des géants de l'internet. Nous croyons en un futur numérique plus responsable, où chaque contribution compte.</p>
        <p class="text-gray-700 leading-relaxed mt-4">Travailler chez NexHost, c'est aussi évoluer dans un cadre bienveillant et stimulant. Nous mettons un point d'honneur à garantir un environnement de travail équilibré, où le respect de la vie personnelle est aussi important que l'accomplissement professionnel. Ici, ton épanouissement, tant personnel que professionnel, est au cœur de nos priorités.</p>
        <p class="text-gray-700 leading-relaxed mt-4">Rejoins-nous pour façonner l'avenir de l'internet, tout en préservant un équilibre sain entre créativité, collaboration et bien-être au quotidien.</p>
    </div>

    <!-- Section Benefice et Avantage -->
    <div class="container mx-auto mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div> </div>

        <div>
            <div class="benefit-item mb-6">
                <h5 class="text-lg font-semibold">Télétravail et horaires flexibles</h5>
                <p class="text-gray-700 mt-2">Nous comprenons l'importance de l'équilibre entre vie professionnelle et personnelle. Chez NexHost, tu bénéficieras d'une grande flexibilité dans l'organisation de ton temps de travail, avec la possibilité de travailler à distance. Profite d'une liberté qui te permet d'être productif tout en respectant ton rythme de vie.</p>
            </div>
            <div class="benefit-item mb-6">
                <h5 class="text-lg font-semibold">Travaille sérieusement, mais avec du fun</h5>
                <p class="text-gray-700 mt-2">Chez NexHost, nous croyons que le travail doit être stimulant et plaisant. Tout en maintenant un niveau élevé de professionnalisme, nous encourageons la créativité et la bonne humeur. Que ce soit à travers des projets passionnants ou des moments de détente entre collègues, nous combinons travail sérieux et atmosphère conviviale.</p>
            </div>
            <div class="benefit-item mb-6">
                <h5 class="text-lg font-semibold">Un environnement collaboratif</h5>
                <p class="text-gray-700 mt-2">La collaboration est au cœur de notre culture. Tu rejoindras une équipe soudée où chaque voix compte. Partage tes idées, apprends de tes collègues et progresse dans une ambiance d'entraide et d'innovation.</p>
            </div>
            <div class="benefit-item">
                <h5 class="text-lg font-semibold">Épanouissement personnel et professionnel</h5>
                <p class="text-gray-700 mt-2">Nous encourageons le développement de tes compétences et de ta créativité. Que ce soit à travers des formations ou des projets ambitieux, NexHost est l'endroit idéal pour grandir tout en restant toi-même.</p>
            </div>
        </div>
    </div>

    <!-- Section liste des offres -->
    <div class="container mx-auto mt-10 mb-5">
        <h3 class="text-center text-xl font-bold mb-5">Nos offres d'emploi</h3>
        @if (isset($offresEmplois) && $offresEmplois != null)
            @foreach ($offresEmplois as $offre)
                <div class="flex flex-col md:flex-row justify-between items-center py-4 border-b border-gray-200">
                    <h3 class="text-lg font-semibold">{{ $offre->NomOffre }}</h3>
                    <div class="flex flex-wrap gap-4 mt-2 md:mt-0">
                        <p class="text-gray-600">{{ $offre->TypeContrat }}</p>
                        <p class="text-gray-600">{{ $offre->Localisation }}</p>
                        <p class="text-gray-600">{{ $offre->Service }}</p>
                    </div>
                    <a href="{{ route('offre_emploi', ['id' => $offre->id]) }}" class="text-blue-600 hover:underline">Voir l'offre</a>
                </div>
            @endforeach
        @else
            <p class="text-center text-gray-700">Il n'y a pas d'offre pour le moment</p>
        @endif
    </div>

    @include('components.faq')
</main>
@endsection