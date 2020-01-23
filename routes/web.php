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

Route::get('/', 'HomeController@index');
Route::get('/games', 'testController@games')->name('games');
Route::get('/game/add', 'GamesController@addGame');
Route::post('/game/add', 'GamesController@addPostGame')->name('game_add_post');
Route::get('/game/{game_id}', 'GamesController@getGame')->name('game_details');
Route::get('/devs', 'testController@developpers');
//Route::get('/{hello?}', 'testController@hello');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
