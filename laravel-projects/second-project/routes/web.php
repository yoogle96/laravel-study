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
    return view('welcome');
});

Route::get('/test', function () {
    $collection = collect([1, 'apple', ', ', 'banana', null, 3])
        -> map(function ($name) {
            return strtoupper($name);
        })
        -> reject(function ($name) {
            return is_numeric($name);
        })
        -> reject(function ($name) {
            return empty($name);
        });

    dump($collection);
});

Route::resource('orders', 'OrderController');
Route::get('orm/getall', 'OrmController@getAll');
