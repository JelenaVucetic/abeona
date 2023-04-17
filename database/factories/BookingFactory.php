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
            "car_price" => fake()->numberBetween(5000, 1000),
            "confirmed" => fake()->boolean(),
            "second_driver" => fake()->boolean(),
            "unlimited_mileage" => fake()->boolean(),
            "border_crossing" => fake()->boolean(),
            "baby_seat_small" => fake()->boolean(),
            "baby_seat_big" => fake()->boolean(),
            "baby_seat_booster" => fake()->boolean(),
            "basic_insurance" => fake()->boolean(),
            "full_insurance" => fake()->boolean(),
            "first_name" => fake()->firstName(),
            "last_name" => fake()->lastName(),
            "email" => fake()->email(),
            "phone_number" => fake()->phoneNumber(),
            "additional_information" => fake()->text(),
            "pick_up_location" => fake()->city(),
            "pick_up_date" => fake()->date('d/m/Y'),
            "pick_up_time" => fake()->time('H:i'),
            "pick_off_location" => fake()->city(),
            "pick_off_date" => fake()->date('d/m/Y'),
            "pick_off_time" => fake()->time('H:i'),
            "pick_up_price" => fake()->numberBetween(0, 100),
            "pick_off_price" => fake()->numberBetween(0, 100),
            "total" => fake()->numberBetween(5000, 1000)
        ];
    }
}
