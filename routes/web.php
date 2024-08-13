<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pets', 'App\Http\Controllers\PetsController@index')->name('index');
Route::get('/pets/create', 'App\Http\Controllers\PetsController@create');
Route::POST('/pets', 'App\Http\Controllers\PetsController@store');
