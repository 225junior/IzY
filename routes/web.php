<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){

	Route::get('/', function () {
		return view('auth.login');
	});

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::middleware('auth')->group(function(){

	Route::namespace('Prestations')->group(function(){
		Route::resource('prestataires', 'PrestataireController');
	});

	Route::namespace('Ressources')->group(function(){

		Route::resource('regions', 'RegionController');
		Route::resource('villes', 'VilleController');
		Route::resource('communes', 'CommuneController');
		Route::resource('quartiers', 'QuartierController');
	});
});