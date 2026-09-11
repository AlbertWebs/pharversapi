<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\SendEmail;

class SubscriberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function wizard(){
        return view('wizard');
    }

    public function thank(){
        return view('thanks');
    }

    public function manual(){
        return view('auth.login-bk.blade');
    }

    public function terms(){
        return view('terms');
    }

    public function subscription(Request $request){
        // Honeypot: the hidden website field is always present; only filled values are spam
        if (!empty($request->website)) {
            return redirect()->back();
        }

        $areasOfInterest = $request->areas_of_interest;
        if (is_array($areasOfInterest)) {
            $areasOfInterest = implode(', ', $areasOfInterest);
        }

        $subscriptionOptions = $request->subscription_options;
        if (is_array($subscriptionOptions)) {
            $subscriptionOptions = implode(', ', $subscriptionOptions);
        }

        $updateUserDetails = array(
            'organization' => $request->organization,
            'areas_of_interest' => $areasOfInterest,
            'country_code' => $request->country_code,
            'address' => $request->address,
            'phone' => $request->phone,
            'country' => $request->country,
            'state' => $request->state,
            'Job_function' => $request->Job_function,
            'other_Job_function' => $request->other_Job_function,
            'other_areas_of_interest' => $request->other_areas_of_interest,
            'subscription_options' => $subscriptionOptions,
            'terms' => $request->terms,
            'subscription_status' => 'active',
        );
        DB::table('users')->where('id',Auth::User()->id)->update($updateUserDetails);
        $Sender = "info@africanpharmaceuticalreviews.com";
        $SenderId = "Africa Pharmaceutical Reviews";
        $MessageToSubscriber = "";
        $MessageToCompany = "";
        $SubscriberName = Auth::User()->name;
        $SubscriberId = Auth::User()->email;
        $Subject = "Your Subscription:Success";
        // Send Email To Subscriber
        SendEmail::sendEmail($Sender,$SenderId,$MessageToSubscriber,$SubscriberName,$SubscriberId,$Subject);
        $Subject = "New Subscriber:Success";
        // Send Email To Pharverse
        SendEmail::sendEmails($Sender,$SenderId,$MessageToCompany,$SubscriberName,$SubscriberId,$Subject);
        return redirect()->route('thank-you');
    }

    public function check(Request $request)
    {
     if($request->get('email'))
     {
      $email = $request->get('email');
      $data = DB::table("tbl_login")
       ->where('email', $email)
       ->count();
      if($data > 0)
      {
       echo 'not_unique';
      }
      else
      {
       echo 'unique';
      }
     }
    }
}
