<?php

namespace App\Http\Controllers;


use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Services\CarService;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

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
        Storage::disk("public")->delete($image->path);
        $image->delete();
        return response()->json(null, 202);
    }
}
