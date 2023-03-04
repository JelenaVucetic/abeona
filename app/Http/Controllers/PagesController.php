<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\FindCarRequest;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('welcome')->with(["cars" => $cars]);
    }

    public function findCar(FindCarRequest $request)
    {

        $startTimeString = $request->input("pick_up_date") . " " . $request->input("pick_up_time");
        $startTime = Carbon::createFromFormat('d-m-Y H:i', $startTimeString);

        $endTimeString = $request->input("pick_off_date") . $request->input("pick_off_time");
        $endTime = Carbon::createFromFormat('d-m-Y H:i', $endTimeString);


        $differenceInDays = $startTime->diffInDays($endTime);
        $differenceInHours = $startTime->diffInHours($endTime);


        if ($differenceInHours % 24 > 0) {
            $differenceInDays++;
        }

        $selectedSeason = $this->getCurrentSeason($startTime);
        $numberOfDaysString = $this->getNumberOfDays($differenceInDays);

        $cars = Car::all()->map(function ($car) use ($selectedSeason, $numberOfDaysString, $differenceInDays) {
            $price = collect($car->prices)
                ->where('season', $selectedSeason)
                ->first();
            
            $car->pricePerDay = $price[$numberOfDaysString];
            $car->totalPrice = $price[$numberOfDaysString] * $differenceInDays;
            $car->totalDays = $differenceInDays;
            return $car;
        });

        return $cars;
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

    public function getCurrentSeason($date)
    {
        $month = $date->month;

        if ($month >= 3 && $month <= 5) {
            return 'proljeće';
        } elseif ($month >= 6 && $month <= 8) {
            return 'ljeto';
        } elseif ($month >= 9 && $month <= 11) {
            return 'jesen';
        } else {
            return 'zima';
        }
    }

    public function getNumberOfDays($days)
    {
        if ($days >= 0 && $days <= 3) {
            return '1-3';
        } elseif ($days >= 4 && $days <= 7) {
            return '4-7';
        } elseif ($days >= 8 && $days <= 15) {
            return '8-15';
        } elseif ($days >= 16 && $days <= 22) {
            return '16-22';
        } else {
            return '23+';
        }
    }
}
