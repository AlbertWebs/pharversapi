<?php

namespace App\Models;
use Mail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMail extends Model
{
    use HasFactory;

    public static function send($data){

       $name = $data['name'];
       $email = $data['email'];
       $subject = "Mail Inquiry";
       $messages = $data['message'];
       $phone_number = $data['phone_number'];

       $bioData = array(
        'name' => $data['name'],
        'email' => $data['email'],
        'subject' => "Mail Inquiry",
        'msg' => $data['message'],
        'phone_number' => $data['phone_number'],
    );
    // dd($bioData);

       $FromVariable = $email;
       $FromVariableName = $name;

       $toVariable = "westsales@decomagna.com";
       $toVariableName = "Decomagna Support";

       Mail::send('mail', $bioData, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->bcc('albertmuhatia@gmail.com')->replyto($FromVariable)->subject($subject);
       });

    }
}
