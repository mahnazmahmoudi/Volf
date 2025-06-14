<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function singleService()
    {
        return view('home.service-details');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
