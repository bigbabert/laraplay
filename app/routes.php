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

// Session Routes
Route::get('login',  array('as' => 'login', 'uses' => 'SessionController@create'));
Route::get('logout', array('as' => 'logout', 'uses' => 'SessionController@destroy'));
Route::resource('sessions', 'SessionController', array('only' => array('create', 'store', 'destroy')));

// User Routes
Route::get('register', 'UserController@create');
Route::get('/backend/dashboard/users/{id}/activate/{code}', 'UserController@activate')->where('id', '[0-9]+');
Route::get('/backend/dashboard/resend', array('as' => 'resendActivationForm', function()
{
	return View::make('users.resend');
}));
Route::post('resend', 'UserController@resend');
Route::get('forgot', array('as' => 'forgotPasswordForm', function()
{
	return View::make('users.forgot');
}));
Route::post('/backend/dashboard/forgot', 'UserController@forgot');
Route::post('/backend/dashboard/users/{id}/change', 'UserController@change');
Route::get('/backend/dashboard/users/{id}/reset/{code}', 'UserController@reset')->where('id', '[0-9]+');
Route::get('/backend/dashboard/users/{id}/suspend', array('as' => 'suspendUserForm', function($id)
{
	return View::make('users.suspend')->with('id', $id);
}));

Route::post('/backend/dashboard/users/{id}/suspend', 'UserController@suspend')->where('id', '[0-9]+');
Route::get('/backend/dashboard/users/{id}/unsuspend', 'UserController@unsuspend')->where('id', '[0-9]+');
Route::get('/backend/dashboard/users/{id}/ban', 'UserController@ban')->where('id', '[0-9]+');
Route::get('/backend/dashboard/users/{id}/unban', 'UserController@unban')->where('id', '[0-9]+');
Route::resource('/backend/dashboard/users', 'UserController');

// Group Routes
Route::resource('/backend/dashboard/groups', 'GroupController');
// Pubblic-Routes
Route::get('/', array('as' => 'home', function()
{
	$frontends = Frontends::orderBy('id', 'DESC')->first();
		return View::make('frontend.index')->with('frontends', $frontends);
}));

Route::get('/get-started', array( function()
{
 $frontends = Frontends::orderBy('id', 'DESC')->first();
		return View::make('frontend.google.google-start',array('frontends'=>$frontends));
}));
# Admin Routes
Route::group(['before' => 'auth|admin'], function()
{
  Route::get('/backend/dashboard', ['as' => 'backend', 'uses' => 'DashboardController@showDashboard']);
  Route::resource('/backend/dashboard/frontend-settings', 'FrontendsController', ['only' => ['index', 'create','store','show', 'update', 'destroy']]);
  Route::get('/backend/dashboard/screen-lock', 'DashboardController@showLock');
  Route::resource('/backend/dashboard/barcode-generator', 'BarcodesController', ['only' => ['index', 'create','store','show', 'edit', 'update', 'destroy']]);
});
