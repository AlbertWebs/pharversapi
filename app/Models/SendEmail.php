<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class SendEmail extends Model
{
    use HasFactory;
    public static function sendEmail($Sender,$SenderId,$MessageToSend,$SubscriberName,$SubscriberId,$Subject){
        $data = array(
            'content'=>$MessageToSend,
            'subject'=>$Subject,
        );



        Mail::send('mailTheme', $data, function($message) use ($Subject,$Sender,$SenderId,$SubscriberId,$SubscriberName){
            $message->from($Sender , $SenderId);
            $message->to($SubscriberId, $SubscriberName)->cc('albertmuhatia@gmail.com')->cc('info@africanpharmaceuticalreview.com')->subject($Subject);
        });
    }

    public static function sendEmailSubscriber($Sender,$SenderId,$MessageToSend,$SubscriberName,$SubscriberId,$Subject){
        $data = array(
            'content'=>$MessageToSend,
            'subject'=>$Subject,
        );



        Mail::send('front.mail', $data, function($message) use ($Subject,$Sender,$SenderId,$SubscriberId,$SubscriberName){
            $message->from($Sender , $SenderId);
            $message->to($SubscriberId, $SubscriberName)->cc('albertmuhatia@gmail.com')->cc('info@africanpharmaceuticalreview.com')->subject($Subject);
        });
    }


    public static function sendEmails($Sender,$SenderId,$MessageToSend,$SubscriberName,$SubscriberId,$Subject){
        $data = array(
            'content'=>$MessageToSend,
            'subject'=>$Subject,
        );

       $to = "info@designekta.com";
       $toName = "Designekta Studios";

        Mail::send('mailTheme', $data, function($message) use ($Subject,$Sender,$SenderId,$to,$toName){
            $message->from($Sender , $SenderId);
            $message->to($to, $toName)->cc('albertmuhatia@gmail.com')->cc('info@africanpharmaceuticalreview.com')->subject($Subject);
        });
    }
}
