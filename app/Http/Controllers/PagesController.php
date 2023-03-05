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
        $cars = Car::all();
        return view('about-us', ['cars' => $cars]);
    }

    public function fleet()
    {
        $cars = Car::all();
        return view('fleet',  ['cars' => $cars]);
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
