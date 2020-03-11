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

Route::get('/uploadfoto', 'FormController@index');
Route::post('upload_data', 'FormController@store');
/*Route::get('/uploadfoto', function () {
    return view('uploadfoto');
});*/

Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function() {

    Route::get('/panel', function() {
        return view('layouts.dashboard');
    });
    
    Route::get('/panel/users', function() {
        return view('panel.users');
    });
});