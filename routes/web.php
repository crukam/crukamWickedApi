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



// the copy or upload shebang
//$copy = copy( $fb_avatar_url, $local_avatar_url, stream_context_create( $contextOptions ) );

Route::get('/', function () {
    $data = [];
    $data['version'] = '0.1.1';
    return view('/contents/home', $data);
})->name('home');

Route::get('/character', function () {
    $jsonResponse = json_decode(file_get_contents(url('/').'/api/characters', false));
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

Route::get('/characters/page/{page}', function ($page) {
    $data['characters'] = json_decode(file_get_contents(url('/').'/api/characters?page='.$page, true))->data;
    return view('/character/currentpage', $data);
})->name('currentCharacter_page');

Route::get('/locations/page/{page}', function ($page) {
    $data['locations'] = json_decode(file_get_contents(url('/').'/api/locations?page='.$page, true))->data;
    return view('/location/currentpage', $data);
})->name('currentLocation_page');

Route::get('/episodes/page/{page}', function ($page) {
    $data['episodes'] = json_decode(file_get_contents(url('/').'/api/episodes?page='.$page, true))->data;
    return view('/episode/currentpage', $data);
})->name('currentEpisode_page');


