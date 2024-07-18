<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;
use Session;
use \App\Models\Blog;
use \App\Models\Video;
use \App\Models\Podcast;
use Datetime;
use Hash;
use Redirect;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index(){
       return view('dashboard.index');
    }

    public function blog(){
        activity()->log('User id '.Auth::User()->id.' Accessed Blog Page');
        $Blog = DB::table('blogs')->where('company_id', Auth::User()->company_id)->get();
        return view('dashboard.blog', compact('Blog'));
    }

    public function addBlog(){
        activity()->log('User id {{Auth::User()->id}} Accessed Add Blog Page');
        $Category = DB::table('categories')->get();
        return view('dashboard.addBlog', compact('Category'));
    }

    public function editBlog($id){
        activity()->log('User id {{Auth::User()->id}} Accessed Add Blog Page');
        $Category = DB::table('categories')->get();
        $Blog = Blog::find($id);
        $title = "Edit Blog";
        return view('dashboard.editBlog', compact('Blog','Category'));
    }

    public function edit_Blog(Request $request, $id){
        activity()->log('Evoked an Edit Blog Operation For Blog ID number '.$id.' ');
        $path = 'uploads/blogs';
        if(isset($request->image_one)){
            $dir = 'uploads/blogs';
            $file = $request->file('image_one');
            $realPath = $request->file('image_one')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_one_cheat;
        }

        if(isset($request->whitepaper_file)){
            $dir = 'uploads/whitepapers';
            $file = $request->file('whitepaper_file');
            $realPath = $request->file('whitepaper_file')->getRealPath();
            $whitepaper_file = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $whitepaper_file = $request->whitepaper_file_cheat;
        }

        $updateDetails = array(
            'title' => $request->title,
            'type' => $request->type,
            'whitepaper_link' => $request->whitepaper_link,
            'whitepaper_file' => $whitepaper_file,
            'slung' => Str::slug($request->title),
            'content' => $request->ckeditor,
            'author' => $request->author,
            'category' => $request->category,
            'tags' => $request->tags,
            'image_one' =>$SaveFilePath,
            'active' => 0,
        );
        DB::table('blogs')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved, Your Post will appear puclic as soon as the Admin approves");
        return Redirect::back();
    }



    public function add_Blog(Request $request){
        activity()->log('Evoked an add Blog Operation');
        $title = $request->title;
        $description = $request->content;
        $category = $request->cat;
        $path = 'uploads/blogs';
        if(isset($request->image_one)){
            $dir = 'uploads/blogs';
            $file = $request->file('image_one');
            $realPath = $request->file('image_one')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->pro_img_cheat;
        }


        if(isset($request->whitepaper_file)){
            $dir = 'uploads/whitepapers';
            $file = $request->file('whitepaper_file');
            $realPath = $request->file('whitepaper_file')->getRealPath();
            $whitepaper_file = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $whitepaper_file = $request->pro_img_cheat;
        }

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->company_id = Auth::User()->company_id;
        $blog->type = $request->type;
        $blog->meta = $request->meta;
        $blog->video_url = $request->video_url;
        $blog->podcast_url = $request->podcast_url;
        $blog->slung = Str::slug($request->title);
        $blog->content = $request->ckeditor;
        $blog->author = Auth::User()->id;
        $blog->category = $request->category;
        $blog->tags = $request->tags;
        $blog->whitepaper_file = $whitepaper_file;
        $blog->image_one = $SaveFilePath;
        $blog->save();
        Session::flash('message', "Post Saved Successfully");
        return Redirect::back();
        $Blog->save();
        Session::flash('message', "Blog Has Been Added");
        return Redirect::back();
    }



    public function addPodcast(){
        activity()->log('Accessed Add Podcast Page');
        $Category = DB::table('categories')->orderBy('id','DESC')->get();
        $page_title = 'formfiletext';//For Layout Inheritance
        $page_name = 'add Podcast';
        return view('dashboard.addPodcast',compact('page_title','page_name','Category'));
    }

    public function add_Podcast(Request $request){
        activity()->log('Evoked an add Podcast Operation');
        $title = $request->title;
        $description = $request->content;
        $category = $request->cat;

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $dir = 'uploads/podcasts';
        $file = $request->file('image');
        $realPath = $request->file('image')->getRealPath();
        $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);

        $Podcast = new Podcast;
        $Podcast->title = $request->title;
        $Podcast->meta = $request->meta;
        $Podcast->company_id = Auth::User()->company_id;
        $Podcast->slung = Str::slug($request->title);
        $Podcast->content = $request->ckeditor;
        $Podcast->author = $request->author;
        $Podcast->category = $request->category;
        $Podcast->file = $request->file;
        $Podcast->image = $SaveFilePath;
        $Podcast->save();
        Session::flash('message', "Podcast Has Been Added");
        return Redirect::back();
    }

    public function podcasts (){
        activity()->log('Accessed the all podcasts page ');
        $Podcast = Podcast::where('company_id',Auth::User()->company_id)->get();
        $page_title = 'list';
        $page_name = 'Podcast';
        return view('dashboard.podcasts ',compact('page_title','Podcast','page_name'));
    }

    public function editPodcast($id){
        activity()->log('Accessed Edit Podcast For Podcast ID number '.$id.' ');
        $Category = DB::table('categories')->orderBy('id','DESC')->get();
        $Podcast = Podcast::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Edit Podcast';
        return view('dashboard.editPodcast',compact('page_title','Podcast','page_name','Category'));
    }


    public function edit_Podcast(Request $request, $id){
        activity()->log('Evoked an Edit Podcast Operation For Podcast ID number '.$id.' ');

        if(isset($request->image)){
            $dir = 'uploads/podcasts';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $updateDetails = array(
            'title' => $request->title,
            'meta' => $request->meta,
            'slung' => Str::slug($request->title),
            'content' => $request->ckeditor,
            'author' => $request->author,
            'category' => $request->category,
            'file' => $request->file,
            'image' =>$SaveFilePath,
        );
        DB::table('podcasts')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function delete_Podcast($id){
        activity()->log('Deleted Podcast With ID number '.$id.' ');
        DB::table('podcasts')->where('id',$id)->delete();
        Session::flash('message', "Post Deleted Successfully");
        return Redirect::back();
    }


    public function addVideo(){
        activity()->log('Accessed Add Video Page');
        $Category = DB::table('categories')->orderBy('id','DESC')->get();
        $page_title = 'formfiletext';//For Layout Inheritance
        $page_name = 'add Video';
        return view('dashboard.addVideo',compact('page_title','page_name','Category'));
    }

    public function add_Video(Request $request){
        activity()->log('Evoked an add Video Operation');
        $title = $request->title;
        $description = $request->content;
        $category = $request->cat;

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $dir = 'uploads/Videos';
        $file = $request->file('image');
        $realPath = $request->file('image')->getRealPath();
        $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);

        $Video = new Video;
        $Video->title = $request->title;
        $Video->meta = $request->meta;
        $Video->company_id = $request->company_id;
        $Video->slung = Str::slug($request->title);
        $Video->content = $request->ckeditor;
        $Video->author = $request->author;
        $Video->category = $request->category;
        $Video->file = $request->file;
        $Video->image = $SaveFilePath;
        $Video->save();
        Session::flash('message', "Video Has Been Added");
        return Redirect::back();
    }

    public function Videos (){
        activity()->log('Accessed the all Videos page ');
        $Video = Video::where('company_id',Auth::User()->company_id)->get();
        $page_title = 'list';
        $page_name = 'Video';
        return view('dashboard.videos ',compact('page_title','Video','page_name'));
    }

    public function editVideo($id){
        activity()->log('Accessed Edit Video For Video ID number '.$id.' ');
        $Category = DB::table('categories')->orderBy('id','DESC')->get();
        $Video = Video::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Edit Video';
        return view('dashboard.editVideo',compact('page_title','Video','page_name','Category'));
    }


    public function edit_Video(Request $request, $id){
        activity()->log('Evoked an Edit Video Operation For Video ID number '.$id.' ');

        if(isset($request->image)){
            $dir = 'uploads/Videos';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }
        $updateDetails = array(
            'title' => $request->title,
            'meta' => $request->meta,
            'slung' => Str::slug($request->title),
            'content' => $request->ckeditor,
            'author' => $request->author,
            'category' => $request->category,
            'file' => $request->file,
            'image' =>$SaveFilePath,
        );
        DB::table('videos')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function delete_Video($id){
        activity()->log('Deleted Video With ID number '.$id.' ');
        DB::table('videos')->where('id',$id)->delete();
        Session::flash('message', "Post Deleted Successfully");
        return Redirect::back();
    }

    public function SocialMediaSettings(){
        activity()->log('User Accessed Social Media Settings Page');
        $SiteSettings = DB::table('_site_settings')->get();
        return view('dashboard.SocialMediaSettings',compact('SiteSettings'));
    }


    public function SiteSettings(){
        activity()->log('User Accessed Site Settings Page');
        $SiteSettings = DB::table('companies')->where('id', Auth::User()->company_id)->get();
        return view('dashboard.site_settings',compact('SiteSettings'));
    }

    public function updateSiteSettingsAjax(Request $request){
        activity()->log('Evoked an update Settings Request');



        $updateDetails = array (
            'title' => $request->website,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'tagline'=>$request->tagline,
            'website'=>$request->website,
            'address'=>$request->address,
            'content'=>$request->ckeditor,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'linkedin'=>$request->linkedin,
            'twitter'=>$request->twitter
        );

        DB::table('companies')->where('id',Auth::User()->company_id)->update($updateDetails);
        Session::flash('message', "Changes have Been Saved");
        return response()->json(['success'=>'Changes Saved Successfully!']);
    }

    public function logo_and_favicon(){
        activity()->log('User Accessed Logo & Favicon Settings Page');
        $SiteSettings = DB::table('companies')->where('id', Auth::User()->company_id)->get();
        return view('dashboard.logo_and_favicon',compact('SiteSettings'));
    }


    public function logo_and_favicon_update(Request $request){
        activity()->log('User Made an update on the logo and the favicons page');
        $path = 'uploads/companies';
        if(isset($request->logo)){
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $logo = $filename;
        }else{
            $logo = $request->logo_cheat;
        }

        if(isset($request->favicon)){
            $file = $request->file('favicon');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $favicon = $filename;
        }else{
            $favicon = $request->favicon_cheat;
        }
        if(isset($request->banner)){
            $file = $request->file('banner');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->favicon_cheat;
        }

        $updateDetails = array (
            'image'=>$image,
            'logo'=>$logo,
            'favicon'=>$favicon,
        );

        DB::table('companies')->where('id', Auth::User()->company_id)->update($updateDetails);
        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }


    // public function genericFIleUpload($file,$dir,$realPath){
    //     $filename = $file->getClientOriginalName();
    //     $store = $file->storeAs(path: ''.$dir.'/'.$filename, options: 's3');
    //     Storage::disk('s3')->put(''.$dir.'/'.$filename, file_get_contents($realPath));
    //     // $url = Storage::disk('s3')->temporaryUrl('podcasts/'.$filename,now()->addMinutes(10));
    //     $SaveFilePath = "https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/$dir/$filename";
    //     return $SaveFilePath;
    // }

     // S3
     public function genericFIleUpload($file,$dir,$realPath){
        $image_name = $file->getClientOriginalName();
        $file->move(public_path($dir),$image_name);
        $url = url('/');
        $image_path = "$url/$dir/" . $image_name;
        return $image_path;
    }
}
