<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function adForm(){
        return view ('skelbimai.pages.ad_form');
    }
}
