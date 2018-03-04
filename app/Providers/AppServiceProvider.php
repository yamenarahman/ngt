<?php

namespace App\Providers;

use App\Message;
use App\Subscription;
use App\Observers\MessageObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\SubscriptionObserver;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Subscription::observe(SubscriptionObserver::class);
        Message::observe(MessageObserver::class);
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
