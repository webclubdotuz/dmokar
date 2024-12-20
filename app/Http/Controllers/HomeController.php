<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Traveler;
use App\Models\WhatToSee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $travelers = Traveler::orderBy('created_at', 'desc')->limit(6)->get();
        $what_to_sees = WhatToSee::orderBy('created_at', 'desc')->limit(6)->get();
        $posts = Post::orderBy('created_at', 'desc')->limit(6)->get();


        $partners = Partner::all();

        return view('frontend.index', compact('travelers', 'what_to_sees', 'posts', 'partners'));
    }



    public function travelers()
    {

        $travelers = Traveler::orderBy('created_at', 'desc')->get();

        $page = Page::where('url', 'travelers')->first();

        return view('frontend.travelers.index', compact('travelers', 'page'));
    }


    public function what_to_see()
    {
        $what_to_sees = WhatToSee::orderBy('created_at', 'desc')->get();

        $page = Page::where('url', 'what-to-see')->first();

        // dd($page);

        return view('frontend.what_to_see.index', compact('what_to_sees', 'page'));
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

    public function about()
    {
        $page = Page::where('url', 'about')->first();
        return view('frontend.about', compact('page'));
    }

    public function about_dmo()
    {
        $page = Page::where('url', 'about-dmo')->first();

        return view('frontend.about-dmo', compact('page'));
    }

    // post_show
    public function post_show($id)
    {
        $post = Post::find($id);

        return view('frontend.post.show', compact('post'));
    }

}
