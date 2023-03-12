<?php

namespace App\Providers;

use App\Mail\ContactMail;
use App\Models\User;
use App\Providers\ContactMailStored;
use Log;
use Mail;

class SendContactEmail
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
     * @param  \App\Providers\ContactMailStored  $event
     * @return void
     */
    public function handle(ContactMailStored $event)
    {
        Log::info(json_encode($event->contact->email));
        $user = User::factory()->make(['email'=> $event->contact->email]);
        Log::info($event->contact);
        Mail::to($user)->queue(new ContactMail($event->contact));
    }
}
