<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemTransectionLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'transection_type' => $this->faker->numberBetween(1,4),
            'item_id' => $this->faker->numberBetween(1,20),
            'item_size' => $this->faker->numberBetween(1,4),
            'qty' => $this->faker->numberBetween(5,30),
            'remark'=> ''
        ];
    }
}
