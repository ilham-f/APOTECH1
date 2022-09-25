<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ObatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->words(mt_rand(1,3), true),
            'category_id' => mt_rand(1,3),
            'slug' => $this->faker->slug(),
            'harga' => $this->faker->randomNumber(mt_rand(4,5), true),
            'stok' => $this->faker->randomNumber(3, false)
        ];
    }
}
