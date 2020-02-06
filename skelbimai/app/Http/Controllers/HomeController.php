<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('skelbimai.pages.home');
    }

    public function ads(){
        return view('skelbimai.pages.ads');
    }
    public function showAd(){
        return view('skelbimai.pages.ad');
    }
    public function about(){
        return view('skelbimai.pages.about');
    }
    public function contact(){
        return view('skelbimai.pages.contact');
    }
}