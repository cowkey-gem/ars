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



Route::prefix('sample')->group(function () {
    Route::get('/bar', function() {
        return 'Called bar';
    })->name('bar2');
    Route::get('/zoo', function() {
        $url = route('bar2');
        return $url;
    });
    Route::get('/foo', function() {
        return 'Hello, World';
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
