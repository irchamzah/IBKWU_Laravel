<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = "profils";

    protected $fillable = [
        'tentang_h1',
        'tentang_h2',
        'tentang_p1',
        'tentang_img1',
        'tentang_h3',
        'tentang_p2',
        'tentang_img2',
        'tentang_h4',
        'tentang_p3',
        'visi_h1',
        'visi_h2',
        'visi_p1',
        'visi_h3',
        'visi_p2',
        'visi_h4',
        'visi_p3',
        'tujuan_h1',
        'tujuan_h2',
        'tujuan_p1',
        'tujuan_h3',
        'tujuan_p2',
        'tujuan_h4',
        'tujuan_p3',
        'struktur_h1',
        'struktur_h2',
        'struktur_p1',
        'struktur_p2',
        'struktur_img1'
    ];
}
