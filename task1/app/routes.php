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

 Route::get('/', function()
 {
     return Redirect::to('/home');
 });

 Route::get('/home', function()
 {
     return View::make('home');
 });

Route::get('/articles', 'MyHomeController@articles');
Route::get('/article/{num?}', 'MyHomeController@article');
Route::get('/about', 'MyHomeController@about');

