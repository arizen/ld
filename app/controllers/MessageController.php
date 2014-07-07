<?php

class MessageController extends BaseController {

	public function sendMessage(){
		$fromUser = User::find(Session::get("id"));
		$toUser = Session::get("user");

		$message = new Message;		
		$message->from_id = $fromUser->id;
		$message->to_id = $toUser->id;
		$message->subject = Input::get("subject");
		$message->content = Input::get("content");
		$message->read = false;
		$message->save();

		return Redirect::intended('profile/' . $toUser->username);
	}

	public function getUnreadMessageCount(){

		$user = User::find(Session::get('id'));
		$sayi = Message::where('to_id','=',$user->id)->where('read','=',(int)false)->count();

		return $sayi;
	}

}
