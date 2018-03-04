<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions'
        ]);

        Subscription::create(['email' => $request->email]);

        return redirect('/')->with([
            'type' => 'success',
            'title' => 'Done!',
            'message' => 'You have subscribed to our newsletter successfully!'
        ]);
    }
}
