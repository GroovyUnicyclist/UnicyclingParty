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
Route::domain('osu.'.env('APP_URL'))->group( function() {
    Route::get('/', 'HomeController@osu')->name('osu');

    Route::view('/join', 'osu.sif')->name('join');

    Route::view('/Put/my/meme/in/Rob', 'osu.meme');
});

Route::domain('discord.'.env('APP_URL'))->group( function() {
    Route::get('/', 'HomeController@discord')->name('discord');

    Route::redirect('/invite', 'https://discord.gg/3HtAKnskdA')->name('invite');
});

Auth::routes(['register' => false]);

Route::domain(env('APP_URL'))->group( function() {
    // Route::get('/', 'HomeController@osu')->name('osu');

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/guide', 'GuideController@index')->name('guide');

    Route::view('/faq', 'main.faq')->name('faq');

    Route::get('/unischool', 'GuideController@unischool')->name('unischool');

    Route::get('/feedback', 'FeedbackController@index')->name('feedback');

    Route::post('/feedback', 'FeedbackController@store')->name('submit-feedback');

    Route::post('/heart', 'FeedbackController@love')->middleware('throttle:1,5')->name('send-heart');

    Route::get('/my-captcha', 'FeedbackController@myCaptcha')->name('myCaptcha');

    Route::post('/my-captcha', 'FeedbackController@myCaptchaPost')->name('myCaptcha.post');

    Route::get('/refresh_captcha', 'FeedbackController@refreshCaptcha')->name('refresh_captcha');

    Route::view('/rad', 'main.guide.rad')->name('rad');

    // Route::get('tricks', 'TrickController@index')->name('trick');

    // Route::get('/create','PageController@create')->name('create');

    // Route::post('/trick','TrickController@store')->name('createTrick');
});

