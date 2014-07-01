<?php

class DuoController extends BaseController {


 	public function sendDuoRequest()
    {
        //user'a daha önce duo atmamış olmalı
        
         $duo = new Duo;

    	 $duo->from_id = Session::get('id');
    	 $duo->to_id = Session::get('user')->id;
    	 $duo->request_status = "Beklemede";
    	 $duo->save();

        return Redirect::to('profile/' . Session::get('user')->username);
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
}