<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function showContactForm()
    {
        return view('html.contact');
    }

    public function storeContact(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // データベースやメール送信などの処理をここに書く
        $contact = new Contact([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ]);
        $contact->save();

        // メール送信
        Mail::to('yuto87774@gmail.com')->send(new ContactMail($contact));


        return view('html.contactComplete');
    }
}
