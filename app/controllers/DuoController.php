<?php

class DuoController extends BaseController {


 	public function sendDuoRequest()
    {
        //return Redirect::to('profile/' . "yck32");
    	 $duo = new Duo;

    	 $duo->from_id = Session::get('id');
    	 $duo->to_id = Session::get('user')->id;
    	 $duo->request_status = "Pending";
    	 $duo->save();

        return Redirect::to('profile/' . Session::get('user')->username);
    }

    public function handleDuoRequest()
    {
    	$mk = Input::get('accept_button');
    	echo $mk;

    	//Butonlara id ver, veritabanından kontrol et ona gore
    	//$duo = Duo::find(Input::get('duo_id'));
    	//$duo->request_status = "Accepted";
    	//$duo->save();
    	
    }

    public static function getUsernameFromDuo($duo){
    	$user = User::find($duo->from_id);

    	return $user->username;
    }
}