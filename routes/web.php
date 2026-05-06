<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function () {
    return view('welcome');
});
 
Route::resource('bangunans', BangunanController::class);