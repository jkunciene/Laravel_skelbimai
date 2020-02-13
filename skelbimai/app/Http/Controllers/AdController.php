<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;
use File;

class AdController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
            'vieta'=> 'required',
            'nuotraukos' => 'mimes:jpeg, jpg, png, gift|required|max:10000'

            //pildomos formos name reiksme
        ]);

        $path = $request->file("nuotraukos")->store("public/images");
        $filename = str_replace("public/", "", $path);

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
            'catid' => request('kategorijos'),
            'img'=>$filename

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
    public function adUpdate2(Ad $ad, Request $request){
        $validateDate = $request->validate([
            'kategorijos' =>  'required',
            'pavadinimas' => 'required',
            'aprasymas' => 'required',
            'kaina'=> 'required',
            'email'=> 'required',
            'vieta'=> 'required',
            'nuotraukos' => 'mimes:jpeg, jpg, png, gift|required|max:10000'

            //pildomos formos name reiksme
        ]);

            Ad::where ('id', request('id'))->
            update(['title'=> request('pavadinimas'),
                'description'=>request('aprasymas'),
                'price' => request('kaina'),
                'email' => request('email'),
                'phone' => request('tel'),
                'location' => request('vieta'),
                'catid' => request('kategorijos'),
              ]);
            if($request->hasFile('nuotraukos')){
                File::delete(storage_path('/app/public/'.$ad->img));
                $path = $request->file("nuotraukos")->store("public/images");
                $filename = str_replace("public/", "", $path);
                Ad::where('id', $ad->id)->update([
                    'img' =>$filename
                ]);
            }

            return redirect('/ad_management');
    }
}
