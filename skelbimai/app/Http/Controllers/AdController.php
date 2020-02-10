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

    public function adManagement(){
        $ads = Ad::all();
        return view ('skelbimai.pages.ad_management', compact('ads'));
    }

    public function storeAd(Request $request){
        $validateDate = $request->validate([
            'kategorijos' =>  'required',
            'pavadinimas' => 'required',
            'aprasymas' => 'required',
            'kaina'=> 'required',
            'email'=> 'required',
            'vieta'=> 'required'

            //pildomos formos name reiksme
        ]);
//        $cat = request('title');
//        dd($cat);
//        $tel = request('tel');
//        dd($tel);
        $ad = Ad::create([

            //i db stulpeli vardu name, idek title reiksme is formos
           'title'=> request('pavadinimas'),
            'description'=>request('aprasymas'),
            'price' => request('kaina'),
            'email' => request('email'),
            'phone' => request('tel'),
            'location' => request('vieta'),
            'catid' => request('kategorijos')

        ]);
        return redirect('/ads');
    }

    public function adDelete(Ad $ad)
    {
        $ad->delete();
        return redirect('/ad_management');
    }
    public function adUpdate(Ad $ad)   {

        return view('skelbimai.pages.ad_update', compact('ad'));
    }
}
