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
            $CategoriesProduct = [];
            $GroupProduct = [];
            try {
                $CategoriesProduct = Categorie::where('categorie_parent', null)->get();
                $GroupProduct = Categorie::where('categorie_parent', '!=', null)->get();
            } catch (\Exception $e) {
                $categorieListe = config('global.categorie');
                foreach($categorieListe as $categorie) {
                    if(is_null($categorie['categorie_parent'])) {
                        array_push($CategoriesProduct, $categorie); 
                    } else {
                        array_push($GroupProduct, $categorie);
                    }
                }
            }
            $view->with('CategoriesProduct', $CategoriesProduct);
            $view->with('GroupProduct', $GroupProduct);
        });
    }
}
