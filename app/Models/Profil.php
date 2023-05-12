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
        'tentang_p1',
        'visi_h1',
        'visi_h2',
        'visi_p1',
        'visi_h3',
        'visi_p2',
        'tujuan_h1',
        'tujuan_h2',
        'tujuan_p1',
        'tujuan_h3',
        'tujuan_p2',
        'struktur_h1',
        'struktur_p1',
        'struktur_img1',
        'sdm_h1',
        'sdm_p1'
    ];
}
