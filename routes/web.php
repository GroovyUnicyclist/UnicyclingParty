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
Route::domain('osu.unicycling.party')->group( function() {
    Route::get('/', 'HomeController@osu')->name('osu');

    Route::get('/checkout', 'CheckoutController@index')->name('checkout');
    
    Route::view('/join', 'osu.sif')->name('join');
});

Route::prefix('osu')->group( function() {
    Route::get('/', 'HomeController@osu')->name('osu');

    Route::get('/checkout', 'CheckoutController@index')->name('checkout');
    
    Route::view('/join', 'osu.sif')->name('join');
});

Auth::routes();

Route::domain('unicycling.party')->group( function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/guide', 'GuideController@index')->name('guide');

    Route::get('tricks', 'TrickController@index')->name('trick');

    Route::get('/create','PageController@create')->name('create');

    Route::post('/trick','TrickController@store')->name('createTrick');
});

