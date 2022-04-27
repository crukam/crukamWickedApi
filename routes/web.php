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
    $data = [];
    $data['version'] = '0.1.1';
    return view('/contents/home', $data);
})->name('home');

Route::get('/character', function () {
    $jsonResponse = json_decode(file_get_contents(env('APP_URL').'/api/characters', true));
    $data['characters'] = $jsonResponse->data;
    $data['links'] = $jsonResponse->meta->links;
    return view('/character/index', $data);
})->name('characters');

Route::get('/character/{character}', function () {
    return view('/character/show');
})->name('character_show');

Route::get('/character/edit', function () {
    return view('/character/edit');
})->name('character_edit');

Route::get('/location', function () {
    $jsonResponse = json_decode(file_get_contents(env('APP_URL').'/api/locations', true));
    $data['locations'] = $jsonResponse->data;
    $data['links'] = $jsonResponse->meta->links;
    return view('/location/index', $data);
})->name('locations');


Route::get('/location/{location}', function () {
    return view('/location/show');
})->name('location_show');

Route::get('/location/edit', function () {
    return view('/location/edit');
})->name('location_edit');

Route::get('/episode', function () {
    $jsonResponse = json_decode(file_get_contents(env('APP_URL').'/api/episodes', true));
    $data['episodes'] = $jsonResponse->data;
    $data['links'] = $jsonResponse->meta->links;
    return view('/episode/index', $data);
})->name('episodes');

Route::get('/episode/edit', function () {
    return view('/episode/edit');
})->name('episode_edit');

Route::get('/episode/{episode}', function () {
    return view('/episode/show');
})->name('episode_show');
