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
    return view('home');
});

Route::get('contact', function () {
    return view('contact');
});

Route::view('about', 'about');

// Route::get('customers', function() {
//     $customers = [
//         'sait', 'esra'
//     ];

//     return view('internals.customers', [
//         'customers' => $customers
//     ]);
// });

Route::get('customers', 'App\Http\Controllers\CustomersController@index');
Route::get('customers/create', 'App\Http\Controllers\CustomersController@create');
Route::post('customers', 'App\Http\Controllers\CustomersController@store');
