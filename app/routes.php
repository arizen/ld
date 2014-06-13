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
	return View::make('hello');
});

Route::get('signup', function()
{
    return View::make('signup'); //->with('users', $users);
});

Route::get('step1', function()
{
    return View::make('step1'); //->with('users', $users);
});
Route::get('step2', function()
{
    return View::make('step2'); //->with('users', $users);
});

Route::get('step3', function()
{
    return View::make('step3'); //->with('users', $users);
});

Route::get('logout', function()
{
    return View::make('logout'); //->with('users', $users);
});

Route::get('oduller', function()
{
    return View::make('oduller'); //->with('users', $users);
});

Route::get('login', function()
{
    return View::make('login'); //->with('users', $users);
});

Route::get('profile', function()
{
    $user = User::find(Session::get('id'));
    
    return View::make('profile')->with('user', $user);
});

Route::get('profile/{username}', function($username)
{
	$user = User::where('username', '=', $username)->first();
    
    return View::make('profile')->with('user', $user);
});

Route::get('users', function()
{
	$users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('mh', function()
{
	//$users = User::all();

    //return View::make('users')->with('users', $users);

    $user = User::find(4);
//
    //foreach($user->matches as $match){
    	//echo $match->id;
    //}

	MatchHistoryController::getMatchHistoryFromUser($user);
});

Route::post('-', array('uses' => 'UserController@saveUser'));
Route::post('login', array('uses' => 'UserController@login'));
Route::post('step1', array('uses' => 'UserController@checkStep1'));
Route::post('step2', array('uses' => 'UserController@checkStep2'));
Route::post('step3', array('uses' => 'UserController@checkStep3'));
Route::post('profile/', array('uses' => 'DuoController@sendDuoRequest'));
Route::post('profile/', array('uses' => 'DuoController@handleDuoRequest'));