<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $table = "galeris";

    protected $fillable = [
        'sorotan_h1',
        'sorotan_h2',
        'sorotan_p1',
        'galeri_h1',
        'galeri_h2',
        'galeri_p1'
    ];
}
