<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Product;

class ProductsServiceProvider extends ServiceProvider
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
            $listOfCoffee = Product::where("danh_muc_id", 1)->limit(5)->get();
            $listOfTea = Product::where("danh_muc_id", 2)->limit(5)->get();

            $view->with([
                "listOfCoffee" => $listOfCoffee,
                "listOfTea" => $listOfTea,
            ]);
        });

        View::composer("frontend.pages.home", function ($view) {
            $listOfProducts = Product::all();

            $view->with("listOfProducts", $listOfProducts);
        });
    }
}
