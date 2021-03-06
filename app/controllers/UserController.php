<?php

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function saveUser()
    {

        $rules = array(
            'usernameText'       => 'required',
            'emailText'      => 'required|email',
            'passwordText'       => 'required',
            'passwordText2'       => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if( Input::get('passwordText') != Input::get('passwordText2') ){
            echo "fail";
        }
        elseif ($validator->fails()) {
            return Redirect::to('d')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
                }
        else {

            $user = new User;

            $user->username = Input::get('usernameText');
            $user->email = Input::get('emailText');
            $user->password = Hash::make(Input::get('passwordText'));
            $user->save();

            Session::flash('message', 'Başarıyla Oluşturuldu !');
            $users = User::where('username', 'LIKE', '%'.$user->username.'%')->get();
            $idk = 12365;

            foreach ($users as $user)
            {
                Session::put('id', $user->id);
                $idk = $user->id;
            }
            return Redirect::intended('step1');
        
        }
    }

    public function login(){

        $rules = array(
            'usernameText'       => 'required',
            'passwordText' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        $username = Input::get('usernameText');
        $password = Input::get('passwordText');

        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }else if (Auth::attempt(array('username' => $username, 'password' => $password)))
        {
            Session::flash('message', 'Başarıyla Giriş Yaptınız !');

            $users = User::where('username', '=', $username)->get();
            $idk = 12365;
            foreach ($users as $user)
            {
                Session::put('id', $user->id);
                $idk = $user->id;
            }

            return Redirect::intended('profile/' . $username);
        }else {
            Session::flash('message', 'Giriş Başarısız !');
            return Redirect::intended('login');
        }

    }

    public function checkStep1(){

        $rules = array(
            'summoner_nameText'       => 'required',
            'serverBox' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('step1')
                ->withErrors($validator);
        }else
        {
            $summoner = new Summoner;
            
            $summoner->user_id = Session::get('id');
            $summoner->summoner_name = Input::get('summoner_nameText');
            $summoner->server = Input::get('serverBox');
            $summoner->summoner_confirmed = 0;
            
            $summoner->save();
            
            Session::flash('message', 'Başarıyla Oluşturuldu !');
            
            return Redirect::intended('step2');
        }
    } 

    public function checkStep2(){

        $rules = array(
            'avatar_id'       => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('step2')
                ->withErrors($validator);
        }else
        {
            $inputVal = Input::get('avatar_id');

            $user = User::find(Session::get('id'));

            $user->avatar_id = substr($inputVal, -1);
            $user->save();

            return Redirect::intended('step3');

        }
    }   

    public function checkStep3(){

            $skype = Input::get('skype');

            $user = User::find(Session::get('id'));

            $user->skype_info = $skype;
            $user->save();

            $summoner = Summoner::where('user_id','=',$user->id)->first();

            LolSkillController::getInformationFromSummoner($summoner);

            return Redirect::intended('profile/' . $user->username);
    }  

    public static function isHisProfile(){
        if(Session::get('id') == null){
            return false;
        }

        $loggedUser = User::find(Session::get('id'));
        $profileUser = Session::get('user');

        if($loggedUser->id == $profileUser->id){
            return true;
        }
        return false;
    } 
}