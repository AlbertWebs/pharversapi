<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(isset($request->image)){
            $dir = 'uploads/companies';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = "0";
        }
        // slungify

        $userID = Auth::User()->id;
        Company::create([
            'title' => $request->company,
            'slung' => Str::slug($request->company),
            'website' => $request->website,
            'email' => $request->email,
            'user_id' => $userID,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'content' => $request->content,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'image' => $SaveFilePath,
        ]);
        $Last =  DB::table('companies')->latest('id')->first();

        $updateDetails = array(
            'company_id' => $Last->id
        );
        $Update = DB::table('users')->where('id',$userID)->update($updateDetails);

        return response(["success" => true])->header('Content-Type', 'application/json');
    }

    // public function genericFIleUpload($file,$dir,$realPath){
    //     $filename = $file->getClientOriginalName();
    //     $store = $file->storeAs(path: ''.$dir.'/'.$filename, options: 's3');
    //     Storage::disk('s3')->put(''.$dir.'/'.$filename, file_get_contents($realPath));
    //     // $url = Storage::disk('s3')->temporaryUrl('podcasts/'.$filename,now()->addMinutes(10));
    //     $SaveFilePath = "https://africanpharmaceuticalreviewbucket.s3.eu-central-1.amazonaws.com/$dir/$filename";
    //     return $SaveFilePath;
    // }

    public function genericFIleUpload($file,$dir,$realPath){
        $image_name = $file->getClientOriginalName();
        $file->move(public_path($dir),$image_name);
        $url = url('/');
        $image_path = "$url/$dir/" . $image_name;
        return $image_path;
    }


    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
