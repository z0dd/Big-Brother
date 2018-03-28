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

	Route::get('users', 'UsersController@index');
	Route::get('users/{id}', 'UsersController@show');
	Route::post('users', 'UsersController@store');
	Route::put('users/{id}', 'UsersController@update');
	Route::delete('users/{id}', 'UsersController@delete');
	
	/*Route::get('users', function ()	{
		return User::all();
	});
	Route::get('users/{user_id}', function ($user_id){
		return User::find($user_id);
	});
	Route::post('users', function(Request $request) {
	    return User::create($request->all);
	});
	Route::put('users/{user_id}', function(Request $request, $user_id) {
	    $user = User::findOrFail($user_id);
	    $user->update($request->all());

	    return $article;
	});
	Route::delete('user/{user_id}', function($user_id) {
	    Article::find($user_id)->delete();

	    return 204;
	});*/
});
/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
