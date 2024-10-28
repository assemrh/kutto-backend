<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\session;

class LanguageController extends Controller
{
    //
    public function locale(Request $request, $locale = null)
    {

        if (isset($locale) && in_array($locale, ['en', 'tr'])) {
            session()->put('locale', $locale);
            App::setLocale($locale);
        }
        return back()->with('locale', $locale);
    }

}
