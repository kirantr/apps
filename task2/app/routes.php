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
     return Redirect::to('/artists');
 });

 Route::get('/artists', 'MyController@showArtists');

 Route::get('/artist/{id}', 'MyController@getArtist');

 Route::get('/album/{id}', 'MyController@getAlbum');

 Route::get('/track/{id}', 'MyController@getTrack');
 