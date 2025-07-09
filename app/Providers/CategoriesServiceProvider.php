<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

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
        View::composer(["frontend.layouts.header", "frontend.layouts.category", "frontend.layouts.footer"], function ($view) {
            $categories = Category::all();
            $view->with("categories", $categories);
        });
    }
}
