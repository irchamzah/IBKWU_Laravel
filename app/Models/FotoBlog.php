<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoBlog extends Model
{
    use HasFactory;
    protected $table = "foto_blogs";

    protected $fillable = [
        'blog_id',
        'blog_img1',
        'blog_h1',
        'blog_p1'
    ];

    public function blog()
    {
        return $this->belongsTo('App\Models\DetailBlog', 'blog_id', 'id');
    }
}
