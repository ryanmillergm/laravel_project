<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email'=>'required|email']);

        // Mail::raw('It works!', function ($message) {
        //     $message->to(request('email'));
        //     $message->cc('john@johndoe.com', 'John Doe');
        //     $message->bcc('john@johndoe.com', 'John Doe');
        //     $message->replyTo('DoNotReply@donotreply.com', 'DO NOT REPLY');
        //     $message->subject('Hello There');
        // });

        Mail::raw('It works!', function ($message) {
            $message->to(request('email'))
                ->subject('Hello There');
            $message->replyTo('DoNotReply@donotreply.com', 'DO NOT REPLY');
        });

        return redirect('/contact')
            ->with('message', 'Email Sent!');
    }
}
