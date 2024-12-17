<header class="flex items-center p-3">
    <div class="flex flex-wrap items-center justify-between w-full">
        <div class="flex items-center">
            <a href="/" class="no-underline">
                <img src="/asset/img/logo.png" alt="Logo de NxHost" class="h-16">
            </a>
        </div>
        <ul class="flex space-x-4"> 
            @foreach (config("global.categorie") as $category)
                <li>
                    <a href="/produit/{{ $category['url'] }}" class="text-gray-900 hover:underline">
                        {{ $category["title"] }}
                    </a>
                </li>
            @endforeach
        </ul>
        <a target="_blank" href="https://manager.NxHost.fr">
            <button class="bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-800">Espace client</button>
        </a>
    </div>
</header>
