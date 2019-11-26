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
    return view('welcome');
});

Route::resource('purchases', 'PurchaseController');

Route::get('/test', function() {

    return 'ik mag hier komen...';

})->middleware(['auth','role:3']);

// php artisan make:middleware CheckRole

Route::get('mail', function() {
    // php artisan make:mail TestMail --markdown=emails/testemail
    \Mail::to('admin@blabla.nl')->send( new \App\Mail\TestMail() );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
