<?php
namespace Model;

use Eloquent;
use DB;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users_table';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	public function register($username,$first_name,$last_name,$phn_number,$email,$password,$library)
	{

		$insert = DB::table('users_table')->insert([
						'username' 			=> $username,
						'first_name'		=> $first_name,
						'last_name'	 		=> $last_name,
						'phn_number'		=> $phn_number,
						'email'					=> $email,
						'password'			=> $password,
						'library_name'  => $library
		]);

			if ( $insert === true ) {
				# code...
					return true;

				} else {

					return false;
			}

	}

	public function login()
	{

	}

	public function userId($email, $password)
	{
				$data = DB::select("SELECT `id` FROM `users_table` WHERE `email` = ? AND `password` = ?",[$email,$password]);

					if (!empty($data[0]->id)) {
						# code...
							return $data[0]->id;

						} else {

							return false;
					}
	}


}
