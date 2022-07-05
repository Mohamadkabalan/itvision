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
    return view('home.index');
});


Route::get('/about', function () {
    return view('about.index');
});

Route::get('/services', 'App\Http\Controllers\ServicesController@index')
    ->name('services.index');
Route::get('/services/fetch_data', 'App\Http\Controllers\ServicesController@fetch_data')
    ->name('services.fetch-data');
Route::get('/service-details/{id}', 'App\Http\Controllers\ServicesController@serviceDetails')
    ->name('services.service-details');

Route::get('/works', function () {
  return view('works.index');
});

Route::get('/career', function () {
  return view('career.index');
});

Route::get('/contact-us', function () {
    return view('contact-us.index');
});

Route::post('/career/create', 'App\Http\Controllers\CareerController@store')
  ->name('career.store');

Route::post('/contact/create', 'App\Http\Controllers\ContactController@store')
    ->name('contact.store');

Route::get('/clear-cache', function() {
    $output = [];
    \Artisan::call('cache:clear', $output);
    dd($output);
});
Route::get('/clear-route', function() {
    $output = [];
    \Artisan::call('route:clear', $output);
    dd($output);
});
Route::get('/clear-config', function() {
    $output = [];
    \Artisan::call('config:clear', $output);
    dd($output);
});
Route::get('/storage-link', function() {
    $output = [];
    \Artisan::call('storage:link', $output);
    dd($output);
});

Route::get('/migrate', function() {
    $output = [];
    \Artisan::call('migrate', $output);
    dd($output);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
