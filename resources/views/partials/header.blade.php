<header class="flex-top p-3">
    <div class="d-flex flex-wrap align-items-center justify-content-around">
        <div class="row align-items-center">
            <a class="col text-decoration-none" href="/"><img src="./asset/img/logo.png" alt="Logo de NexHost"></a>
        </div>
        <div class="d-flex justify-content-around">
            <ul class="nav justify-content-center">
                {% for category in CATEGORYS %}
                    <li><a href="/produit/{{ category.url }}" class="nav-link text-body-emphasis">{{ category.name }}</a></li>
                {% endfor %}
            </ul>
            <a target="_blank" href="https://manager.nexhost.fr"><button class="btn btn-secondary">Espace client</button></a>
        </div>
    </div>
</header>