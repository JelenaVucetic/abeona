<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "car_id" => fake()->numberBetween(1,10),
            "confirmed" => fake()->boolean(),
            "second_driver" => fake()->boolean(),
            "unlimited_mileage" => fake()->boolean(),
            "border_crossing" => fake()->boolean(),
            "baby_seat_small" => fake()->boolean(),
            "baby_seat_big" => fake()->boolean(),
            "baby_seat_booster" => fake()->boolean(),
            "basic_insurance" => fake()->numberBetween(5000, 1000),
            "full_insurance" => fake()->numberBetween(5000, 1000),
            "deposit" => fake()->numberBetween(5000, 1000),
            "damage_participation" => fake()->numberBetween(5000, 1000),
            "first_name" => fake()->firstName(),
            "last_name" => fake()->lastName(),
            "email" => fake()->email(),
            "phone_number" => fake()->phoneNumber(),
            "additional_information" => fake()->text()
        ];
    }
}
