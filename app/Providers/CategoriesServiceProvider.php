<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Categories;

class CategoriesServiceProvider extends ServiceProvider
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
        View::composer("partials.header", function ($view) {
            $categories = Categories::all();
            $view->with("categories", $categories);
        });

        View::composer("partials.category", function ($view) {
            $categories = Categories::all();
            $view->with("categories", $categories);
        });
    }
}
