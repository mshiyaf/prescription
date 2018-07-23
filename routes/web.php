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
Route::get('/get-medicine-names','PrescriptionsController@getMedicineName');
Route::get('/get-medicine-brands','PrescriptionsController@getMedicineBrand');
Route::get('/crawl','Gouttecontroller@getCrawl');
Route::post('/get_history','PrescriptionsController@get_history');
