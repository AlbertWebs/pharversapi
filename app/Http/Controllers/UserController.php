<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
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
}
