<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Newsletter\Facades\Newsletter;
use Redirect;
use DB;
use \App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function profile(){
        return view('user.profile');
    }

    public function password(){
        return view('user.password');
    }

    public function options(){
        return view('user.options');
    }

    public function whitepapers(){
        $whitepapers = DB::table('blogs')->where('type','Whitepapers/Application Notes')->get();

        return view('user.whitepapers', compact('whitepapers'));
    }



    public function update(Request $request){
        if(isset($request->website)){
            // this is a spam
        }else{
            $organization = $request->organization;
            $areas_of_interest = $request->areas_of_interest;
        }
        // dd($request->all());
        $updateUserDetails = array(
            'organization' => $organization,
            'areas_of_interest' => $areas_of_interest,
            'country_code' => $request->country_code,
            'address' => $request->address,
            'phone' => $request->phone,
            'country' => $request->country,
            'state' => $request->state,
            'Job_function' => $request->Job_function,
            'other_Job_function' => $request->other_Job_function,
            'other_areas_of_interest' => $request->other_areas_of_interest,
            'subscription_options' => $request->subscription_options,
            'terms' => $request->terms,
            'subscription_status' => 'active',
        );
        // dd($updateUserDetails);
        DB::table('users')->where('id',Auth::User()->id)->update($updateUserDetails);
        $Sender = "info@africanpharmaceuticalreviews.com";
        $SenderId = "Africa Pharmaceutical Reviews";
        $MessageToSubscriber = "";
        $MessageToCompany = "";
        $SubscriberName = Auth::User()->name;
        $SubscriberId = Auth::User()->email;
        $Subject = "Your Subscription:Success";
        // Send Email To Subscriber
        // SendEmail::sendEmail($Sender,$SenderId,$MessageToSubscriber,$SubscriberName,$SubscriberId,$Subject);
        $Subject = "New Subscriber:Success";
        // Send Email To Pharverse
        // SendEmail::sendEmails($Sender,$SenderId,$MessageToCompany,$SubscriberName,$SubscriberId,$Subject);
        return view('thanks');
    }

    public function areas_updates(){
        // phpinfo();
        // die();
        $Users = User::where('organization','Maseno University')->get();
        foreach ($Users as $Use) {
            $User = $Use->id;
            $areas_of_interest = prepareArray(User::find($User)->areas_of_interest);
            //News Letters
            $Key = "Microbiology";
            if(in_array($Key, $areas_of_interest))
            {
                $UpdateDetails = array(
                    'Microbiology'=>"Yes",
                );

                $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }
        }
    }

    public function areas_update(){
        $Users = User::all();
        foreach ($Users as $Use) {
            $User = $Use->id;
            $areas_of_interest = prepareArray(User::find($User)->areas_of_interest);
            //News Letters
            $Key = "Microbiology";
            if(in_array($Key, $areas_of_interest))
            {
            $UpdateDetails = array(
                'Microbiology'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
        }


            //Analytical Techniques
            $Key = "Analytical Techniques";
            if(in_array($Key, $areas_of_interest))
            {
            $UpdateDetails = array(
                'Analytical_Techniques'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }

            //Drug Delivery
            $Key = "Drug Delivery";
            if(in_array($Key, $areas_of_interest))
            {
            $UpdateDetails = array(
                'Drug_Delivery'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }


            //Formulation Development
            $Key = "Formulation Development";
            if(in_array($Key, $areas_of_interest))
            {
            $UpdateDetails = array(
                'Formulation_Development'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }


            //Drug Delivery
            $Key = "Bioprocessing";
            if(in_array($Key, $areas_of_interest))
            {
            $UpdateDetails = array(
                'Bioprocessing'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }


            //Manufacturing
            $Key = "Manufacturing";
            if(in_array($Key, $areas_of_interest))
            {
            $UpdateDetails = array(
                'Manufacturing'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }

             //Quality Assurance /Quality Control,
             $Key = "Quality Assurance /Quality Control,";
             if(in_array($Key, $areas_of_interest))
             {
             $UpdateDetails = array(
                 'QA_QC'=>"Yes",
             );
             $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
             }

             //Biopharma
             $Key = "Biopharma";
             if(in_array($Key, $areas_of_interest))
             {
             $UpdateDetails = array(
                 'Biopharma'=>"Yes",
             );
             $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
             }



             //Regulatory Affairs,
             $Key = "Health Supply Chain Management";
             if(in_array($Key, $areas_of_interest))
             {
             $UpdateDetails = array(
                 'Health_Supply_Chain_Management'=>"Yes",
             );
             $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
             }

              //Regulatory Affairs,
              $Key = "Regulatory Affairs";
              if(in_array($Key, $areas_of_interest))
              {
              $UpdateDetails = array(
                  'Regulatory_Affairs'=>"Yes",
              );
              $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
              }

             $Key = "Artificial Intelligence";
             if(in_array($Key, $areas_of_interest))
             {
             $UpdateDetails = array(
                 'Artificial_Intelligence'=>"Yes",
             );
             $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
             }
        }
        echo "Areas Updated Successfully";
    }


    public function options_update(){
        $Users = User::all();
        foreach ($Users as $Use) {
            $User = $Use->id;

            $areas_of_interest = prepareArray(User::find($User)->areas_of_interest);
            $subscription_options = prepareArray(User::find($User)->subscription_options);

            //News Letters
            $Key = "Newsletter";
            if(in_array($Key, $subscription_options))
            {
            $UpdateDetails = array(
                'Newsletter'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }
            //News Letters
            $Key = "Analytical Techniques";
            if(in_array($Key, $subscription_options))
            {
            $UpdateDetails = array(
                'Newsletter'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }

            // Third_party
            $Key = "Drug Delivery";
            if(in_array($Key, $subscription_options))
            {
            $UpdateDetails = array(
                'Third_party'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }

            //Digital Version
            $Key = "Digital version of the African Pharmaceutical Review";
            if(in_array($Key, $subscription_options))
            {
            $UpdateDetails = array(
                'Digital_version'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }

            //Digital Version
            $Key = "Digital version of the African Pharmaceutical Review";
            if(in_array($Key, $subscription_options))
            {
            $UpdateDetails = array(
                'Digital_version'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }

            $Key = "Webinar notifications";
            if(in_array($Key, $subscription_options))
            {
            $UpdateDetails = array(
                'Webinar_notifications'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }

            $Key = "Printed Version of Magazine";
            if(in_array($Key, $subscription_options))
            {
            $UpdateDetails = array(
                'Printed_Version_of_Magazine'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }

            $Key = "Event notifications";
            if(in_array($Key, $subscription_options))
            {
            $UpdateDetails = array(
                'Event_notifications'=>"Yes",
            );
            $UpdateUser = DB::table('users')->where('id', $User)->update($UpdateDetails);
            }
        }


        echo "Options Updated Successfully";
    }

    public function update_profile(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        $name = $fname." ".$lname;

        // Image
        if(isset($request->image)){
            $dir = 'uploads/profiles';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = null;
        }


        $updateUserDetails = array(
            'fname' => $request->fname,
            'lname' => $request->lname,
            'name' => $fname." ".$lname,
            'city' => $request->city,
            'content' => $request->content,
            'phone' => $request->phone,
            'country' => $request->country,
            'state' => $request->state,
            'Job_function' => $request->Job_function,
            'title' => $request->title,
            'organization' => $request->organization,
            'areas_of_interest' => $request->areas_of_interest,
            'country_code' => $request->country_code,
            'address' => $request->address,
            'image' => $SaveFilePath,
        );
        DB::table('users')->where('id', Auth::User()->id)->update($updateUserDetails);
        return view('user.profile');
    }

    public function update_options(Request $request){
        // dd($request->all());
        if( $request->has('Microbiology') ){
            $Microbiology = "Yes";
        }else{
            $Microbiology = null;
        }
        if( $request->has('Drug_Delivery') ){
            $Drug_Delivery = "Yes";
        }else
        {
            $Drug_Delivery = null;
        }
        if( $request->has('Formulation_Development') )
        {
            $Formulation_Development = "Yes";
        }else{
            $Formulation_Development = null;
        }
        if( $request->has('Bioprocessing') ){
            $Bioprocessing = "Yes";
        }else{
            $Bioprocessing = null;
        }
        // do the rest
        if( $request->has('Analytical_Techniques') ){
            $Analytical_Techniques = "Yes";
        }else{
            $Analytical_Techniques = null;
        }
        if( $request->has('Manufacturing') ){
            $Manufacturing = "Yes";
        }else{
            $Manufacturing = null;
        }
        if( $request->has('QA/QC') ){
            $QA_QC = "Yes";
        }else{
            $QA_QC = null;
        }
        if( $request->has('Biopharma') ){
            $Biopharma = "Yes";
        }else{
            $Biopharma = null;
        }
        if( $request->has('Packaging_and_Labelling') ){
            $Packaging_and_Labelling = "Yes";
        }else{
            $Packaging_and_Labelling = null;
        }
        if( $request->has('Regulatory_Affairs') ){
            $Regulatory_Affairs = "Yes";
        }else{
            $Regulatory_Affairs = null;
        }

        if( $request->has('Health_Supply_Chain_Management') ){
            $Health_Supply_Chain_Management = "Yes";
        }else{
            $Health_Supply_Chain_Management = null;
        }

        if( $request->has('Artificial_Intelligence') ){
            $Artificial_Intelligence = "Yes";
        }else{
            $Artificial_Intelligence = null;
        }
        if( $request->has('Digital_version') ){
            $Digital_version = "Yes";
        }else{
            $Digital_version = null;
        }
        if( $request->has('Newsletter') ){
            $Newsletter = "Yes";
        }else{
            $Newsletter = null;
        }
        if( $request->has('Third_party') ){
            $Third_party = "Yes";
        }else{
            $Third_party = null;
        }
        if( $request->has('Webinar_notifications') ){
            $Webinar_notifications = "Yes";
        }else{
            $Webinar_notifications = null;
        }
        if( $request->has('Printed_Version_of_Magazine') ){
            $Printed_Version_of_Magazine = "Yes";
        }else{
            $Printed_Version_of_Magazine = null;
        }
        if( $request->has('Event_notifications') ){
            $Event_notifications = "Yes";
        }else{
            $Event_notifications = null;
        }

        $updateUserDetails = array(
            'Microbiology' => $Microbiology,
            'Drug_Delivery' => $Drug_Delivery,
            'Formulation_Development' => $Formulation_Development,
            'Bioprocessing' => $Bioprocessing,
            'Analytical_Techniques' => $Analytical_Techniques,
            'Manufacturing' => $Manufacturing,
            'QA_QC' => $QA_QC,
            'Biopharma' => $Biopharma,
            'Packaging_and_Labelling' => $Packaging_and_Labelling,
            'Regulatory_Affairs' => $Regulatory_Affairs,
            'Health_Supply_Chain_Management' => $Health_Supply_Chain_Management,
            'Artificial_Intelligence' => $Artificial_Intelligence,
            'Digital_version' => $Digital_version,
            'Newsletter' => $Newsletter,
            'Third_party' => $Third_party,
            'Webinar_notifications' => $Webinar_notifications,
            'Printed_Version_of_Magazine' => $Printed_Version_of_Magazine,
            'Event_notifications' => $Event_notifications,
        );
        DB::table('users')->where('id', Auth::User()->id)->update($updateUserDetails);
        return Redirect::back();
    }

    // generic upload
    public function genericFIleUpload($file,$dir,$realPath){
        $image_name = $file->getClientOriginalName();
        $file->move(public_path($dir),$image_name);
        $url = url('/');
        $image_path = "$url/$dir/" . $image_name;
        return $image_path;
    }
}
