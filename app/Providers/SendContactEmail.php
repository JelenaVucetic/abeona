<?php

namespace App\Providers;

use App\Mail\ContactMail;
use App\Models\User;
use App\Providers\ContactMailStored;
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
        Mail::to(User::factory()->make())->queue(new ContactMail());
    }
}
