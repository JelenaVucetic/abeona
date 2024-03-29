<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends CustomModel
{
    use HasFactory;

    protected $with = ['car'];

    public function car()
    {
         return $this->belongsTo(Car::class);
    }
}
