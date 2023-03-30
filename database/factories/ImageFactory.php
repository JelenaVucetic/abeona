<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $image_name = $this->faker->imageUrl(370, 220, 'animals', true, 'cats');

        return [
            'name' => $this->faker->name(),
            'path' => $image_name,
            'type' => fake()->word()
        ];
    }
}
