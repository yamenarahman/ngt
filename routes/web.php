<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');
// Route::get('/', function () {
    // Mail::raw('hi you', function ($message) {
    //     $message->from('john@johndoe.com', 'John Doe');
    //     $message->sender('john@johndoe.com', 'John Doe');
    //     $message->to('john@johndoe.com', 'John Doe');
    //     $message->subject('Subject');
    // });

    // $emails = \App\Subscription::pluck('email');
    // $admin = \App\User::find(1);

    // Mail::to($admin)->send(new \App\Mail\SubscribersMail($emails));
// });

Auth::routes();

Route::redirect('/register', '/login');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/subscribe', 'SubscriptionsController@store');
Route::post('/sendmessage', 'MessagesController@store');
