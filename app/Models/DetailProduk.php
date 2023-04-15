<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    use HasFactory;
    protected $table = "detail_produks";

    protected $fillable = [
        'detail_produk_img',
        'judul_h1',
        'slug',
        'link_yt',
        'deskripsi_p1',
        'kategori_galeri_id'
    ];

    public function foto_produk()
    {
        return $this->hasMany('App\Models\FotoProduk', 'produk_id', 'id');
    }

    public function sosmed()
    {
        return $this->hasMany('App\Models\Sosmed', 'produk_id', 'id');
    }

    public function kategori_galeri()
    {
        return $this->belongsTo('App\Models\KategoriGaleri', 'kategori_galeri_id', 'id');
    }
}
