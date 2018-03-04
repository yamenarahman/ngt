<?php

namespace App\Observers;

use Mail;
use App\Message;
use App\Mail\InquiryMail;

class MessageObserver
{
    public function created(Message $message)
    {
        Mail::to('info@ngtammar.com')->send(new InquiryMail($message));
    }
}
