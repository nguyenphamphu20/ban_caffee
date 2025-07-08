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
        View::composer("frontend.layouts.header", function ($view) {
            $categories = Categories::all();
            $view->with("categories", $categories);
        });

        View::composer("frontend.layouts.category", function ($view) {
            $categories = Categories::all();
            $view->with("categories", $categories);
        });
    }
}