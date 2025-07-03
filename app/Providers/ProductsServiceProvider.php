<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Products;

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
        View::composer("partials.header", function ($view) {
            $listOfCoffee = Products::where("danh_muc_id", 1)->limit(5)->get();
            $listOfTea = Products::where("danh_muc_id", 2)->limit(5)->get();

            $view->with([
                "listOfCoffee" => $listOfCoffee,
                "listOfTea" => $listOfTea,
            ]);
        });
    }
}
