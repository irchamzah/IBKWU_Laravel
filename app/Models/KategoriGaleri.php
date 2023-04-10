<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    use HasFactory;
    protected $table = "kategori_galeris";

    protected $fillable = [
        'kategori'
    ];

    public function detail_produk()
    {
        return $this->hasMany('App\Models\DetailProduk', 'kategori_galeri_id', 'id');
    }
}
