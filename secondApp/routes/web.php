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

Route::get('login/nav' , 'LoginController@nav');
Route::get('login/form' , 'ValidationController@loginCreate');
Route::post('validate/doform','ValidationController@store');
Route::get('forgot/form' , 'ValidationController@forgotCreate');
Route::post('validate/forgot','ValidationController@store');

