<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
=======
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
    {
        public function run(): void
        {
            $this->call([
            ProductSeeder::class,
            ]);
        }
    }
>>>>>>> 691d9a08750ca0926c3e034b0b45002b0182fc7c
