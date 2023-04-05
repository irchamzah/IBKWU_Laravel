<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProduk extends Model
{
    use HasFactory;
    protected $table = "foto_produks";

    protected $fillable = [
        'produk_id',
        'produk_img1',
        'produk_h1',
        'produk_p1'
    ];

    public function produk()
    {
        return $this->belongsTo('App\Models\DetailProduk', 'produk_id', 'id');
    }
}
