<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('skelbimai.pages.home');
    }

    public function ads(){
        $ads = Ad::select('ads.id', 'ads.title', 'ads.description','ads.price','ads.email', 'ads.phone', 'ads.location', 'categories.name as category'  )->join('categories', 'categories.id', "=",'ads.catid' )->paginate(2);
        return view ('skelbimai.pages.ads', compact('ads'));

    }
    public function showAd(Ad $ad){

        return view('skelbimai.pages.ad', compact('ad'));
    }
    public function about(){
        return view('skelbimai.pages.about');
    }
    public function contact(){
        return view('skelbimai.pages.contact');
    }

}