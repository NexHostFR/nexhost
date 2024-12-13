<header class="flex items-center p-3">
    <div class="flex flex-wrap items-center justify-around">
        <div class="flex items-center">
            <a href="/" class="text-decoration-none">
                <img src="/asset/img/logo.png" alt="Logo de NexHost" class="h-16">
            </a>
        </div>
        <div class="flex justify-around">
            <ul class="flex space-x-4">
                {{-- {% for category in CATEGORYS %} 
                    <li><a href="/produit/{{ category.url }}" class="text-body-emphasis hover:underline">{{ category.name }}</a></li> 
                {% endfor %} --}}
            </ul>
            <a target="_blank" href="https://manager.nexhost.fr">
                <button class="btn bg-gray-700 text-white">Espace client</button>
            </a>
        </div>
    </div>
</header>