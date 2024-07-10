<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function movieHour()
    {
        return $this->hasOne(MovieHour::class, 'id', 'movie_hour_id');
    }
}
