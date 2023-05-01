<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Price extends CustomModel
{
    use HasFactory;

    protected $guarded = ['car_id'];

    protected function car()
    {
        return $this->belongsTo(Car::class);
    }
}
