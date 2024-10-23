<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, "index"]);

Route::resource("pets", \App\Http\Controllers\PetController::class);
Route::resource("home", \App\Http\Controllers\HomeController::class);
