<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class AdminController extends Controller
{
    public function dashboard()
    {
        $bookings = Booking::all()->sortByDesc("created_at");
        return view('admin.reservations.index', ['bookings' => $bookings]);
    }
}
