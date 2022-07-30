<?php

use Illuminate\Support\Facades\Route;

Route::namespace('AdminControllers')->group(function(){
    Route::name('auth.')->middleware('guest:admin')->group(function () {
        Route::get('/login', 'AuthController@loginForm');
        Route::post('/login', 'AuthController@login')->name('login');
    });

    Route::name('auth.')->middleware('auth:admin')->group(function () {
        Route::get('/logout', 'AuthController@logout')->name("logout");
  
    });

    Route::middleware('auth:admin')->group(function(){
Route::get('/','HomeController@index')->name('home');
    });
});

