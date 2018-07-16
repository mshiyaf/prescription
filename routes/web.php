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

Route::get('/', 'PrescriptionsController@show');
Route::post('/appointment','DatatablesController@getData')->name('appointmentProcessing');
Route::post('/prescription','PrescriptionsController@store');
Route::get('/crawl','Gouttecontroller@crawl');
Route::post('/get_history','PrescriptionsController@get_history');
Route::post('/get_prescription_history','PrescriptionsController@get_prescription_history');
