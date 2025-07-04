<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller

{
    public function home()
    {
        return view("frontend.home");
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
}
