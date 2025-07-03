<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller

{
    public function index()
    {
        return view("layouts.master");
    }

    public function change(Request $request)
    {
        $currentTheme = $request->input("theme");
        $newTheme = ($currentTheme === "dark") ? "light" : "dark";
        session([
            "theme" => "$newTheme"
        ]);
        return back();
    }
}