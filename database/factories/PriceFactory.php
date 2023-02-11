<?php

namespace Database\Factories;

use App\Enums\Season;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $seasons = array_column(Season::cases(), 'value');
        return [
            'season' => $seasons[fake()->numberBetween(0,3)],
            'default' => fake()->numberBetween(5000, 1000),
            '1-3' => fake()->numberBetween(5000, 1000),
            '4-7' => fake()->numberBetween(5000, 1000),
            '8-15' => fake()->numberBetween(5000, 1000),
            '16-22' => fake()->numberBetween(5000, 1000),
            '23+' => fake()->numberBetween(5000, 1000),
        ];
    }
}
