<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    use HasFactory;
    protected $table = "warnas";

    protected $fillable = [
        'nama_warna',
    ];

    public function sosmed()
    {
        return $this->hasMany('App\Models\Sosmed', 'warna_id', 'id');
    }
}
