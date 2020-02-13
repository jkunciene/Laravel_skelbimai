<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => [
            'adCategory',
            'categoryManagement',
            'categoryDelete',
            'storeCategory'

        ]]);
    }

    public function adCategory(){
        return view ('skelbimai.pages.category_form');
    }

    public function categoryManagement(){
        $categories = Category::all();
        return view('skelbimai.pages.category_management', compact('categories'));
    }

    public function categoryDelete(Category $category){
        $category->delete();
        return redirect ('/category_management');
    }

    public function storeCategory(Request $request){
        $validateDate = $request->validate([
            'title' => 'required'
        ]);
//        $cat = request('title');
//        dd($cat);
        $category = Category::create([
            'name'=> request('title')
        ]);
        return redirect('/category_management');
    }


}
