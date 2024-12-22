@extends('base')

@section('body')
<main>
    <section class="container mx-auto text-center py-8">
        <h1>Découvrez notre équipe</h1>
        <p class="text-gray-700 leading-relaxed">Découvriez les personnes derrière NxHost.</p>
    </section>

    <!-- Section de listing des membres de l'équipe -->
    <section class="mx-auto mt-16 mb-10">
        @if (isset($membreEquipe) && $membreEquipe != null)
            <div>

            </div>
        @else
            <p class="text-center text-gray-700">Oups, personne est là, c'est bizzare</p>
        @endif
    </section>
</main>
@endsection