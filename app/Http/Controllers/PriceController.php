<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function update(Request $request, Price $price)
    {
        $price->fill($request->all());
        $price = $price->fresh();
        return response()->json($price);
    }

    public function delete(Price $price)
    {
        $price->delete();
        return response(null, 202);
    }
}
