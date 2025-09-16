<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true), 
            'description' => fake()->sentence(10), 
            'price' => fake()->numberBetween(10000, 1000000), 
        ];
    }
}
