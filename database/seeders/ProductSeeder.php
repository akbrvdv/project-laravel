<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\Product; // Pastikan ini ada
=======
use App\Models\Product;
>>>>>>> 691d9a08750ca0926c3e034b0b45002b0182fc7c

class ProductSeeder extends Seeder
{
    public function run(): void
    {
<<<<<<< HEAD
        Product::truncate();

        Product::create([
            'name' => 'Nasi Goreng Spesial',
            'description' => 'Nasi goreng dengan campuran telur, ayam, dan udang.',
            'price' => 25000,
        ]);

        Product::create([
            'name' => 'Sate Ayam Madura',
            'description' => '10 tusuk sate ayam dengan bumbu kacang khas Madura.',
            'price' => 30000,
        ]);
=======
        Product::factory()->count(10)->create();
>>>>>>> 691d9a08750ca0926c3e034b0b45002b0182fc7c
    }
}