<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function Contactview(){
        $categories = Categories::join('product', 'categories.id', '=', 'product.cat_id')
        ->select('categories.id', DB::raw('MAX(categories.title) as title'))
        ->groupBy('categories.id')
        ->get();
        return view('contact',compact('categories'));
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
