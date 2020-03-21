<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.app');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/point', function () {
    return view('point');
});

Route::get('/publish', function () {
    return view('publish');
});


Route::post('/publish/submit', 'PublishController@submit')->name('contact-form');