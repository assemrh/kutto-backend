<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\session;

class LanguageController extends Controller
{
    //
    public function locale(Request $request, $locale )
    {


        if (isset($locale) && in_array($locale, ['en', 'tr'])) {
            $request->session()->put('locale', $locale);
            $request->session()->save();
            App::setLocale($locale);
        }
        return redirect(app()->getLocale());
    }

}
