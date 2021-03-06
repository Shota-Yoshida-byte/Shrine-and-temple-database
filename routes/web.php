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
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth');
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
});

Route::get('profile/create','Admin\ProfileController@add');
Route::get('profile/edit','Admin\ProfileController@edit');

Route::get('/sample','SampleController@index');

Route::get('/users/create', 'UserController@create');

Route::get('/abc','SampleController@abc');

Route::get('/xyz','SampleController@xyz');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teke', 'NewsController@index');