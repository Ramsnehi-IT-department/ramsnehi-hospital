<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    public function getContact()
    {
        // Pass positions to the Blade view
        return view('frontends.contact');
    }

    public function submitContact(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'query' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'message' => ['required'],
        ]);
    
    // Create the user with validated data
    Contact::create($validated);
    return redirect()->route('frontends.contact')->with('success', 'Your Message submitted successfully');
    }
}
