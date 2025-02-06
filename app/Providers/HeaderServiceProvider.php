<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('partials.header', function($view) {
            $CategoriesProduct = array(
                array(
                    "name" => "Web et Domaines",
                    "type" => "web",
                ),
                array(
                    "name" => "Gaming",
                    "type" => "gaming",
                ),
            );
            $GroupProduct = array(
                "web" => array(
                    "domaines" => array(
                        "name" => "Domaines",
                        "description" => "Trouvez le nom de domaine idéal",
                        "slug" => "/domaines",
                    ),
                    "hebergement" => array(
                        "name" => "Hébergement Web",
                        "description" => "Hébergez votre site web",
                        "slug" => "/hebergement/web",
                    )
                ),
                "gaming" => array(
                    "fivem" => array(
                        "name" => "Fivem",
                        "description" => "Serveur Fivem",
                        "slug" => "/gaming/fivem",
                    ),
                    "minecraft" => array(
                        "name" => "Minecraft",
                        "description" => "Serveur Minecraft",
                        "slug" => "/gaming/minecraft",
                    )
                    ),
            );
            $view->with('CategoriesProduct', $CategoriesProduct);
            $view->with('GroupProduct', $GroupProduct);
        });
    }
}
