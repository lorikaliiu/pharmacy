<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function Contactview(){

        return view('contact');
    }
    public function contact(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    Contact::create([
        'name' => $validatedData['name'],
        'lastname' => $validatedData['lastname'],
        'email' => $validatedData['email'],
        'subject' => $validatedData['subject'],
        'message' => $validatedData['message'],
    ]);

    return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
}
}
