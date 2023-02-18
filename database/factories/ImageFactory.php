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
        $image_name = $this->faker->image(storage_path('app/public/images/'),640,480, null, false);

        return [
            'name' => $image_name,
            'path' => asset('/storage/images/' . $image_name),
            'type' => fake()->word()
        ];
    }
}
