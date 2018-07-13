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
Route::get('/crawl','GoutteController@getCrawl');
Route::post('/prescription','PrescriptionsController@store');
<<<<<<< HEAD
Route::get('/crawl','Gouttecontroller@crawl');
=======
Route::get('/get-medicine-names','PrescriptionsController@getMedicineName');
>>>>>>> origin/shiyaf
