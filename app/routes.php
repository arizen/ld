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

Route::get('profile/{id}', function($id)
{
	$user = User::find($id);

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

    $user = User::find(1);
//
    //foreach($user->matches as $match){
    	//echo $match->id;
    //}

	MatchHistoryController::getMatchHistoryFromUser($user);
});

Route::post('signup', array('uses' => 'UserController@saveUser'));
Route::post('login', array('uses' => 'UserController@login'));
Route::post('profile/', array('uses' => 'DuoController@sendDuoRequest'));
Route::post('profile/', array('uses' => 'DuoController@handleDuoRequest'));