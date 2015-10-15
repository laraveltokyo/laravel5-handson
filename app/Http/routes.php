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

Route::get('/', function () {
	Log::debug('URL "/" にアクセスされました。');

    return view('welcome');
});

//@@ Step 08, 09 @@//
Route::get('text', function() {
	return 'こんにちは！';
});

//@@ Step 10 @@//
Route::get('array', function() {
	return [
		'now' => 'Laravel 5.1 体験中!',
		'date' => new DateTime(),
	];
});

//@@ Step 12 @@//
Route::get('status', 'AppController@status');

//@@ Step 13 @@//
Route::get('app', 'AppController@getApp');
