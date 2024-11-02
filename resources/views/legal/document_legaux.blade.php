@extends('base')

@section('title', "Documents legaux")

@section('body')
<main>
    <section></section>
    <section>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Conditions générales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Conditions générales d'utilisation</td>
                        <td><a href="/cgv/condition-general-utilisation">Accès</a></td>
                    </tr>
                    <tr>
                        <td>Conditions générales de vente</td>
                        <td><a href="/cgv/condition-general-vente">Accès</a></td>
                    </tr>
                    <tr>
                        <td>Politique de confidentialite</td>
                        <td><a href="/cgv/politique-de-confidentialite">Accès</a></td>
                    </tr>
                    <tr>
                        <td>RGPD</td>
                        <td><a href="/cgv/RGPD">Accès</a></td>
                    </tr>
                    <tr>
                        <td>Mentions légales</td>
                        <td><a href="/cgv/mentions-legales">Accès</a></td>
                    </tr>
                </tbody>
            </table>
        </div>        
    </section>
</main>
@endsection