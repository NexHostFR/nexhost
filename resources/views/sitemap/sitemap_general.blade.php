<?php

$routes = collect(Route::getRoutes())
    ->map(function ($route) {
        return $route->uri();
    })
    ->filter(function ($uri) {
        return !str_starts_with($uri, 'api') && !str_starts_with($uri, 'sanctum') && !str_starts_with($uri, '_ignition'); // Exclure les routes qui commencent par "api"
    })
	->unique()
	->values()
	->all();
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($routes as $route)
        <url>
            <loc>https://nxhost.fr/{{ $route }}</loc>
        </url>
    @endforeach
	@foreach ($produitsListe as $offre)
		@foreach ($offre['group_list'] as $produit)
			<url>
				<loc>https://nxhost.fr/{{$offre['url']}}/{{$produit['url']}}</loc>
			</url>
		@endforeach
	@endforeach
</urlset>
