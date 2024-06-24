<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;

class NewsLetterController extends Controller
{
    public function subscribe(){
        $CollectAddres =  array(
            'addr1' => 'chalbi',
            'city'  => 'Nairobi',
            'state'  => 'Kenya',
            'zip'  => '00100',
        );

        $email = "balbertmuhatia@gmail.com";
        Newsletter::subscribe($email,
             [
                'FNAME'=>'Albert',
                'LNAME'=>'Muhatia',
                'ADDRESS'=>$CollectAddres,
                'PHONE'=>'+254723014032',
                'BIRTHDAY'=>'04/08',
                'MMERGE6'=>'Yes', //Drug Delivery
                'MMERGE7'=>'Yes', //Microbiology
                'MMERGE8'=>'Yes', //Analytical Techniques
                'MMERGE9'=>'Yes', //Formulation Development
                'MMERGE10'=>'Yes', //Bioprocessing
                'MMERGE11'=>'Yes', //Manufacturing
                'MMERGE12'=>'Yes', //Quality Assurance /Quality Control,
                'MMERGE13'=>'Yes', //Biopharma
                'MMERGE14'=>'Yes', //Packaging and Labelling
                'MMERGE15'=>'Yes', //Regulatory Affairs
                'MMERGE16'=>'Yes', //Health Supply Chain Management
                'MMERGE17'=>'Yes', //Artificial Intelligence
                'MMERGE18'=>'Yes', //Digital version of the African Pharmaceutical Review (published quarterly)
                'MMERGE19'=>'Yes', //Newsletter
                'MMERGE20'=>'Yes', //Third party (application notes, product development and updates from partners)
                'MMERGE21'=>'Yes', //Webinar notifications
                'MMERGE22'=>'Yes', //Printed Version of Magazine
                'MMERGE24'=>'Yes', //Printed Version of Magazine
                'MMERGE23'=>'Yes' //Event notifications
            ]);

        echo "done";
    }

    public function unsubscribe(){
        $email = "albertmuhatia@gmail.com";
        Newsletter::unsubscribe($email);
    }
}

// Areas of interest:
// Microbiology
// Analytical Techniques
// Drug Delivery
// Formulation Development
// Bioprocessing
// Manufacturing
// Quality Assurance /Quality Control,
// Biopharma
// Packaging and Labelling
// Regulatory Affairs
// Health Supply Chain Management
// Artificial Intelligence

// Subscription Options:
// Digital version of the African Pharmaceutical Review (published quarterly)
// Newsletter
// Third party (application notes, product development and updates from partners)
// Webinar notifications
// Printed Version of Magazine
// Event notifications


