<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function adCategory(){
        return view ('skelbimai.pages.category_form');
    }
}
