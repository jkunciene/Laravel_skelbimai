<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;

use Gate;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adForm()
    {
        $categories = Category::all();
        return view('skelbimai.pages.ad_form', compact('categories'));
    }

    public function adManagement()
    {
        $ads = Ad::all();
        return view('skelbimai.pages.ad_management', compact('ads'));
    }

    public function storeAd(Request $request)
    {
        $validateDate = $request->validate([
            'kategorijos' => 'required',
            'pavadinimas' => 'required',
            'aprasymas' => 'required',
            'kaina' => 'required',
            'email' => 'required',
            'vieta' => 'required',
            'nuotraukos' => 'mimes:jpeg, jpg, png, gift|required|max:10000'

            //pildomos formos name reiksme
        ]);

        $path = $request->file("nuotraukos")->store("public/images");
        $filename = str_replace("public/", "", $path);

//        $cat = request('title');
//        dd($cat);
//        $tel = request('tel');
//        dd($tel);
        //dd(Auth::id());
        $ad = Ad::create([

            //i db stulpeli vardu name, idek title reiksme is formos
            'title' => request('pavadinimas'),
            'description' => request('aprasymas'),
            'price' => request('kaina'),
            'email' => request('email'),
            'phone' => request('tel'),
            'location' => request('vieta'),
            'catid' => request('kategorijos'),
            'img' => $filename,
            'userid' => Auth::id()

        ]);
        return redirect('/ads');
    }

    public function adDelete(Ad $ad)
    {
        if (Gate::allows('update-post', $ad)) {
            $ad->delete();
            return redirect('/ad_management');
        }
        return redirect('/errors');

    }
    public function errors()
    {
        return view('skelbimai.pages.errors');
    }

    public function adUpdate(Ad $ad)
    {
        if (Gate::allows('update-post', $ad)) {
            return view('skelbimai.pages.ad_update', compact('ad'));
        }
        return redirect('/errors');
    }

    public function adUpdate2(Ad $ad, Request $request)
    {
        $validateDate = $request->validate([
            'kategorijos' => 'required',
            'pavadinimas' => 'required',
            'aprasymas' => 'required',
            'kaina' => 'required',
            'email' => 'required',
            'vieta' => 'required',
            'nuotraukos' => 'mimes:jpeg, jpg, png, gift|max:10000'

            //pildomos formos name reiksme
        ]);

        Ad::where('id', request('id'))->
        update(['title' => request('pavadinimas'),
            'description' => request('aprasymas'),
            'price' => request('kaina'),
            'email' => request('email'),
            'phone' => request('tel'),
            'location' => request('vieta'),
            'catid' => request('kategorijos'),
        ]);
        if ($request->hasFile('nuotraukos')) {
            File::delete(storage_path('/app/public/' . $ad->img));
            $path = $request->file("nuotraukos")->store("public/images");
            $filename = str_replace("public/", "", $path);
            Ad::where('id', $ad->id)->update([
                'img' => $filename
            ]);
        }

        return redirect('/ad_management');
    }
}
