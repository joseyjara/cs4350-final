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


//Let's use a resource controller.
Route::resource('/', 'HomeController');

//Routing Dealer related stuff
Route::get("dealer/{id}", array('uses' =>'DealerController@view'));
Route::resource('dealer','DealerController' );

/**
Route::get('/', function()
{
	return View::make('hello');
});
**/

// route to show the login form
Route::get('login', array('uses' => 'LoginController@index'));

// route to process the form
Route::post('dologin', array('uses' => 'LoginController@login'));

// route to logout
Route::get('logout', array('uses' => 'LoginController@doLogout'));

// route to get register user view
Route::get('users', array('uses' => 'LoginController@getRegister'));

// route to register user
Route::post('users/create', array('uses' => 'LoginController@create'));


