<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->word,
            'slug'  => $this->faker->unique()->slug,
            'photo' => $this->faker->imageUrl('60','60'),
            'status' =>$this->faker->randomElement(['active','inactive']),
        ];
    }
}
