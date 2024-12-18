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
                    <button type="button" class="inline-flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false" data-menu-target="menu-produit">
                        <span>Nos produits</span>
                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Flyout menu produit -->
                    <div id="menu-produit" class="menu absolute left-1/2 z-10 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4 hidden group-hover:block">
                        <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm/6 shadow-lg ring-1 ring-gray-900/5">
                            <div class="p-4">
                                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                                    <div class="mt-1 flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50">
                                        <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                            <path d="M13.405 7.027a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 13H13a3 3 0 0 0 .405-5.973"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <a href="/hebergement/web" class="font-semibold text-gray-900 group-hover:text-gray-500">
                                            Hébergement web
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Crée votre site en toute simplicite.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                                <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                                    <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd" />
                                    </svg>
                                    Watch demo
                                </a>
                                <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                                    <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />
                                    </svg>
                                    Contact sales
                                </a>
                            </div>--}}
                        </div>
                    </div>
                </li>
                <li>
                    <!-- Bouton pour le menu ressources -->
                    <button class="inline-flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false" data-menu-target="menu-ressources">
                        <span>Nos ressources</span>
                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Flyout menu ressources -->
                    <div id="menu-ressources" class="menu absolute left-3/5 z-10 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4 hidden group-hover:block">
                        <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm/6 shadow-lg ring-1 ring-gray-900/5 p-4">
                            <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                                <div class="flex flex-col items-start gap-y-2 p-3 text-gray-900">
                                    <h3 class="font-semibold">Support & contact</h3>
                                    <a href="/sales" class="hover:bg-gray-500">Contacter le service commercial</a>
                                </div>
                            </div>                            
                            
                            {{-- <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                                <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                                    <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd" />
                                    </svg>
                                    Watch demo
                                </a>
                                <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                                    <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />
                                    </svg>
                                    Contact sales
                                </a>
                            </div>--}}
                        </div>
                    </div>
                </li>
            </ul>
            <a target="_blank" href="https://manager.NxHost.fr">
                <button class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-800">Espace client</button>
            </a>
        </div>
    </div>
</header>