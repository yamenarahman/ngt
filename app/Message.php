<?php

namespace App;

use App\Events\MessageCreated;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    protected $dispatchesEvents = [
        'created' => MessageCreated::class
    ];
}
