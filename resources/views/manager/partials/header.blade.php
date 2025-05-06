@if (isset($slimHeader))
    
@else
    <header>
        <div class="flex flex-row py-3 justify-between items-center">
            <a href="/" class="w-1/12">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo de NexHost" class="h-auto">
            </a>
            <form class="w-2/3 hidden md:flex justify-center mx-3">
                {{-- <input type="text" class="rounded-l-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 w-1/2" id="search_query" name="search_query" placeholder="Votre recherche"> --}}
                {{-- <button type="button" class="rounded-r-full px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">Rechercher</button> --}}
            </form>
            <div class="w-1/4 md:w-1/12 relative">
                <a href="#" class="text-gray-800 hover:text-gray-600" id="user-menu-button" aria-expanded="false">
                    {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                </a>
                <ul class="absolute right-0 mt-2 bg-white border border-gray-300 rounded shadow-md hidden" id="user-menu">
                    {{-- <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil</a></li> 
                    <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Paramètre</a></li>--}}
                    <li><a href="/auth/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Déconnexion</a></li>
                </ul>
            </div>
        </div>
        <nav class="bg-white border-t border-gray-300">
            <button class="ms-3 md:hidden p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="menu-toggle">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden md:flex flex-col md:flex-row justify-between w-full my-4" id="menu-header">
                <div class="px-3 w-full md:w-1/5 justify-around flex flex-col md:flex-row">
                    <a href="/" class="w-full md:w-auto">
                        <button class="w-full px-4 py-2 border border-gray-300 rounded bg-white hover:bg-gray-100">Panel</button>
                    </a>
                    <a href="/services" class="w-full md:w-auto">
                        <button class="w-full px-4 py-2 border border-gray-300 rounded bg-white hover:bg-gray-100">Mes services</button>
                    </a>
                    <a href="/invoices" class="w-full md:w-auto">
                        <button class="w-full px-4 py-2 border border-gray-300 rounded bg-white hover:bg-gray-100">Facturation</button>
                    </a>
                </div>
                <div class="w-full md:w-1/5 flex flex-col md:flex-row justify-center">
                    <a href="/tickets" class="w-full md:w-auto mx-2">
                        <button class="w-full px-4 py-2 border border-gray-300 rounded bg-white hover:bg-gray-100">Mes tickets</button>
                    </a>
                    <a href="/tickets/create" class="w-full md:w-auto mx-2">
                        <button class="w-full px-4 py-2 border border-gray-300 rounded bg-white hover:bg-gray-100">Ouvrir un ticket</button>
                    </a>
                </div>
            </div>
        </nav>
    </header>
@endif
