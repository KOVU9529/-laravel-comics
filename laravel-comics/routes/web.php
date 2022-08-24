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
})->name('home');

Route::get('/fumetti', function () {
    $comics_array=config('comics');
   
    $data = [
        'comics_array' => $comics_array,
    ];
    return view('fumetti', $data);
})->name('fumetti');
