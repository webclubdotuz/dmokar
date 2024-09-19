<?php

namespace App\Http\Controllers;

use App\Models\Traveler;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $travelers = Traveler::orderBy('created_at', 'desc')->limit(6)->get();

        return view('frontend.index', compact('travelers'));
    }



    public function travelers()
    {

        $travelers = Traveler::orderBy('created_at', 'desc')->get();

        return view('frontend.travelers.index', compact('travelers'));
    }


}
