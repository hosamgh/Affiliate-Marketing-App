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




Route::name('auth.')->group(function () {
    /**
     * Home Routes
     */
   

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */

        Route::get('/register', 'AuthController@registerForm');
        Route::post('/register', 'AuthController@register')->name('register');
        Route::get('/invitation','AuthController@invitation')->name('invitation');


        /**
         * Login Routes
         */
        Route::get('/login', 'AuthController@loginForm');
        Route::post('/login', 'AuthController@login')->name('login');
    });

    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'AuthController@logout')->name('logout');
    });
});


Route::middleware('auth')->group(function(){
    Route::get('/', 'HomeController@index')->name('home.index');
});
