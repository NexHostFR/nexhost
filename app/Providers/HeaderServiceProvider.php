<?php

namespace App\Providers;

use App\Models\Categorie;
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
            $categorieListe = config('global.categorie');
            $CategoriesProduct = [
                "url" => "product",
                "nom" => "Produits",
            ];
            $GroupProduct = [
                "url" => "gaming",
                "nom" => "Gaming",
            ];
            foreach($categorieListe as $categorie) {
                var_dump($categorie);
                if(is_null($categorie['group_list'])) {
                    array_push($CategoriesProduct, $categorie); 
                } else {
                    array_push($GroupProduct, $categorie);
                }
            }
            $view->with('CategoriesProduct', $CategoriesProduct);
            $view->with('GroupProduct', $GroupProduct);
        });
    }
}
