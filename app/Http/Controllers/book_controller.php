<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

class book_controller extends Controller
{
	public function getBooks(){
		$books = book::all();
	    foreach ($books as $key => $value) {
	    	print($value);
	    }
	}

	public function addBook (Request $request){
		$book = new book;
		$book->title = $request->title;
		$book->description = $request->description;
		$book->save();
	}
}



