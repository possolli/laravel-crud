<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return response()->json($contact);
    }

    public function store(StoreContactRequest $request)
    {
        $data = $request->validated();
        Contact::create($data);
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $data = $request->validated();
        $contact->update($data);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
    }
}
