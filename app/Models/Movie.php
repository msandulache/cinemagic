<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;

class Movie extends Model
{
    use HasFactory, Markable;

    protected $guarded = [];

    protected static $marks = [
        Favorite::class,
    ];
}
