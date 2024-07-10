<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bookingItems()
    {
        return $this->hasMany(BookingItem::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
