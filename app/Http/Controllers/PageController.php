<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;


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

    public function indexCategory($nameCategory)
    {
        $category = Category::where("ten_danh_muc", $nameCategory)->first();
        $listOfProducts = $category->products;

        return view("frontend.pages.categories", compact("listOfProducts", "nameCategory"));
    }

    public function indexProduct($nameCategory, $nameProduct)
    {
        $product = Product::where("ten_san_pham", $nameProduct)->first();
        return view("frontend.pages.product", compact("nameCategory", "product"));
    }


    // Các đường dẫn nhỏ

    public function indexIntroduce()
    {
        return view("frontend.pages.introduce");
    }

    public function indexTermsOfUse()
    {
        return view("frontend.pages.termsOfUse");
    }

    public function indexSecurity()
    {
        return view("frontend.pages.security");
    }
}