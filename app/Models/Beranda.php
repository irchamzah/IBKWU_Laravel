<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;
    protected $table = "berandas";

    protected $fillable = [
        'pengumuman_h1',
        'ig_h1',
        'link_ig',
        'yt_h1',
        'link_yt',
        'berita_h1',
        'galeri_h1',
        'lokasi_h1'
    ];
}
