<?php

namespace App\Http\Controllers;

use App\Models\Pet;

class HomeController extends Controller
{

    public function index()
    {
        return view("home.index");
    }

    public function contact()
    {
        return view("home.contact");
    }
    public function about()
    {
        return view("home.about");
    }
    public function donations()
    {
        return view("home.donations");
    }
}
