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
    public function topics_list(){
        return view('front.topics');
    }


    // podcasts method
    public function podcasts(){
        return view('front.podcasts');
    }

    public function contact(){
        return view('front.contact');
    }

    public function videos(){
        return view('front.videos');
    }

    public function write(){
        return view('front.write');
    }
    public function step_2(){
        return view('front.step_2');
    }



}
