<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;

class PageController extends Controller

{
    public function indexHome()
    {
        return view("frontend.pages.home");
    }

    public function theme(Request $request)
    {
        $currentTheme = $request->input("theme");
        $newTheme = ($currentTheme === "dark") ? "light" : "dark";
        session([
            "theme" => "$newTheme"
        ]);
        return back();
    }

    public function indexCategory($id)
    {
        $category = Category::find($id);
        $nameCategory = $category->ten_danh_muc;
        $listOfProducts = $category->products;

        return view("frontend.pages.categories", compact("listOfProducts", "nameCategory"));
    }
}
