<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    //date formart from here on out is yyyy-mm-dd
    protected $fillable =[
        'title',
        'blogpost',
        'dateposted'
    ];
}
