<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Price;
use Illuminate\Database\Seeder;
use App\Enums\Season;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
    }
}
