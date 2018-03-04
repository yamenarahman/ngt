<?php

namespace App;

use App\Events\SubscriptionCreated;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [];
    protected $dispatchesEvents = [
        'created' => SubscriptionCreated::class
    ];
}
