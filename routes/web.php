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

Auth::routes();

<<<<<<< Updated upstream
Route::get('/home', 'HomeController@index')->name('home');
=======
/*Route::get('/uploadfoto', function () {
    return view('uploadfoto');
});*/
>>>>>>> Stashed changes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/uploadfoto', 'FormController@index');
Route::post('upload_data', 'FormController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
