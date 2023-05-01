<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends CustomModel
{
    use HasFactory, SoftDeletes;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['images', 'prices'];
    
    protected $guarded = ['images','prices'];

    /**
     *
     * Get the User that created Car
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    /**
     *
     * Calculates prices depending of the season and number of days ordered
     *
     */
    public function calculatePrice(int $days): int
    {
        return 10;
    }
}
