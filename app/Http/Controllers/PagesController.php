<?php

namespace App\Http\Controllers;

use App\Models\Car;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about-us');
    }

    public function fleet()
    {
        return view('fleet');
    }

    public function contact()
    {
        return view('contact');
    }

    public function booking(Car $car)
    {
        return view('booking');
    }
}
