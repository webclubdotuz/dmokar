<?php

namespace App\Http\Controllers;

use App\Models\Traveler;
use App\Models\WhatToSee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $travelers = Traveler::orderBy('created_at', 'desc')->limit(6)->get();
        $what_to_sees = WhatToSee::orderBy('created_at', 'desc')->limit(6)->get();

        return view('frontend.index', compact('travelers', 'what_to_sees'));
    }



    public function travelers()
    {

        $travelers = Traveler::orderBy('created_at', 'desc')->get();

        return view('frontend.travelers.index', compact('travelers'));
    }


    public function what_to_see()
    {
        $what_to_sees = WhatToSee::orderBy('created_at', 'desc')->get();

        return view('frontend.what_to_see.index', compact('what_to_sees'));
    }


    public function what_to_see_show($id)
    {
        $what_to_see = WhatToSee::find($id);

        return view('frontend.what_to_see.show', compact('what_to_see'));
    }

    // switchLanguage

    public function switchLanguage($locale)
    {
        session(['language' => $locale]);
        return redirect()->back();
    }


}
