<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    use HasFactory;
    protected $table = "komens";

    protected $fillable = [
        'nama_user',
        'komen_user',
        'produk_id'
    ];

    public function produk()
    {
        return $this->belongsTo('App\Models\DetailProduk', 'produk_id', 'id');
    }
}
