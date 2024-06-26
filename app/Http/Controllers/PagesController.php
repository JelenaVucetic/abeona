<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PagesController extends Controller
{

    public function index()
    {
        $now = now();
        $currentSeason = getCurrentSeason($now);

        $cars = Car::all()->map(function ($car) use ($currentSeason) {
            $price = collect($car->prices)
                ->where('season', $currentSeason)
                ->first();
            $car->pricePerDay = $price['default'];
            return $car;
        })->sortBy("pricePerDay");

        return view('welcome')->with(["cars" => $cars]);
    }

    public function findCar(Request $request)
    {
        // <== probably extract
        $startTimeString = $request->input("pick_up_date") . " " . $request->input("pick_up_time");
        $startTime = Carbon::createFromFormat('d/m/Y H:i', $startTimeString);

        $endTimeString = $request->input("pick_off_date") . $request->input("pick_off_time");
        $endTime = Carbon::createFromFormat('d/m/Y H:i', $endTimeString);


        \Log::info('Pick Up Date: ' . $request->input("pick_up_date"));
        \Log::info('Pick Up Time: ' . $request->input("pick_up_time"));
        \Log::info('Start Time String: ' . $startTimeString);
        \Log::info('Start Time: ' . $startTime);


        $differenceInHours = $startTime->diffInHours($endTime);
        $differenceInDays = (int)ceil($differenceInHours / 24);

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

        $seasonDays = calculateSeasonDays($startTime, $endTime);

        // ==>
        $cars = Car::all()->map(function ($car) use ($seasonDays, $numberOfDaysString, $differenceInDays) {

            $totalPrice = 0;
            foreach ($seasonDays as $season => $days) {
                $price = collect($car->prices)
                    ->where('season', $season)
                    ->first();
                $pricePerDay = $price[$numberOfDaysString];
                $totalPrice += $pricePerDay * $days;
            }

            $car->pricePerDay = $totalPrice / $differenceInDays;
            $car->totalPrice = $totalPrice;
            $car->totalDays = $differenceInDays;

            return $car;
        })->sortBy("pricePerDay");

        return view('fleet', ['cars' => $cars, 'car_filter' => $car_filter]);
    }

    public function about()
    {
        $now = now();
        $currentSeason = getCurrentSeason($now);

        $cars = Car::all()->map(function ($car) use ($currentSeason) {
            $price = collect($car->prices)
                ->where('season', $currentSeason)
                ->first();
            $car->pricePerDay = $price['default'];
            return $car;
        })
            ->sortBy("pricePerDay");

        return view('about-us', ['cars' => $cars]);
    }

    public function fleet()
    {
        $now = now();
        $currentSeason = getCurrentSeason($now);

        $cars = Car::all()->map(function ($car) use ($currentSeason) {
            $price = collect($car->prices)
                ->where('season', $currentSeason)
                ->first();
            $car->pricePerDay = $price['default'];
            return $car;
        })->sortBy("pricePerDay");

        return view('fleet',  ['cars' => $cars]);
    }

    public function contact()
    {
        return view('contact');
    }
}
