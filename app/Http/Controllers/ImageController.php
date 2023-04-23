<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Services\CarService;
use App\Models\Car;

class ImageController extends Controller
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function store(Request $request)
    {
        $car = Car::find($request->input("car_id"));
        $this->carService->storeImages($car, $request);
    }

    public function destroy(Image $image)
    {
        return $image->delete();
    }
}
