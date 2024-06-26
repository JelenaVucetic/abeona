<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Services\CarService;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarController extends Controller
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        return view('admin.cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *use Illuminate\Support\Facades\Storage;
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $carRequest)
    {
        $car = $this->carService->storeCar($carRequest->input('car'));

        $this->carService->storeImages($car, $carRequest);

        $car->prices()->createMany(
            $carRequest->input('prices')
        );

        return redirect()->back()->withErrors('Validation failed. Please check the form inputs.')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    // Todo move to pages controller
    public function show(Car $car)
    {
        $selectedSeason = getCurrentSeason(Carbon::now());

        $price = collect($car->prices)
            ->where('season', $selectedSeason)
            ->first();

        $car->pricePerDay = $price["default"];
        return view('booking', ["car" => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {

        return view('admin.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->fill($request->all());
        $car->save();
        $car = $car->fresh();
        return response()->json($car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        return $car->delete();
    }

    public function find(Request $request)
    {
        $input = $request->all();
        return response()->json($input);
        // return view('fleet');
    }

    public function bookCar(Request $request)
    {
        $car = Car::find($request->input("car_id"));
        // <== probably extract
        $startTimeString = $request->input("pick_up_date") . " " . $request->input("pick_up_time");
        $startTime = Carbon::createFromFormat('d/m/Y H:i', $startTimeString);

        $endTimeString = $request->input("pick_off_date") . $request->input("pick_off_time");
        $endTime = Carbon::createFromFormat('d/m/Y H:i', $endTimeString);
//        dump($startTime->toDateTimeLocalString(), $endTime->toDateTimeLocalString());
        $differenceInHours = $startTime->diffInHours($endTime);
//        dump($differenceInHours);
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
        // ==>

        // mb extract
        $seasonDays = calculateSeasonDays($startTime, $endTime);
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

        return view('booking', ['car' => $car, 'car_filter' => $car_filter]);
    }


}
