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

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/analytics',  'AnalysticsController@show');
    //function () {
    //return view('analytics');
//});

//Route::get('/analytics', function () {
//    return view('analytics');
//});

Route::get('/test', function () {
    return view('test');
});

Route::get('/start', function () {
    return view('start');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/khaldi', 'AnalysticsController@show');

