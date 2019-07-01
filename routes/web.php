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

Route::get('/', function(){
  return view('gamp');
});
Route::get('/Mapa/{id}', 'GeoController@mostrarIndex');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/Menu', 'MenuController');
Route::resource('/Boton', 'BotonController');
Route::resource('/Detalle', 'DetalleController');
Route::resource('/Geo', 'GeoController');
Route::get('Geolocalizar/{id}', 'GeoController@ver');
Route::post('Geolocalizar', 'GeoController@guardar')->name('geolocalizar');

Route::get('Mapa/{id}', 'GeoController@verMapa');
