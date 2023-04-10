<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    use HasFactory;
    protected $table = "sosmeds";

    protected $fillable = [
        'nama_sosmed',
        'link_sosmed',
        'warna_id',
        'produk_id'
    ];

    public function produk()
    {
        return $this->belongsTo('App\Models\DetailProduk', 'produk_id', 'id');
    }

    public function warna()
    {
        return $this->belongsTo('App\Models\Warna', 'warna_id', 'id');
    }
}
