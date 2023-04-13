<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBlog extends Model
{
    use HasFactory;
    protected $table = "kategori_blogs";

    protected $fillable = [
        'kategori'
    ];

    public function detail_blog()
    {
        return $this->hasMany('App\Models\DetailBlog', 'kategori_blog_id', 'id');
    }
}
