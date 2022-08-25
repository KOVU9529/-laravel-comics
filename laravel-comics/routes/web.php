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

Route::get('/dettagli/{id}', function ($id) {
    $comics_array=config('comics');
    $current_comics= [];
    foreach($comics_array as $comic){
        if( $comic['id'] == $id){
            $current_comics = $comic;
        }
    }

    $data=[
        'current_comics' => $current_comics,
    ];

    return view('dettagli-fumetto',$data);
})->name('dettagli_fumetto');

