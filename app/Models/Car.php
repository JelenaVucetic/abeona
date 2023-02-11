<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
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
    protected function user() {
        return $this->belongsTo(User::class);
    }

    protected function images() {
        return $this->hasMany(Image::class);
    }

    protected function prices() {
        return $this->hasMany(Price::class);
    }

     /**
     * 
     * Calculates prices depending of the season and number of days ordered
     * 
     */
    public function calculatePrice(int $days) : int {
        $
        return 10;
    }
}
