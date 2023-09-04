<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class AdminController extends Controller
{
    public function dashboard()
    {
        $bookings = Booking::with(['car' => function ($query) {
            $query->withTrashed();
        }])
            ->orderByDesc('created_at')
            ->get();

        return view('admin.reservations.index', ['bookings' => $bookings]);
    }
}
