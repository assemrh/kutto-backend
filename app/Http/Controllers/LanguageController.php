<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    //
    public function locale($locale = null)
    {

        if (isset($locale) && in_array($locale, ['en', 'tr'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }
        return redirect()->back();
    }

}
