<?php

use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;

Route::redirect("/", "/Home");
Route::get('/Home', [CommonController::class, "home"])->name("home");
Route::post('/Home', [CommonController::class, "theme"])->name("home.theme");