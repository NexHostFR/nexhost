@extends('base')

@section('body')
<main>
    <!-- Section Recrutement -->
    <section class="w-full my-20">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold">Rejoignez NexHost et façonnez l’avenir de l’hébergement web</h2>
            <p class="text-lg mt-6">Nous recherchons des talents créatifs et audacieux pour bâtir ensemble l’hébergement de demain.</p>
            <a href="/a-propos/carriere" class="bg-blue-500 text-white mt-8 px-6 py-3 inline-block rounded shadow hover:bg-blue-600 transition">Découvrir nos opportunités</a>
        </div>
    </section>

    <!-- Section Mission et Vision -->
    <section class="max-w-7xl mx-auto py-20">
        <div class="text-center">
            <div class="mb-16">
                <h3 class="text-2xl font-bold">Notre Mission</h3>
                <p class="mt-6">
                    Chez <strong>NexHost</strong>, nous nous engageons à offrir des solutions d’hébergement web
                    fiables, performantes et sécurisées, tout en restant proches de nos clients. Notre mission est de 
                    rendre l’hébergement accessible à tous, tout en préservant la transparence, l’éthique et l’innovation.
                </p>
            </div>
            <div>
                <h3 class="text-2xl font-bold">Notre Vision</h3>
                <p class="mt-6">
                    Nous aspirons à devenir un acteur de référence dans le monde de l’hébergement web, tout en favorisant
                    l’indépendance numérique de nos utilisateurs et en adoptant des pratiques durables. Chez NexHost, 
                    nous croyons en un internet libre, ouvert, où chaque projet peut prospérer.
                </p>
            </div>
        </div>
    </section>

    <!-- Section Valeurs -->
    <section class="w-full py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h3 class="text-2xl font-bold">Nos Valeurs</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-8 bg-white shadow rounded">
                    <h5 class="text-xl font-bold">Innovation</h5>
                    <p class="mt-4">Nous réinventons constamment nos services pour répondre aux besoins en perpétuelle évolution de nos clients.</p>
                </div>
                <div class="p-8 bg-white shadow rounded">
                    <h5 class="text-xl font-bold">Transparence</h5>
                    <p class="mt-4">Nos actions sont guidées par la transparence, et chaque décision est communiquée de manière ouverte et honnête.</p>
                </div>
                <div class="p-8 bg-white shadow rounded">
                    <h5 class="text-xl font-bold">Responsabilité</h5>
                    <p class="mt-4">Nous plaçons l’environnement au cœur de notre stratégie en réduisant notre empreinte carbone grâce à des pratiques écoresponsables.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Témoignages Clients -->
    <section class="w-full bg-gray-100 py-20">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-2xl font-bold mb-16">Ce Que Nos Clients Disent</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <blockquote class="p-8 bg-white shadow rounded">
                    <p class="mb-6">"NexHost a transformé notre infrastructure digitale grâce à leur expertise et leur réactivité. Nous les recommandons vivement !"</p>
                    <footer class="text-sm font-medium text-gray-500">Paul R., <cite title="Source Title">Startup XYZ</cite></footer>
                </blockquote>
                <blockquote class="p-8 bg-white shadow rounded">
                    <p class="mb-6">"Des services fiables et un support technique exceptionnel. NexHost a été un vrai atout pour notre croissance."</p>
                    <footer class="text-sm font-medium text-gray-500">Anaïs M., <cite title="Source Title">Agence Créative</cite></footer>
                </blockquote>
                <blockquote class="p-8 bg-white shadow rounded">
                    <p class="mb-6">"Une solution d’hébergement flexible et sécurisée qui s’adapte parfaitement à nos besoins. NexHost a gagné notre confiance."</p>
                    <footer class="text-sm font-medium text-gray-500">David L., <cite title="Source Title">E-commerce Pro</cite></footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Section Partenaires -->
    <section class="w-full py-20">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-2xl font-bold mb-16">Nos Partenaires de Confiance</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <img src="{{ asset('img/partner1.png') }}" alt="Partenaire 1" class="mx-auto w-30">
                </div>
                <div>
                    <img src="{{ asset('img/partner2.png') }}" alt="Partenaire 2" class="mx-auto w-30">
                </div>
                <div>
                    <img src="{{ asset('img/partner3.png') }}" alt="Partenaire 3" class="mx-auto w-30">
                </div>
                <div>
                    <img src="{{ asset('img/partner4.png') }}" alt="Partenaire 4" class="mx-auto w-30">
                </div>
            </div>
        </div>
    </section>

    <!-- Section de Contact -->
    <section class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-20">
            <h3 class="text-2xl font-bold text-center mb-16">Restons en Contact</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
                <div>
                    <h5 class="text-xl font-bold">Assistance Client</h5>
                    <p class="mt-4">Notre équipe est disponible 7 jours sur 7 pour répondre à vos questions et vous offrir un support dédié.</p>
                    <a href="/sales" class="border border-blue-500 text-blue-500 mt-6 px-6 py-3 inline-block rounded hover:bg-blue-500 hover:text-white transition">Contacter le Support</a>
                </div>
                <div>
                    <h5 class="text-xl font-bold">Suivez-nous sur les réseaux sociaux</h5>
                    <p class="mt-4">Rejoignez-nous sur les réseaux pour rester informé de nos nouveautés et projets.</p>
                    <div class="flex justify-center mt-6 space-x-4">
                        <a href="https://twitter.com/NexHostFR" class="w-10 h-10"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.facebook.com/NexHostFR" class="w-10 h-10"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.linkedin.com/company/nxhostfr" class="w-10 h-10"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.instagram.com/nexhostfr/" class="w-10 h-10"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection