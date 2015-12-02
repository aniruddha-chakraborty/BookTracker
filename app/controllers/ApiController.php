<?php

class ApiController extends BaseController {



      public function searchBooks($string = null,$limit = null)
      {

        if ($string == '') {
          # code...
            return '401';

          } elseif (strlen($string) < 2) {
          # code...
            return '404';

        } else {

            $Book = new \Books\Books;

            $searchEngine = $Book->searchEngine($string);

              foreach ($searchEngine as $value) {
                # code...
                  echo $value->book_name;
                  echo '<pre>';
              }


        }



      }

}
