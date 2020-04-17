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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/daily_list', 'DailyController@index')->name('list');

Route::get('/daily_form', 'DailyController@create');
Route::post('/daily_store', 'DailyController@store');

Route::get('/daily_edit/{id}', 'DailyController@edit');
Route::post('/daily_update/{id}', 'DailyController@update'); 



Route::get('/daily_delete/{id}', 'DailyController@destroy');

Route::get('/my_daily', 'DailyController@mylist');


