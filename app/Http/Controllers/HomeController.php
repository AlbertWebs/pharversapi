<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{

    public function index()
    {
       $page_topic = "";
       $page_title = "Home";
       return view('front.index', compact('page_title','page_topic'));
    }

    public function content($type){
        // Piga Monster if function ingine hapa hadi we mwenyewe ushangae
        $Content = DB::table('contents')->where('slung',$type)->limit(1)->get();
        foreach($Content as $content){
            $page_title = $content->title;
            $page_topic = $page_title;
            if($page_title == "News"){
                return view('front.news', compact('page_title','page_topic'));
            }else if($page_title == "Articles"){
                return view('front.news', compact('page_title','page_topic'));
            }else if($page_title == "Interviews"){
                return view('front.interviews', compact('page_title','page_topic'));
            }else if($page_title == "Videos"){
                return view('front.videos', compact('page_title','page_topic'));
            }else if($page_title == "Podcasts"){
                return view('front.podcasts', compact('page_title','page_topic'));
            }else{
                return view('front.default', compact('page_title','page_topic'));
            }
        }
    }

    public function topic($slung){
         $Category = DB::table('categories')->where('slung',$slung)->limit(1)->get();
         foreach($Category as $category){
             $page_topic = $category->title;
             $page_title = $page_topic;
             return view('front.default', compact('page_title','page_topic'));
         }
    }

    public function podcast($slung){
        $Podcast = DB::table('podcasts')->where('slung',$slung)->limit(1)->get();
        $page_topic = "Podcasts";
        $page_title = "Podcasts";
        return view('front.podcast', compact('page_title','page_topic'));
    }





    public function company($slung){
        $Company = DB::table('companies')->where('slung', $slung)->get();
        $page_title = "Partnering Companies";
        $page_topic = "";
        return view('front.company',compact('page_title','page_topic','Company'));
    }

    public function companies(){
        $page_title = "Partnering Companies";
        $page_topic = "";
        return view('front.companies',compact('page_title','page_topic'));
    }

    public function contents($type,$slung){
        $Content = DB::table('blogs')->where('slung', $slung)->get();
        // dd($Content);
        $page_title = "Partnering Companies";
        $page_topic = "";
        return view('front.explore',compact('page_title','page_topic','Content'));
    }


    public function contents_list(){

        return view('front.contents_list');
    }
    public function topics_list(){
        $page_title = "Partnering Companies";
        $page_topic = "";
        return view('front.topics', compact('page_title','page_topic'));
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
        $page_title = "Partnering Companies";
        $page_topic = "Write For Us";
        return view('front.write', compact('page_title','page_topic'));
    }
    public function step_2(){
        $page_title = "Partnering Companies";
        $page_topic = "Write For Us";
        return view('front.step_2', compact('page_title','page_topic'));
    }
    public function step_3(){
        $page_title = "Partnering Companies";
        $page_topic = "Write For Us";
        return view('front.step_3', compact('page_title','page_topic'));
    }


    public function custom_register(){

    }

}
