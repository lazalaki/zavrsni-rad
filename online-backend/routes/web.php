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


Route::get('/api/shops', 'ShopsController@index');
Route::get('/api/users', 'UsersController@index');
Route::get('/api/managers', 'ManagersController@index');
Route::post('/api/login', 'LoginController@store');

