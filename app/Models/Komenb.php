<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komenb extends Model
{
    use HasFactory;
    protected $table = "komenbs";

    protected $fillable = [
        'nama_user',
        'komen_user',
        'blog_id'
    ];

    public function produk()
    {
        return $this->belongsTo('App\Models\DetailBlog', 'blog_id', 'id');
    }
}
