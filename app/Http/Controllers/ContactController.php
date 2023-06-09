<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ContactMail;
use App\Mail\FormMail;


class ContactController extends Controller
{
    public function Contactview(){
        $categories = Categories::join('product', 'categories.id', '=', 'product.cat_id')
        ->select('categories.id', DB::raw('MAX(categories.title) as title'))
        ->groupBy('categories.id')
        ->get();
        $coronaNews = DB::table('news')->where('category', 'Corona Pandemie')->get();
        return view('contact',compact('categories','coronaNews'));
    }
    public function contact(Request $req)
    {
    $validatedData = $req->validate([
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

    Mail::to($req->email)->send(new ContactMail($req->name, $req->lastname,));
    Mail::to(env('MAIL_FROM_ADDRESS'))->send(new FormMail($req->name, $req->lastname, $req->email, $req->subject, $req->message));

    
    return redirect()->back()->with('success', 'Danke für deine Nachricht. Wir werden uns bald mit Ihnen in Verbindung setzen!');
}
}
