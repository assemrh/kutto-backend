<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, "index"])->name("home");

Route::get('/about-us', [\App\Http\Controllers\HomeController::class, "about"])->name("about-us");
Route::get('/contact', [\App\Http\Controllers\HomeController::class, "contact"])->name("contact");
Route::get('/donations-and-sponsorships', [\App\Http\Controllers\HomeController::class, "donations"])->name("donatation");

Route::resource("posts", \App\Http\Controllers\PostController::class);
Route::resource("pets", \App\Http\Controllers\PetController::class);
Route::resource("home", \App\Http\Controllers\HomeController::class);


Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'tr'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
});
