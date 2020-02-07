<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function adForm(){
        $categories = Category::all();
        return view ('skelbimai.pages.ad_form', compact('categories'));
    }
}
