<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Logiek\ReadingTime\ReadingTime;
use App\Models\SendEmail;
use Stevebauman\Hypertext\Transformer;
use DB;
use Redirect;
use \App\Models\User;

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
             $page_slung = $category->slung;
             $Posts = DB::table('blogs')->where('category',$category->id)->get();
             return view('front.default', compact('page_title','page_topic','Posts','page_slung'));
         }
    }

    public function search(Request $request){
        $Posts = DB::table('blogs')->where('title','LIKE',"%{$request->keyword}%")->get();
        foreach($Posts as $posts){
            $page_topic = $posts->type;
            $page_title = "Search for $request->keyword";
            $page_slung = $posts->slung;
            return view('front.search', compact('page_title','page_topic','Posts','page_slung'));
        }
    }

    public function topic_explore($topic, $slung){
        $Posts = DB::table('blogs')->where('slung',$slung)->get();
        foreach($Posts as $posts){
            $page_topic = $posts->type;
            $page_title = $page_topic;
            $page_slung = $posts->slung;
            return view('front.single', compact('page_title','page_topic','Posts','page_slung'));
        }
   }




   public function contents_single($slung){
        $Category = DB::table('contents')->where('slung',$slung)->limit(1)->get();
        foreach($Category as $category){
            $page_topic = $category->title;
            $page_title = $page_topic;
            $page_slung = $category->slung;
            $Posts = DB::table('blogs')->where('type',$page_topic)->get();
            return view('front.default', compact('page_title','page_topic','Posts','page_slung'));
        }
   }



   public function author($slung){
        $Author = DB::table('users')->where('username',$slung)->get();
        $page_topic = "Featured Companies";
        $page_title = "Author";
        return view('front.author', compact('page_title','page_topic','Author'));

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
        $Contents = DB::table('contents')->get();
        $page_title = "Partnering Companies";
        $page_topic = "";
        return view('front.contents_list', compact('page_title','page_topic','Contents'));
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

    public function advertise(){
        $page_title = "Partnering Companies";
        $page_topic = "Write For Us";
        return view('front.advertise', compact('page_title','page_topic'));
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

    public function thanks(){

        return view('thanks');
    }

    public function advertise_post(Request $request){
         $fname = $request->fname;
         $lname = $request->lname;
         $email = $request->email;
         $phone = $request->phone;
         $position = $request->position;
         $marketing_interest = $request->marketing_interest;
         $marketing_goals = $request->marketing_goals;

         $Sender = "info@africanpharmaceuticalreviews.com";
         $SenderId = "Africa Pharmaceutical Reviews";
         $Subject = "Advertise With Us";
         $SubscriberId  = $email;
         $SubscriberName = $fname;
         $MessageToSubscriber =
         "
            Name: $fname $lname, Email:$email,<br>
            Phone: $phone, <br>
            Position: $position,

        ";
        // Save to database

          // Send Email To Subscriber
        $SendEmail = SendEmail::sendEmail($Sender,$SenderId,$MessageToSubscriber,$SubscriberName,$SubscriberId,$Subject);
        dd($SendEmail);

    }




    public function uploadMedia(Request $request)
        {
            if ($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $path = public_path('uploads/ck');
                $fileName = $request->file('upload')->move($path, $fileName)->getFilename();

                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('uploads/ck/' . $fileName);
                $msg = 'Image uploaded successfully';
                $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

                @header('Content-type: text/html; charset=utf-8');
                echo $response;
            }
            return false;
        }

    public function hidden(Request $request){
        $name = $request->name;
        $email = $request->email;

        $User = User::where('email',$email)->get();
        if($User->isEmpty()){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            event(new Registered($user));
        }else{



        }

        $user = User::where('email','=',$email)->first();

        Auth::login($user);
        return Redirect::back();


    }

}
