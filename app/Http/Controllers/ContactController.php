<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Providers\ContactMailStored;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return Contact::all();
    }

    public function store(ContactRequest $contactRequest) {
        $contact = Contact::create(
            $contactRequest->all()
        );

        ContactMailStored::dispatch($contact);

        return  $contact;
    }
}
