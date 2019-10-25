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

use App\Http\Controllers\MoviesController;



//Route::get('/', 'MoviesController@index');

Route::get('/movies', 'MoviesController@index')->name('movies.movies');
Route::get('/add', 'MoviesController@create')->name('movies.add');
Route::get('/movies/{id}', 'MoviesController@show')->name('movies.movie');
Route::get('/create', 'MoviesController@create')->name('movies.create');
Route::post('/create', 'MoviesController@store')->name('movies.create');


