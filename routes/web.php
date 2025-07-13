<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::redirect("/", "/Home");
Route::group(["prefix" => "Home"], function () {
    Route::get('/', [PageController::class, "indexHome"])->name("home");
    Route::post('/', [PageController::class, "theme"])->name("home.theme");
    Route::get("/introduce.html", [PageController::class, "indexIntroduce"])->name("introduce");
    Route::get("/termsOfUse.html", [PageController::class, "indexTermsOfUse"])->name("termsOfUse");
    Route::get("/security.html", [PageController::class, "indexSecurity"])->name("security");

    Route::get("/{nameCategory}.html", [PageController::class, "indexCategory"])->name("category");

    Route::get("/{nameCategory}/{nameProduct}.html", [PageController::class, "indexProduct"])->name("product");
});

Route::get("Register.html", [PageController::class, "indexRegister"])->name("register");

Route::get("Login.html", [PageController::class, "indexLogin"])->name("login");