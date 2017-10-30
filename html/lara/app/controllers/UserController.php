<?php

class UserController extends \BaseController {


	public function __construct()
			{
					$this->beforeFilter('auth', ['only' => 'logout']);
					if (Auth::check()) {
						$this->beforeFilter('guest', ['except' => ['logout']]);
					}
					$this->beforeFilter('csrf', ['only' => ['signup_up','login_log']]);

			}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function login()
	{
		//
			return View::make('auth.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	 public function signup()
 	{
 		//
		return View::make('auth.signup');
 	}

	public function login_log()
	{
		//

		if (Auth::attempt([
					'email' => Input::get('email'),
					'password' => Input::get('password')
			])) {
			Session::flash('success','You are Logged In sucessfully.');
			return Redirect::route('blog.index');
		}
		else {
			Session::flash('fail','Something went wrong, Please try Again');
			return Redirect::route('login');
		}

	}

	public function signup_up()
	{
		//
		$validator = Validator::make(Input::all(),[
			'username' => 'required|alpha_dash|max:255',
			'name' => 'required|max:255|alpha|',
			'email' => 'required|email',
			'password' => 'required|max:255',
			'password_confirm' => 'required|max:255|same:password',
		]);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}else
		{
		// return Input::all();
		// Store into database
		$d_signup= new User;
		$d_signup->name = Input::get('name');
		$d_signup->username = Input::get('username');
		$d_signup->email = Input::get('email');
		$d_signup->password = Hash::make(Input::get('password'));

		$d_signup->save();
		Session::flash('success','User Created Sucessfully');
		return Redirect::route('blog.index');
	}
}

public function logout()
{
	Auth::logout();
	Session::flash('logout','Logged out Sucessfully.');
	return Redirect::route('blog.index');
}

}
