<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan ini ada

class ProductSeeder extends Seeder
{
    public function run(): void
    {
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
    }
}