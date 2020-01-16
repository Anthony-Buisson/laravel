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

Route::get('/games', 'testController@games');
Route::get('/game/{game_id}', 'GamesController@getGame');
Route::get('/game/add', 'GamesController@addGame');
Route::get('/devs', 'testController@developpers');
Route::get('/{hello?}', 'testController@hello');
