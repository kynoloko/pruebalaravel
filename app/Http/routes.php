<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');

Route::resource('photo', 'PhotoController');


Route::get('nombre/{nombre}',function($nombre){
	return 'mi nombre es '.$nombre;
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('pepe', function () {
    return 'dos este es pepe';
});

*/
Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');


Route::resource('usuario','UsuarioController');
