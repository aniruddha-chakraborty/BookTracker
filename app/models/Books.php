<?php
namespace Books;
use Eloquent;
use DB;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Books extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'books';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');



		public function books($userId)
		{
				return $users = DB::table('books')->where('shop_id',$userId)->paginate(15);
		}

		public function bookAdmin($userId,$bookId)
		{
				$check = DB::table('books')->where('id',$bookId)->where('shop_id',$userId)->pluck('id');

					if (!empty($check)) {
						# code...
							return true;

						} else {

							return false;
					}
		}

		public function getBookInfo($userId,$bookId)
		{
				$getData = DB::table('books')->where('id',$bookId)->where('shop_id',$userId)->get();

						if (!empty($getData)) {
							# code...
								return $getData;

						} else {
								return $getData;
						}
		}

		public function updateBook($userId,$bookId,$bookName,$writerName)
		{

				if ($this->bookAdmin($userId,$bookId) == true) {
					# code...

					$update = DB::table('books')
											->where('id',$bookId)
											->where('shop_id',$userId)
											->update(['book_name' => $bookName, 'writer_name' => $writerName]);

						if ($update) {
							# code...
								return true;

							} else {

							   return false;
						}

				}


		}

		public function addBooks($bookName,$writerName,$userId)
		{
					$add = DB::table('books')->insert(
							['shop_id' => $userId,'writer_name' => $writerName , 'book_name' => $bookName]
					);

					if ($add) {
						# code...
						return true;

						} else {

						return false;
					}

		}

		public function searchEngine($string)
		{

				$search = DB::select("SELECT * FROM `books` WHERE `book_name` ");

		}


}
