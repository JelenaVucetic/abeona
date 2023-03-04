<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Car;
use App\Models\Image;
use App\Models\Price;
use App\Enums\Season;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;


class CarTest extends TestCase
{
    use RefreshDatabase;

    public function test_getting_cars(): void
    {
        Car::factory()
            ->has(Image::factory()->count(1))
            ->has(Price::factory()->count(4)->sequence(
                ['season' => Season::Winter],
                ['season' => Season::Spring],
                ['season' => Season::Summer],
                ['season' => Season::Autumn],
            ))
            ->create();

        $response = $this->get('/cars');
        $response->dump();
        $response->assertStatus(200);
    }

    public function test_store_car(): void
    {
        Storage::fake("cars");
        $file = UploadedFile::fake()->image('car.png');

        $car = (object)array(
            "car" => array(
                "name" => "bmwMs. Noelia Cummerata",
                "year" => 2015,
                "motor" => "motorLucinda Jacobi",
                "doors" => 5,
                "passenger" => 5,
                "transmission" => "Automatic",
                "insurance_price" => 1000,
                "participation_damage" => 2000,
                "deposit" => 3000
            ),

            "images" => array(
                (object) [
                    "name" => "car.png",
                    "type" => "quo"
                ]
            ),
            "prices" => array(
                (object) array(
                    "season" => "zima",
                    "default" => 3216,
                    "1-3" => 2202,
                    "4-7" => 3160,
                    "8-15" => 1392,
                    "16-22" => 1024,
                    "23+" => 3884
                )
            )
        );

        echo json_encode($car);

        $response = $this->post('/cars', [
            "car" => $car
        ]);

        Storage::disk("local")->assertExists($file->hashName());
    }
}
