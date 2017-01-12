<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main',function(){
  return view('admin.layouts.dashboard');
});
Route::get('/admin','AController@index');
//pelayan
Route::get('/pelayan','PelayanController@index');
//kasir
Route::get('/kasir','KasirController@index');
//costumer service
Route::get('/costumer-service','CsController@index');
//pantry
Route::get('/pantry','PantryController@index');
//koki
Route::get('/koki','KokiController@index');
