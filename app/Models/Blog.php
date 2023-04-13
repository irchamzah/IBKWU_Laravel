<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blogs";

    protected $fillable = [
        'sorotan_h1',
        'sorotan_h2',
        'sorotan_p1',
        'blog_h1',
        'blog_h2',
        'blog_p1'
    ];
}
