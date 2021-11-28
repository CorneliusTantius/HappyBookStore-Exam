<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function IndexHome(){
        return view('Pages/home', ["context"=>"Book List", "categories"=>Category::all(), "category_id"=>-1, "books"=>Book::paginate(5)]);
    }
    public function IndexWelcome(){
        return view('Pages/welcome', []);
    }

    public function IndexCategory($category_id){
        $cat = Category::Where('category_id', $category_id)->first();
        return view('Pages/home', ["context"=>$cat->category_name." Book List", "categories"=>Category::all(), "category_id"=>$category_id, "books"=>$cat->books()->paginate(5)]);
    }
}
