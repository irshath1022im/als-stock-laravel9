<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item' => $this->faker->ean13(),
            'thumbnail' => $this->faker->imageUrl(640,480),
            'category_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
