<?php

class DuoController extends BaseController {


 	public function sendDuoRequest()
    {
    	 $duo = new Duo;

    	 $duo->from_id = Session::get('id');
    	 $duo->to_id = Input::get('user_id');
    	 $duo->request_status = "Pending";
    	 $duo->save();

        Session::flash('message', 'Duo request sent successfully!');

        return Redirect::to('profile/' . Input::get('user_id'));
    }

    public function handleDuoRequest()
    {
    	$mk = Input::get('accept_button');
    	echo $mk;

    	//Mehmetcanın dediği kontrolleri yap
    	$duo = Duo::find(Input::get('duo_id'));
    	$duo->request_status = "Accepted";
    	$duo->save();
    	
    }

    public static function getUsernameFromDuo($duo){
    	$user = User::find($duo->from_id);

    	return $user->username;
    }
}