<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');

// Routes for vehicles
Route::get('/atvs', 'HomeController@showAtvs');
Route::get('/dirtbikes','HomeController@showDirtbikes');
Route::get('/karts', 'HomeController@showKarts');
Route::get('/utility', 'HomeController@showUtility');

//Routes for other info 
Route::get('/about', 'HomeController@showAbout');
Route::get('/contact', 'HomeController@showContact');
Route::get('/policies', 'HomeController@showPolicy');
