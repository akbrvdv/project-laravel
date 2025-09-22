<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory; // 1. Tambahkan baris ini
>>>>>>> 691d9a08750ca0926c3e034b0b45002b0182fc7c
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];
}


=======
    use HasFactory; // 2. Tambahkan baris ini di dalam class
}
>>>>>>> 691d9a08750ca0926c3e034b0b45002b0182fc7c
