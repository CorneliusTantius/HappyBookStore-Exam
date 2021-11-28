<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function IndexDetails($book_id){
        $book = Book::Where('book_id', $book_id)->first();
        $details = $book->details;
        $cat = $book->category->category_id;
        return view('Pages/details', ["context"=>"Book Detail", "categories"=>Category::all(), "category_id"=>$cat, "book"=>$book, "details"=>$details]);
    }
    public function IndexContact(){
        return view('Pages/contact', ["context"=>"Our Contact", "categories"=>Category::all(), "category_id"=>-1]);
    }
}
