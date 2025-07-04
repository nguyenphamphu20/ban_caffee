<?php

use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;

Route::redirect("/", "/home");
Route::get('/home', [CommonController::class, "home"])->name("home");
Route::post('/home', [CommonController::class, "theme"])->name("home.theme");
