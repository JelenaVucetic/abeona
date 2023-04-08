<?php

namespace App\Http\Controllers;

use App\Helpers\DateTimeHelper;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PagesController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return view('welcome')->with(["cars" => $cars]);
    }

    public function findCar(Request $request)
    {
       // <== probably extract
        $startTimeString = $request->input("pick_up_date") . " " . $request->input("pick_up_time");
        $startTime = Carbon::createFromFormat('d/m/Y H:i', $startTimeString);

        $endTimeString = $request->input("pick_off_date") . $request->input("pick_off_time");
        $endTime = Carbon::createFromFormat('d/m/Y H:i', $endTimeString);


        $differenceInDays = $startTime->diffInDays($endTime);
        $differenceInHours = $startTime->diffInHours($endTime);


        if ($differenceInHours % 24 > 0) {
            $differenceInDays++;
        }

        $selectedSeason = getCurrentSeason($startTime);
        $numberOfDaysString = getStringFromNumberOfDays($differenceInDays);

        // rename
        $car_filter = (object) array(
            "pick_up_location" => $request->input('pick_up_location'),
            "pick_off_location" => $request->input('pick_off_location'),
            "pick_up_date" => $request->input('pick_up_date'),
            "pick_off_date" => $request->input('pick_off_date'),
            "pick_up_time" => $request->input('pick_up_time'),
            "pick_off_time" => $request->input('pick_off_time'),
        );
        // ==>
        $cars = Car::all()->map(function ($car) use ($selectedSeason, $numberOfDaysString, $differenceInDays) {
            $price = collect($car->prices)
                ->where('season', $selectedSeason)
                ->first();

            $car->pricePerDay = $price[$numberOfDaysString];
            $car->totalPrice = $price[$numberOfDaysString] * $differenceInDays;
            $car->totalDays = $differenceInDays;
            return $car;
        });

        return view('fleet', ['locale' => app()->getLocale(), 'cars' => $cars, 'car_filter' => $car_filter]);
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
}
