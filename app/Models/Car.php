<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends CustomModel
{
    use HasFactory;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['image', 'price'];

    /**
     * 
     * Get the User that created Car
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
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
