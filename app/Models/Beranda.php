<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;
    protected $table = "berandas";

    protected $fillable = [
        'home_h1',
        'home_p1',
        'home_img1',
        'about_h1',
        'about_h2',
        'about_p1',
        'about_h3',
        'about_p2',
        'galeri_h1',
        'galeri_h2',
        'galeri_p1',
        'mitra_h1',
        'mitra_h2',
        'mitra_p1',
        'blog_h1',
        'blog_h2',
        'blog_p1',
        'kontak_h1',
        'kontak_h2',
        'kontak_p1'
    ];
}
