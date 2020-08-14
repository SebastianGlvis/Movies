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

Auth::routes();

Route::get('movies/list', 'HomeController@index');
Route::resource('/movie', 'MovieController');
Route::get('movies/destroy/{id}', ['as' => 'movie/destroy', 'uses' => 'MovieControlller@destroy']);
Route::post('movie/show', ['as' => 'movie/show', 'uses' => 'MovieController@show']);
Route::POST('movie/update',  ['as' => 'movie/update', 'uses' => 'MovieController@edit']);

