<?php

class CommentController extends BaseController {

	public function writeComment()
    {
    	$user1 = User::find(Session::get('id'));
    	$user2 = Session::get('user');

    	if(CommentController::userCanWriteComment()){
    		$comment = new Comment;
    		$comment->from_id = $user1->id;
    		$comment->to_id = $user2->id;
    		$comment->content = Input::get('yorum');
    		$comment->save();
    	}

    }

    public static function userCanWriteComment(){
    	$user1 = User::find(Session::get('id'));
    	$user2 = Session::get('user');

    	if( DuoController::doUsersAreDuos() && !CommentController::userWroteComment()){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

    public static function userWroteComment(){
    	$user1 = User::find(Session::get('id'));
    	$user2 = Session::get('user');

    	$rows = $user2->comments()->where('from_id','=',$user1->id)->get();

    	if(count($rows) > 0 ){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

}
