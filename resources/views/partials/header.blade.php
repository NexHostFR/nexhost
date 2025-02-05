<header class="flex items-center p-3">
    <div class="flex flex-wrap items-center justify-between w-screen">
        <div class="flex items-center">
            <a href="/" class="no-underline">
                <img src="/asset/img/logo.png" alt="Logo de NxHost" class="h-16">
            </a>
        </div>
        <div class="flex flex-row items-center justify-between w-1/2">
            <ul class="flex space-x-4">
                <li class="relative">
                    <!-- Bouton pour le menu produit -->
                    <button type="button" class="inline-flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900 open-menu" aria-expanded="false" data-menu-target="menu-produit">
                        <span>Nos produits</span>
                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Flyout menu produit -->
                    <div id="menu-produit" class="menu absolute left-1/2 z-10 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4 hidden group-hover:block">
                        <div class="w-screen max-w-3xl min-h-52 flex flex-row overflow-hidden rounded-3xl bg-white text-sm/6 shadow-lg ring-1 ring-gray-900/5">
                            <div class="w-3/12 border-r border-gray-200 flex flex-col items-center p-2">
                                @foreach ($CategoriesProduct as $Categorie)
                                    <button class="w-full py-2 text-left font-semibold text-gray-900 hover:bg-gray-50 px-4 my-1 rounded-lg open-group" aria-expanded="@if($loop->first) true @else false @endif" data-group-target="{{$Categorie['type']}}">
                                        {{ $Categorie['name'] }}
                                    </button>
                                @endforeach
                            </div>
                            <div class="w-8/12">
                                @foreach ($GroupProduct as $key => $GroupeListe)
                                    <div id="{{$key}}" class="@if($loop->first)  @else hidden @endif productgroup">
                                        @foreach ($GroupeListe as $Group)
                                            <div class="p-4">
                                                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                                                    <div class="mt-1 flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50">
                                                        <svg class="size-6 text-gray-600 group-hover:text-gray-500" fill="none" viewBox="-1 -1 26 26" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                            <path d="M13.405 7.027a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 13H13a3 3 0 0 0 .405-5.973"/>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <a href="{{$Group['slug']}}" class="font-semibold text-gray-900 group-hover:text-gray-500">
                                                            {{$Group['name']}}
                                                            <span class="absolute inset-0"></span>
                                                        </a>
                                                        <p class="mt-1 text-gray-600">{{$Group['description']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>
                <li class="relative">
                    
                </li>
            </ul>
            <a target="_blank" href="https://manager.NxHost.fr">
                <button class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-800">Espace client</button>
            </a>
        </div>
    </div>
</header>