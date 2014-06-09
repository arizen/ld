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
			'leagueBox' => 'required',
            'summonerText' => 'required',
            'serverBox' => 'required',
            'divisionBox' => 'required'

		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('signup')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}else {
            $user = new User;

            $user->username = Input::get('usernameText');
            $user->email = Input::get('emailText');
			$user->password = Hash::make(Input::get('passwordText'));
            $user->summoner_name = Input::get('summonerText');
            $user->server = Input::get('serverBox');
            $user->league = Input::get('leagueBox');
            $user->division = Input::get('divisionBox');
            $user->save();

            Session::flash('message', 'Successfully created!');
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
            Session::flash('message', 'login successful!');
            $users = User::where('username', '=', $username)->get();
            $idk = 12365;
            foreach ($users as $user)
            {
                Session::put('id', $user->id);
                $idk = $user->id;
            }

            return Redirect::intended('profile/' . $idk);
        }else {
            Session::flash('message', 'login failed!');
            return Redirect::intended('signup');
        }

    }

}