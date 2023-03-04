<?php

namespace App\Http\Controllers;

use App\Models\Car;

class PagesController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('welcome',  ['cars' => $cars]);
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
