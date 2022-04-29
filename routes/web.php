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
    $jsonResponse = json_decode(file_get_contents(url('/').'/api/characters', true));
    $data['characters'] = $jsonResponse->data;
    $data['links'] = $jsonResponse->links;
    return view('/character/index', $data);
})->name('characters');

Route::get('/characters/show/{character}', function($character) {
    $jsonResponse = json_decode(file_get_contents(url('/').'/api/characters/'.$character, true));
    $data['character'] = $jsonResponse->data;
    $data['origin'] = json_decode($jsonResponse->data->origin)->name;
    $data['location'] = json_decode($jsonResponse->data->location)->name;
    return view('/character/show', $data);
})->name('characters.show');

Route::delete('/characters/{character}', [\App\Http\Controllers\CharacterController::class, 'destroy'])
  ->name('characters.destroy');

Route::delete('/locations/{location}', [\App\Http\Controllers\LocationController::class, 'destroy'])
  ->name('locations.destroy');

Route::delete('/episodes/{episode}', [\App\Http\Controllers\EpisodeController::class, 'destroy'])
  ->name('episodes.destroy');


Route::get('/location', function () {
    $jsonResponse = json_decode(file_get_contents(url('/').'/api/locations', true));
    $data['locations'] = $jsonResponse->data;
    $data['links'] = $jsonResponse->meta->links;
    return view('/location/index', $data);
})->name('locations');


Route::get('/location/{location}', function () {
    return view('/location/show');
})->name('location_show');



Route::get('/episode', function () {
    $jsonResponse = json_decode(file_get_contents(url('/').'/api/episodes', true));
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
