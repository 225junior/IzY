<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Ressources')->group(function(){

    Route::resource('regions', 'RegionController');
    Route::resource('villes', 'villeController');
    Route::resource('communes', 'communeController');
    Route::resource('quartiers', 'quartierController');
});
