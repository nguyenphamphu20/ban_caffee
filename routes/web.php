<?php

use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CommonController::class, "index"]);
Route::post('/', [CommonController::class, "change"])->name("themes.change");