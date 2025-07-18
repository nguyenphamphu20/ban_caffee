<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::redirect("/", "/Home");
Route::group(["prefix" => "Home", "middleware" => ["checkLogin"]], function () {


    Route::get("/introduce.html", [PageController::class, "indexIntroduce"])->name("introduce");
    Route::get("/termsOfUse.html", [PageController::class, "indexTermsOfUse"])->name("termsOfUse");
    Route::get("/security.html", [PageController::class, "indexSecurity"])->name("security");
    Route::get("/customer.html", [CustomerController::class, "indexCustomer"])->name("customer.index");

    Route::get("/{nameCategory}.html", [PageController::class, "indexCategory"])->name("category");
    Route::get("/{nameCategory}/{nameProduct}.html", [PageController::class, "indexProduct"])->name("product");
});

Route::get('/Home', [PageController::class, "indexHome"])->name("home");
Route::post('/Home', [PageController::class, "theme"])->name("home.theme");
Route::get("/Register.html", [AuthController::class, "indexRegister"])->name("register");
Route::post("/Register.html", [AuthController::class, "register"])->name("register");
Route::get("/Login.html", [AuthController::class, "indexLogin"])->name("login");
Route::post("/Login.html", [AuthController::class, "login"])->name("login");
Route::get("/logout", [AuthController::class, "logout"])->name("logout");
