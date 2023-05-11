<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = "footers";

    protected $fillable = [
        'address',
        'address_2',
        'phone',
        'phone_2',
        'link_1',
        'link_2',
        'link_3',
        'link_4'
    ];
}
