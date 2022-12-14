<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/new', 'App\Http\Controllers\HomeController@new')->name('new');

Route::post('/new/store', 'App\Http\Controllers\ShippingController@store')->name('store');

Route::get('/shippings', 'App\Http\Controllers\ShippingController@index')->name('shippings');

Route::post('/shippings/edit', 'App\Http\Controllers\ShippingController@update')->name('edit');

Route::post('/shipping/delete', 'App\Http\Controllers\ShippingController@destroy')->name('delete');

Route::get('/shipping/show/{id}', 'App\Http\Controllers\ShippingController@show')->name('show');

Route::get('/my-account', 'App\Http\Controllers\HomeController@profile')->name('profile');

Route::post('/password/change', 'App\Http\Controllers\HomeController@changePassword')->name('password-change');

Route::get('/buses', 'App\Http\Controllers\BusController@index')->name('buses');

Route::post('/buses/add', 'App\Http\Controllers\BusController@store')->name('buses-add');

Route::get('/buses/delete{id}', 'App\Http\Controllers\BusController@destroy')->name('bus-delete');


Route::get('/location', 'App\Http\Controllers\LocationController@index')->name('location');

Route::post('/location/add', 'App\Http\Controllers\LocationController@store')->name('location-add');

Route::get('/location/delete/{id}', 'App\Http\Controllers\LocationController@destroy')->name('location-delete');


Route::get('/busdoc','App\Http\Controllers\BusdocController@index')->name('busdocs.index');
Route::get('/busdoc/create','App\Http\Controllers\BusdocController@create')->name('busdocs.create');
Route::post('/busdoc','App\Http\Controllers\BusdocController@store')->name('busdocs.store');
Route::delete('/busdoc/{id}', 'App\Http\Controllers\BusdocController@destroy')->name('busdocs.destroy');
Route::get('/busdoc/editer/{id}', 'App\Http\Controllers\BusdocController@edit')->name('busdocs.edit');
Route::put('/busdoc/editer/{id}', 'App\Http\Controllers\BusdocController@update')->name('busdocs.update');


Route::get('/reships', 'App\Http\Controllers\ShippingController@deleteship')->name('restoreships');
Route::get('/reships/{id}', 'App\Http\Controllers\ShippingController@restore')->name('restoreships.restore');