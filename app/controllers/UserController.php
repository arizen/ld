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

		if ($validator->fails()) {
			return Redirect::to('signup')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}else {
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

            return Redirect::to('profile/' . $idk);
        // $user = User::find($id);

        // return View::make('user.profile', array('user' => $user));
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

            return Redirect::intended('profile/' . $idk);
        }else {
            Session::flash('message', 'Giriş Başarısız !');
            return Redirect::intended('signup');
        }

    }

    public function checkStep1(){

        $rules = array(
            'summoner_nameText'       => 'required',
            'serverBox' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }else
        {
            $user = User::find(Session::get('id'));

            $user->summoner_name = Input::get('summoner_nameText');
            $user->server = Input::get('serverBox');

            $user->save();

            Session::flash('message', 'Başarıyla Oluşturuldu !');

            return Redirect::intended('profile/' . $idk);
        }
    }    
}