<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware'=>'auth:api'],function (){

	Route::get('users', 'FaceUsersController@index');
	Route::get('users/{id}', 'FaceUsersController@show');
	Route::post('users', 'FaceUsersController@store');
	Route::put('users/{id}', 'FaceUsersController@update');
	Route::delete('users/{id}', 'FaceUsersController@delete');

	Route::get('phrases/{id}', 'PhrasesController@show');
	Route::post('phrases', 'PhrasesController@store');
	Route::put('phrases/{id}', 'PhrasesController@update');
	Route::delete('phrases/{id}', 'PhrasesController@delete');

	Route::get('faceTokens/{id}', 'FaceTokensController@show');
	Route::post('faceTokens', 'FaceTokensController@store');
	Route::put('faceTokens/{id}', 'FaceTokensController@update');
	Route::delete('faceTokens/{id}', 'FaceTokensController@delete');
});
