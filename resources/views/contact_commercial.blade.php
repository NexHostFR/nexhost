@extends('base')

@section('title', "Contact Commercial")

@section('body')
<main>
    <div class="my-5 mx-auto text-center">
        <h1 class="text-4xl font-bold text-gray-900">Contactez notre &eacute;quipe commerciale</h1>
        <p class="text-gray-700">D&eacute;veloppez vos activit&eacute;s avec un partenaire &eacute;thique et souverain engag&eacute; pour la protection des donn&eacute;es.</p>
    </div>

    <!-- Liste d'information pour organisation -->
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 m-4">
                <div class="m-2 p-4 rounded-lg border border-gray-300">
                    <h5 class="font-semibold text-lg">Entreprise et administrations publiques</h5>
                    <p>Notre &eacute;quipe commerciale est l&agrave; pour vous accompagner dans :</p>
                    <ul class="list-disc pl-5">
                        <li>la s&eacute;lection de vos produits</li>
                        <li>votre transition num&eacute;rique</li>
                        <li>la r&eacute;alisation du devis</li>
                    </ul>
                </div>
                <div class="m-2 p-4 rounded-lg border border-gray-300">
                    <h5 class="font-semibold text-lg">Start-Ups, non-profits et &eacute;ducation</h5>
                    <p>NexHost soutient les associations &agrave; but non lucratif et les start-ups qui contribuent &agrave; la protection des donn&eacute;es et &agrave; la souverainet&eacute; num&eacute;rique.</p>
                </div>
                <div class="m-2 p-4 rounded-lg border border-gray-300">
                    <h5 class="font-semibold text-lg">Une offre personnalis&eacute;e</h5>
                    <p>NexHost vous cr&eacute;e une offre sur mesure en fonction de vos besoins.</p>
                </div>
            </div>

            <div class="flex-1 m-4 bg-gray-100 p-4 rounded-xl">
                <h3 class="text-2xl font-bold mb-4">Parlez-nous de votre projet</h3>
                <p class="text-gray-700 mb-4">Pour vous aider au mieux, merci de nous fournir quelques informations sur vous :</p>

                <form action="" method="post" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <select name="entite" id="entite" class="w-full rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-200" required>
                            <option value="organisation_non_lucratif">Organisation &agrave; but non lucratif</option>
                            <option value="start_up">Start-up</option>
                            <option value="pme">PME</option>
                            <option value="independant">Ind&eacute;pendant</option>
                            <option value="grand_entreprise">Grande entreprise</option>
                        </select>
                        <select name="nombre_employes" id="" class="w-full rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-200" required>
                            <option value="1">1</option>
                            <option value="2-9">2-9</option>
                            <option value="10-19">10-19</option>
                            <option value="20-49">20-49</option>
                            <option value="50-99">50-99</option>
                            <option value="100-199">100-199</option>
                            <option value="200+">200+</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-200">
                            <input type="text" name="nom" id="" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0" placeholder="Votre nom" required>
                        </div>
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-200">
                            <input type="text" name="prenom" id="" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0" placeholder="Votre pr&eacute;nom" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-200">
                            <input type="email" name="email" id="" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0" placeholder="Votre adresse email" required>
                        </div>
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-200">
                            <input type="tel" name="telephone" id="" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0" placeholder="Votre num&eacute;ro de t&eacute;l&eacute;phone" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-200">
                            <input type="text" name="fonction" id="" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0" placeholder="Votre fonction" required>
                        </div>
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-200">
                            <input type="text" name="nom_organisation" id="" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0" placeholder="Nom de votre organisation" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <select name="country" id="" class="w-full rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-200">
                            <option value="FR">France</option>
                            <option value="BE">Belgique</option>
                            <option value="CH">Suisse</option>
                            <option value="CA">Canada</option>
                            <option value="US">Etats-Unis</option>
                            <!-- Ajouter d'autres pays ici -->
                        </select>
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-200">
                            <input type="text" name="city" id="" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0" placeholder="Ville" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <select name="category_product" id="" class="w-full rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-200" required>
                            <option value="web">H&eacute;bergement Web</option>
                            <option value="autre">Autre</option>
                        </select>
                        <select name="langue" id="" class="w-full rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-200" required>
                            <option value="fr">Fran&ccedil;ais</option>
                            <option value="en">Anglais</option>
                        </select>
                    </div>

                    <div>
                        <select name="source_info" id="" class="w-full rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-200" required>
                            <option value="">S&eacute;lectionnez d&#39;o&ugrave; vous nous connaissez</option>
                            <option value="internet">Internet</option>
                            <option value="publicite">Publicit&eacute;</option>
                            <option value="recommandation">Recommandation</option>
                        </select>
                    </div>

                    <div>
                        <textarea name="demande_projet" class="py-1.5 pl-3 pr-8 rounded-lg border-gray-300 w-full h-40 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-200" placeholder="Parlez-nous de votre projet / demande"></textarea>
                    </div>

                    @csrf

                    <button class="btn bg-gray-800 text-white hover:bg-gray-700 rounded-lg px-4 py-2 mt-4" type="submit">Envoyer ma demande</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Informations g&eacute;n&eacute;rales -->
    @include('components/information_general')
</main>
@endsection