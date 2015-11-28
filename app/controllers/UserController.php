<?php
use Eloquent;
use DB;

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


			public function index()
			{

			}

			public function login()
			{
				return View::make('user.login');
			}

			public function register()
			{
				return View::make('user.register');
			}

			public function postRegister()
			{
					$validator = Validator::make(Input::all(),[
										'username'					=> 'required|min:4|max:50',
										'first_name'				=> 'required|min:3|max:255',
										'last_name'					=> 'required|min:3|max:255',
										'phn_number'				=> 'required|min:11|max:11',
										'email'							=> 'required|email|min:4|max:255',
										'password'					=> 'required|min:4|max:255',
										'password_again' 		=> 'required|same:password_again',
										'library_name'			=> 'required|min:3'
					]);

					if ($validator->fails()) {
						# code...
								return Redirect::route('register')->withErrors($validator)->withInput();

							} else {

							$User = new Model\User;

							$username 		= Input::get('username');
							$first_name 	= Input::get('first_name');
							$last_name   	= Input::get('last_name');
							$email 				= Input::get('email');
							$password 		= md5(Input::get('password'));
							$library 			= Input::get('library_name');
							$phn_number 	= Input::get('phn_number');

							$insert = $User->register($username,$first_name,$last_name,$phn_number,$email,$password,$library);

								if ($insert === true) {
									# code...
										return Redirect::route('index')->with('success','Your bookshop is now registered');

									} else {

										return Redirect::route('register')->with('failed','There was a problem in the process, please try again');

								}

					}

			}

		public function postLogin()
		{
				$validator = Validator::make(Input::all(),[
						'email'			=> 'required|email',
						'password'	=> 'required'
				]);

					if ($validator->fails()) {
						# code...
							return Redirect::route('login')->withErrors($validator)->withInput();
					} else {

							$User = new Model\User;

							$email = Input::get('email');
							$password  = md5(Input::get('password'));

							$userId = $User->userId($email, $password)[0]->id;

							$auth = Auth::loginUsingId($userId, $remember);

								if ($auth) {
									# code...
										return Redirect::route('index')->with('success','You are now successfully loged in');

									} else {

										return Redirect::route('login')->with('failed','There was a problem while loging in');
								}
					}

		}
}
