<?php

namespace App\Listeners;

use App\Mail\ContactMail;
use App\Models\User;
use App\Events\ContactStored;
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
    public function handle(ContactStored $event)
    {
        $user = User::factory()->make([
            'name' => 'abeona',
            'email' => 'abeonarentacar@gmail.com'
        ]);
        Log::info($event->contact);
        Mail::to($user)->queue(new ContactMail($event->contact));
    }
}
