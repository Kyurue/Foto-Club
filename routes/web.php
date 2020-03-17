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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'FormController@index');

Route::get('/uploadfoto', 'FormController@formUpload');
Route::post('upload_data', 'FormController@store');
/*Route::get('/uploadfoto', function () {
    return view('uploadfoto');
});*/
Route::get('updatePage', 'UserController@profile2');
Route::post('updateUser', 'UserController@update_avatar');

Route::get('profile', 'userController@profile');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'FormController@index');

Route::get('/photo', function() {
    return view('photo');
});

Route::group(['middleware' => ['auth', 'admin']], function() {

    Route::get('/panel', function() {
        return view('layouts.dashboard');
    });

    Route::get('/panel/users/{id}', 'userController@deleteUser');
    Route::get('/panel/users','userController@getUsers');

    Route::get('/panel/foto/{id}', 'userController@deleteFoto');
    Route::get('/panel/fotos','userController@getFoto');
});