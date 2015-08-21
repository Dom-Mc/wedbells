<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', ['as' => 'home', 'uses' => 'RsvpController@home']);
Route::post('/', ['as' => 'store', 'uses' => 'RsvpController@store']);

Route::get('contact', ['as' => 'index_contact', 'uses' => 'ContactController@index']);
Route::post('contact', ['as' => 'store_contact', 'uses' => 'ContactController@store']);

Route::get('guestbook', ['as' => 'index_guestbook', 'uses' => 'guestbookController@index']);
Route::post('guestbook', ['as' => 'store_guestbook', 'uses' => 'guestbookController@store']);

Route::get('thankyou', ['as' => 'thankyou', 'uses' => 'RsvpController@thankyou']);
Route::get('getaroom', ['as' => 'hotel', 'uses' => 'RsvpController@hotel']);