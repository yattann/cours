<?php

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

// gestion des routes Auth
Auth::routes();
Route::get('/home', 'HomeController@index');

// Liste de mes animes
Route::get('/animes','AnimeController@index');
// show anime
Route::get('/animes/show/{id}','AnimeController@show')->name('voirAnime');

// création d'anime
Route::get('/animes/create','AnimeController@create')->middleware('auth');
Route::post('/animes/create','AnimeController@store')->middleware('auth');

// édition d'anime
Route::get('/animes/edit/{id}','AnimeController@edit')->name('editerAnime');
Route::post('/animes/edit/{id}','AnimeController@update');

