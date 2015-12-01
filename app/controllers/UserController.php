<?php

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
					$book = new \Books\Books;
					$userId = Auth::user()->id;
					$allBooks = $book->books($userId);
					$count = 1;

					return View::make('user.index',['books' => $allBooks,'count'=>$count]);
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

							$User = new \Model\User;

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

							$User = new \Model\User;

							$email = Input::get('email');
							$password  = md5(Input::get('password'));

							$userId = $User->userId($email, $password);

								if ($userId === false) {
									# code...
										return Redirect::route('login');
								}

							$auth = Auth::loginUsingId($userId, 0);

								if ($auth) {
									# code...
										return Redirect::route('index')->with('success','You are now successfully loged in');

									} else {

										return Redirect::route('login')->with('failed','There was a problem while loging in');
								}
					}

		}

		public function logOut()
		{

					Auth::logout();
					return Redirect::route('login');
		}

		public function editBooks($bookId)
		{
				$userId = Auth::user()->id;
				$Book = new \Books\Books();
				$checkBookisAdmin = $Book->bookAdmin($userId,$bookId);

			if ($checkBookisAdmin == true) {
				# code...
					$getBookInfo = $Book->getBookInfo($userId,$bookId);

					$bookName = $getBookInfo[0]->book_name;
					$writerName = $getBookInfo[0]->writer_name;

					return View::make('user.editbooks',['bookName' => $bookName , 'writerName' => $writerName,'bookId' => $bookId]);

				} else {

					return Redirect::route('index');
			}

		}

		public function postEditBooks()
		{
				$validator = Validator::make(Input::all(),[
								'book_name'  => 'required',
								'writter_name' => 'required'
				]);

					// Take book ID from
					$bookId = Input::get('_book_id');

					if ($validator->fails()) {
						# code...
							return Redirect::route('edit-books',['bookId' => $bookId])->withErrors($validator)->withInput();
					}


		}



}
