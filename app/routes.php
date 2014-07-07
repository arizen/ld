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
    $users = User::orderBy('ld_points','desc')->get()->take(10);
    return View::make('index')->with('users',$users);
});

Route::get('signup', function()
{
    return View::make('signup'); //->with('users', $users);
});
Route::get('lig', function()
{
    $user = User::find(1);

    $summoner = Summoner::where('user_id','=',$user->id)->first();

    $stat = Stat::where('summoner_id', '=', $summoner->id)->first();

    Session::put('user',$user);
    Session::put('summoner',$summoner);
    Session::put('stat',$stat);

    return View::make('lig');
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
    $users = User::orderBy('ld_points','desc')->get()->take(100);

    return View::make('oduller')->with('users',$users); //->with('users', $users);
});

Route::get('profile/{username}/comments', function($username)
{
    $user = User::where('username', '=', $username)->first();

    $summoner = Summoner::where('user_id','=',$user->id)->first();

    $stat = Stat::where('summoner_id', '=', $summoner->id)->first();

    Session::put('user',$user);
    Session::put('summoner',$summoner);
    Session::put('stat',$stat);

    return View::make('comments');
});
Route::get('profile/{username}/sendMessage', function($username)
{
    $user = User::where('username', '=', $username)->first();

    $summoner = Summoner::where('user_id','=',$user->id)->first();

    $stat = Stat::where('summoner_id', '=', $summoner->id)->first();

    Session::put('user',$user);
    Session::put('summoner',$summoner);
    Session::put('stat',$stat);

    return View::make('sendmessage');
});


Route::get('profile/{username}/messages', function($username)
{
    $user = User::where('username', '=', $username)->first();

    $summoner = Summoner::where('user_id','=',$user->id)->first();

    $stat = Stat::where('summoner_id', '=', $summoner->id)->first();

    Session::put('user',$user);
    Session::put('summoner',$summoner);
    Session::put('stat',$stat);

    return View::make('messages');
});

Route::get('profile/{username}/myduos', function($username)
{
    $user = User::where('username', '=', $username)->first();

    $summoner = Summoner::where('user_id','=',$user->id)->first();

    $stat = Stat::where('summoner_id', '=', $summoner->id)->first();

    Session::put('user',$user);
    Session::put('summoner',$summoner);
    Session::put('stat',$stat);

    $duoModelArray = array();
    foreach($user->duos as $duo){
        if($duo->request_status == "Kabul Edildi"){
            //kabul edilme durumunda sadece kabul eden taraf görüyor gibi bir durum var onu çöz
            $duoRequest = new DuoRequestModel;
            $duoRequest->id = $duo->id;
            $duoRequest->fromUser = User::find($duo->from_id);
            $duoRequest->fromSummoner = Summoner::where('user_id','=',$duoRequest->fromUser->id)->first();
            $duoRequest->fromStat = $duoRequest->fromSummoner->stats->first();
            array_push($duoModelArray, $duoRequest);
        }
    }
    Session::put('duoModelArray',$duoModelArray);

    return View::make('myduos');
});


Route::get('profile/{username}/duos', function($username)
{
    $user = User::find(Session::get('id'));
    $summoner = Summoner::where('user_id','=',$user->id)->first();

    $stat = Stat::where('summoner_id', '=', $summoner->id)->first();

    Session::put('user',$user);
    Session::put('summoner',$summoner);
    Session::put('stat',$stat);

    $duoModelArray = array();
    foreach($user->duos as $duo){
        if($duo->request_status == "Beklemede"){
            $duoRequest = new DuoRequestModel;
            $duoRequest->id = $duo->id;
            $duoRequest->fromUser = User::find($duo->from_id);
            $duoRequest->fromSummoner = Summoner::where('user_id','=',$duoRequest->fromUser->id)->first();
            array_push($duoModelArray, $duoRequest);
        }
    }
    
    Session::put('duoModelArray',$duoModelArray);
    return View::make('duos');
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

    $summoner = Summoner::where('user_id','=',$user->id)->first();

    $stat = Stat::where('summoner_id', '=', $summoner->id)->first();

    Session::put('user',$user);
    Session::put('summoner',$summoner);
    Session::put('stat',$stat);

    return View::make('profile');
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
    $summoner =  $user->summoners()->get()->first();
    LolSkillController::getInformationFromSummoner($summoner);
//
    //foreach($user->matches as $match){
    	//echo $match->id;
    //}
});

Route::get('k', function()
{
    //Session::put("id",1);
    $user = User::find(1);

    LolSkillController::givePointsToUser($user);

    //LolSkillController::getInformationFromSummoner($summoner);
   // Session::put("user",$user);
    //echo DuoController::getDuoCount();

//    foreach ($summoner->matches as $match) {
//        foreach(ViewHelperController::stringToOneByOneArray($match->your_team,";") as $player){
//            echo $player;
//        }
//    }
   

});

Route::post('-', array('uses' => 'UserController@saveUser'));
Route::post('login', array('uses' => 'UserController@login'));
Route::post('step1', array('uses' => 'UserController@checkStep1'));
Route::post('step2', array('uses' => 'UserController@checkStep2'));
Route::post('step3', array('uses' => 'UserController@checkStep3'));
Route::post('profiasdfle/', array('uses' => 'DuoController@sendDuoRequest'));
Route::post('profile/', array('uses' => 'DuoController@handleDuoRequest'));
Route::post('profile/', array('uses' => 'MessageController@sendMessage'));
