<?php

namespace App\Listeners;

use App\Events\BookingConfirmed;
use App\Events\BookingStored;
use App\Mail\BookingConfirmedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Log;
use Mail;
use App\Mail\BookingMail;

class SendBookingConfirmedEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\BookingConfirmed  $event
     * @return void
     */
    public function handle(BookingConfirmed $event)
    {
        Log::info(json_encode($event->booking));
        $user = User::factory()->make([
            'name' => 'abeona',
            'email' => $event->booking->email
        ]);
        Mail::to($user)->queue(new BookingConfirmedMail($event->booking));
    }
}
