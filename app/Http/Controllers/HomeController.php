<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $services = Service::latest()->get();
        return view('home.index',compact('services'));
    }

    public function service(Service $service)
    {
        return view('home.services', compact('service'));
    }


    public function contact()
    {
        return view('home.contact');
    }
}
