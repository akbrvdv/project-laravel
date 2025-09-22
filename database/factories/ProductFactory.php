<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
<<<<<<< HEAD
            'name' => fake()->words(3, true),
            'description' => fake()->sentence(10),
            'price' => fake()->numberBetween(10000, 1000000),
        ];
    }
}
=======
            'name' => fake()->words(3, true), 
            'description' => fake()->sentence(10), 
            'price' => fake()->numberBetween(10000, 1000000), 
        ];
    }
}
>>>>>>> 691d9a08750ca0926c3e034b0b45002b0182fc7c
