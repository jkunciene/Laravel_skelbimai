<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coment;
use Illuminate\Support\Facades\Auth;
use App\Ad;

class CommentController extends Controller
{
    public function adComment(Request $request, Ad $ad)
    {

        $validateDate = $request->validate([
            'comment' => 'required'
        ]);
        Coment::create([
            'comment' => request('comment'),
            'name'=> (Auth::user())? Auth::user()->name: "Anonimas",
            'ad_id' => $ad->id,
            'userid' => Auth()->id()
        ]);
        return back();
    }
}
