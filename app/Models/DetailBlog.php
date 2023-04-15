<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBlog extends Model
{
    use HasFactory;
    protected $table = "detail_blogs";

    protected $fillable = [
        'detail_blog_img',
        'judul_h1',
        'slug',
        'link_yt',
        'deskripsi_p1',
        'kategori_blog_id'
    ];

    public function foto_blog()
    {
        return $this->hasMany('App\Models\FotoBlog', 'blog_id', 'id');
    }

    public function kategori_blog()
    {
        return $this->belongsTo('App\Models\KategoriBlog', 'kategori_blog_id', 'id');
    }
}
