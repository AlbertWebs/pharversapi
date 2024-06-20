<?php
function timeAgo($timestamp){
    $datetime1=new DateTime("now");
    $datetime2=date_create($timestamp);
    $diff=date_diff($datetime1, $datetime2);
    $timemsg='';
    if($diff->y > 0){
        $timemsg = $diff->y .' year'. ($diff->y > 1?"'s":'');

    }
    else if($diff->m > 0){
    $timemsg = $diff->m . ' month'. ($diff->m > 1?"'s":'');
    }
    else if($diff->d > 0){
    $timemsg = $diff->d .' day'. ($diff->d > 1?"'s":'');
    }
    else if($diff->h > 0){
    $timemsg = $diff->h .' hour'.($diff->h > 1 ? "'s":'');
    }
    else if($diff->i > 0){
    $timemsg = $diff->i .' minute'. ($diff->i > 1?"'s":'');
    }
    else if($diff->s > 0){
    $timemsg = $diff->s .' second'. ($diff->s > 1?"'s":'');
    }

$timemsg = $timemsg.' ago';
return $timemsg;
}
function dollar($value){
    $newValue = $value*0.0099;
    return $newValue;
}

function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}


function add_nol($number,$add_nol) {
   while (strlen($number)<$add_nol) {
       $number = "AVS0".$number;
   }
   return $number;
}

function getAuthor($id){
    $author = \App\Models\User::find($id);
    return $author->name;
}

function getAuthorSlung($id){
    $author = \App\Models\User::find($id);
    return $author->username;
}

function getAuthorBio($id){
    $author = \App\Models\User::find($id);
    return $author->content;
}

function getAuthorDP($id){
    $author = \App\Models\User::find($id);
    return $author->image;
}

function getAreas($areas_of_interest){
        // Remove Quotes & Special Characters
        $Prep = str_replace(str_split('"[]'), '', $areas_of_interest);
        // echo $Prep;
        $array = explode(',', $Prep);
        return $array;
}

function getSubscriptions($subscription){
    // Remove Quotes & Special Characters
    $Prep = str_replace(str_split('"[]'), '', $subscription);
    // echo $Prep;
    $array = explode(',',$Prep);
    return $array;
}

function wordsCounter($content){
    $tranfomer = new \Stevebauman\Hypertext\Transformer;
    $formated = $tranfomer->toText($content);
    $prep = preg_replace('/[^A-Za-z0-9\-]/', ' ', $formated);
    $timeInSeconds = app(\Logiek\ReadingTime\ReadingTime::class)->average("'.$prep.'");
    return $timeInSeconds;
}

function estimateReadingTime($text) {
    $wpm = 230;
    $totalWords = str_word_count(strip_tags($text));
    $minutes = floor($totalWords / $wpm);
    $seconds = floor($totalWords % $wpm / ($wpm / 60));

    return "$minutes Mins";
}
