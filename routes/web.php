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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('chat');
})->middleware('auth')->name('home');

Route::get('/messages', function () {
    return App\Message::with('user')->get();
});

Route::post('/messages', function () {
    $user = auth()->user();

    dd(request()->get('message'));

//    $message = $user->messages()->create([
    $user->messages()->create([
        'message' => request()->get('message')
    ]);

//    event(new MessagePosted($message, $user));

    return ['status' => 'OK'];
});

Route::post('statuses', 'StatusesController@store')->name('statuses.store');

// TODO: Users table exposed!
Route::get('/users', function () {
    return App\User::all();
});