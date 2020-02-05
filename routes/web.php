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

use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('queues', 'QueueController');
// Route::get('queues',['as' => 'queues.create2', 'uses' => 'QueueController@create2']);
Route::get('queues/{id}', 'QueueController@show');




Auth::routes([
    'register' => false
]);


Route::get('/admin', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::resource('departments', 'DepartmentController',['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

});

Route::resource('counters','CounterController');






Route::get('send-mail', function () {

    $details = [
        'title' => 'Hi student!',
        'body' => 'Thank you for using DQRS. Here is your Queue number. Please wait for your turn.'
    ];

    \Mail::to('outrich.gherrera@gmail.com')->send(new \App\Mail\MyTestMail($details));



    return view('emails.sent');
});




