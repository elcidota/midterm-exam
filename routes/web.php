<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/EspeletaDon', 'App\Http\Controllers\TableController@index');
