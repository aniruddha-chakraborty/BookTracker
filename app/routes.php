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
/*
Route::get('/user/index', function()
{
	return View::make('user.index');
});
*/
Route::get('/login/user', function(){

	return View::make('user.index');

});

Route::group(['before' => 'guest'], function(){

			Route::get('/login',['uses'=>'UserController@login' , 'as' => 'login']);
			Route::get('/register',['uses' => 'UserController@register','as' => 'register']);
			Route::post('/postRegister',['uses' => 'UserController@postRegister' , 'as' => 'postRegister']);
			Route::post('/postLogin',['uses' => 'UserController@postLogin' , 'as' => 'postLogin']);

});

Route::group(['before' => 'auth'] , function(){

			Route::get('/',['uses' => 'UserController@index','as'=>'index']);

});
