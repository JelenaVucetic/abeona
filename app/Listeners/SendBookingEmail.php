<?php

namespace App\Listeners;

use App\Events\BookingStored;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Log;
use Mail;
use App\Mail\BookingMail;

class SendBookingEmail
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
     * @param  \App\Events\BookingStored  $event
     * @return void
     */
    public function handle(BookingStored $event)
    {
        Log::info(json_encode($event->booking));
        $user = User::factory()->make([
            'name' => 'abeona',
            'email'=> $event->booking->email
        ]);
        Mail::to($user)->queue(new BookingMail($event->booking));
    }
}
