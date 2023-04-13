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

    return redirect()->back()->with('success', 'Danke für deine Nachricht. Wir werden uns bald mit Ihnen in Verbindung setzen!');
}
}
