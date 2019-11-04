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
})->name('welcome');
Route::get('/show/{id}', 'UserController@showAction');
Route::get('/showusers', 'UserController@showAllAction')->name('users');
Route::post('/insert', 'UserController@insertAction');
Route::get('/delete/{id}', 'UserController@deleteAction');
Route::post('/updateuser/{id}', 'UserController@updateUserAction');
Route::get('/adduser', 'UserController@addUserForm')->name('adduser');

