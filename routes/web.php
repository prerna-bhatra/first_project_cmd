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

Route::get('/', 'show_dev_to_user@index' );

Route::get('/adddev','add_developer@index')->name('addevent');

Route::post('/submit_dev_data','add_developer@store')->name('addevent');

