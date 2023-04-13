<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = "footers";

    protected $fillable = [
        'phone',
        'email',
        'address',
        'yt_link',
        'ig_link',
        'twt_link',
        'li_link'
    ];
}
