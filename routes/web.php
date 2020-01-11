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

// Route::get('/import', 'UsersController@import');

// Route::get('/import', 'UsersController@import')->name('import');

Route::post('/import/store', 'UsersController@store')->name('store-csv');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/import-gmail-contacts', 'ImportGmailControlller@index')->name('index');

Route::get('/import', 'ImportGmailControlller@import')->name('import');
