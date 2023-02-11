<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends CustomModel
{
    use HasFactory;

    public function car() 
    {
        $this->belongsTo(Car::class);
    }
}
