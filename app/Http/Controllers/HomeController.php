<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
       return view('front.index');
    }

    public function contents_list(){
        return view('front.contents_list');
    }

    // podcasts method
    public function podcasts(){
        return view('front.podcasts');
    }

    public function contact(){
        return view('front.contact');
    }
}
