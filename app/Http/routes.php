<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts/master');
});

Route::get('/', function()
{
    return View::make('content');
});

Route::get('/Innovation', function () {
    return view('layouts/Innovation');
});

Route::get('/ContactUs', function () {
    return view('layouts/ContactUs');
});

Route::get('/Newsroom', function () {
    return view('layouts/Newsroom');
});
