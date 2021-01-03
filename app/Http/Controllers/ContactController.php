<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to('test@test.com')->send(new ContactMail($data));

        // session()->flash('message', 'Thanks for your message. We\'ll be in touch.');

        return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
