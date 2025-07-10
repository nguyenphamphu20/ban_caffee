<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::redirect("/", "/Home");
Route::group(["prefix" => "Home"], function () {
    Route::get('/', [PageController::class, "indexHome"])->name("home");
    Route::post('/', [PageController::class, "theme"])->name("home.theme");

    Route::get("/{nameCategory}.html", [PageController::class, "indexCategory"])->name("category");

    Route::get("/{nameCategory}/{nameProduct}.html", [PageController::class, "indexProduct"])->name("product");
});