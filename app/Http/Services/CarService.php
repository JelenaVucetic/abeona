<?php

namespace App\Http\Services;

use App\Models\Car;
use Auth;
use function League\Flysystem\toArray;

class CarService
{
    public function storeCar($carRequest)
    {
        return Car::create(
            array_merge(
                $carRequest,
                array("user_id" =>  Auth::id())
            )
        );
    }

    public function storeImages($car, $carRequest)
    {
        $files = $carRequest->file('files');
        $paths = [];
        foreach ($files as $file) {
            $path = $file->storePublicly('images', 'public');
            array_push($paths, $path);
        }

        $carImages = $carRequest->input('images');
        foreach ($carImages as $index => &$image) {
            $image['path'] = $paths[$index];
        }

        return $car->images()->createMany(
            $carImages
        );
    }
}
