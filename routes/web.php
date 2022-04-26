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

Route::get('/character', function () {
    return view('/character/index');
});

Route::get('/character/{character}', function () {
    return view('/character/show');
});

Route::get('/location', function () {
    return view('/location/index');
});
Route::get('/location/{location}', function () {
    return view('/location/show');
});
Route::get('/episode', function () {
    return view('/episode/index');
});
Route::get('/episode/{episode}', function () {
    return view('/episode/show');
});
