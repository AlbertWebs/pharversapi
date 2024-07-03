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

        $email = "albertmuhatia58@gmail.com";
       $Newsletter =  Newsletter::subscribeorUpdate($email,
             [
                'MERGE1'=>'Alberts',
                'MERGE2'=>'Muhatias',
                'MERGE3'=>$CollectAddres,
                'MERGE4'=>'+254723014032',
                'MMERGE5'=>'Yes', //Drug Delivery
                'MMERGE6'=>'Yes', //Microbiology
                'MMERGE7'=>'Yes', //Analytical Techniques
                'MMERGE8'=>'Yes', //Formulation Development
                'MMERGE9'=>'Yes', //Bioprocessing
                'MMERGE10'=>'Yes', //Manufacturing
                'MMERGE11'=>'Yes', //Quality Assurance /Quality Control,
                'MMERGE12'=>'Yes', //Biopharma
                'MMERGE13'=>'Yes', //Packaging and Labelling
                'MMERGE14'=>'Yes', //Regulatory Affairs
                'MMERGE15'=>'Yes', //Health Supply Chain Management
                'MMERGE16'=>'Yes', //Artificial Intelligence
                'MMERGE17'=>'Yes', //Digital version of the African Pharmaceutical Review (published quarterly)
                'MMERGE18'=>'Yes', //Newsletter
                'MMERGE19'=>'Yes', //Third party (application notes, product development and updates from partners)
                'MMERGE20'=>'Yes', //Webinar notifications
                'MMERGE21'=>'Yes', //Printed Version of Magazine
                'MMERGE22'=>'Yes', //Event notifications
                'MMERGE23'=>'Yes' //Country
            ]);

            return Newsletter::getLastError();

        echo "done";
    }

    public function unsubscribe(){
        $email = "albertmuhatia@gmail.com";
        Newsletter::unsubscribe($email);
    }

    public function allSubscribe(){

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


