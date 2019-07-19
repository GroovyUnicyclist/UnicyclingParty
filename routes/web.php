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

// Route::domain('osu.unicycle.party')->group( function() {
//     Route::get('/', 'HomeController@osu')->name('osu');

//     // Route::redirect('/home','home');

//     Route::get('/checkout', 'CheckoutController@index')->name('checkout');
// });

// Auth::routes();

// Route::domain('unicycle.party')->group( function() {
//     Route::get('/', 'HomeController@index')->name('home');

//     Route::get('/guide', 'GuideController@index')->name('guide');
// });


// 65.27.243.42
Route::prefix('osu')->group( function() {
    Route::get('/', 'HomeController@osu')->name('osu');

    // Route::redirect('/home','home');

    Route::get('/checkout', 'CheckoutController@index')->name('checkout');
});

Auth::routes();

Route::domain('65.27.243.42')->group( function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/guide', 'GuideController@index')->name('guide');

    Route::get('tricks', 'TrickController@index')->name('trick');

    Route::get('/create','PageController@create')->name('create');

});

