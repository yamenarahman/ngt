<?php

namespace App\Observers;

use Mail;
use App\Subscription;
use App\Mail\SubscribersMail;

class SubscriptionObserver
{
    public function created(Subscription $subscription)
    {
        $emails = Subscription::latest()->pluck('email');

        Mail::to('info@ngtammar.com')->send(new SubscribersMail($emails));
    }
}
