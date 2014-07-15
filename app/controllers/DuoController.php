<?php

class DuoController extends BaseController {


 	public function sendDuoRequest()
    {
        if(!DuoController::didUserAddThisUser()){
            $duo = new Duo;

            $duo->from_id = Session::get('id');
            $duo->to_id = Session::get('user')->id;
            $duo->request_status = "Beklemede";
            $duo->save();
          return Redirect::to('profile/' . Session::get('user')->username);
        }
        else{
            return Redirect::to('profile/123' . Session::get('user')->username);
        }        
    }

    public function handleDuoRequest()
    {
        
    	if( Input::get('btn') == 'Kabul Et'){
            $duo = Duo::find(Input::get('di'));
            if( $duo->to_id == Session::get('id') && $duo->from_id == Input::get('fi') ){
                $duo->request_status = "Kabul Edildi";
                $duo->save();
            }

        }
        else if(Input::get('btn') == 'Reddet'){
            $duo = Duo::find(Input::get('di'));
            if( $duo->to_id == Session::get('id') && $duo->from_id == Input::get('fi') ){
                $duo->request_status = "Reddedildi";
                $duo->save();
            }
        }

        return Redirect::to('profile/' . Session::get('user')->username);
   	
    }

    public static function getUsernameFromDuo($duo){
    	$user = User::find($duo->from_id);

    	return $user->username;
    }

    public static function doUsersAreDuos(){
        $user1 = User::find(Session::get('id'));
        $user2 = Session::get('user');

        $rows1 = Duo::where('from_id','=',$user1->id)->where('to_id','=',$user2->id)->where('request_status','=','Kabul Edildi')->get();
        $rows2 = Duo::where('from_id','=',$user2->id)->where('to_id','=',$user1->id)->where('request_status','=','Kabul Edildi')->get();

        if(count($rows1) > 0 || count($rows2) > 0){
            return true;
        }
        return false;     
    }

    public static function didUserAddThisUser(){
        if(Session::get('id') == null){
            return false;
        }

        $user = User::find(Session::get('id'));
        $thisUser = Session::get('user');
        $duo = Duo::where('from_id','=',$user->id)->where('to_id','=',$thisUser->id)->first();
        if($duo == null){
            return false;
        }
        else{
            return $duo->request_status;
        }
    }

    public static function getDuoRequestCount(){
        $user = User::find(Session::get('id'));
        $sayi = Duo::where('to_id','=',$user->id)->where('request_status','=','Beklemede')->count();

        return $sayi;
    }
}