<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'bmw' . fake()->name(5),
            'year' => fake()->year(),
            'motor' => 'motor' . fake()->name(5),
            'doors' => 5,
            'passenger' => 5,
            'transmission' => fake()->boolean() ? "Automatic" : "Manual",
            'user_id' => User::factory()->create(),
            'basic_insurance' => fake()->numberBetween(5000, 10000),
            'full_insurance' => fake()->numberBetween(5000, 10000),
            'participation_damage' => fake()->numberBetween(5000, 10000),
            'deposit' => fake()->numberBetween(5000, 10000),
        ];
    }
}
