<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'body'    => 'required'
        ]);

        Message::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'body'    => $request->body
        ]);

        return redirect('/')->with([
            'type' => 'success',
            'title' => 'Done!',
            'message' => 'Your inquiry was sent successfully!'
        ]);
    }
}
