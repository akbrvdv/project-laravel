<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 1. Tambahkan baris ini
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // 2. Tambahkan baris ini di dalam class
}