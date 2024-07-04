<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Spatie\Newsletter\Facades\Newsletter;
use Hash;


class ImportController extends Controller
{
    public function impoorts(){
        return view('import');
    }
    public function import(Request $request)
    {
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        foreach ($fileContents as $line) {
            $data = str_getcsv($line);

            Product::create([
                'email' => $data[0],
                'fname' => $data[1],
                'lname' => $data[2],
                'newsletter' => $data[3],
            ]);
        }

        return redirect()->back()->with('success', 'CSV file imported successfully.');
    }

    public function newAudience(){
        $start = 89;
        $Stop = 99;
        $Product = Product::whereBetween('id', [$start, $Stop])->get();
        foreach($Product as $product){
            $Newsletter = Newsletter::subscribeorUpdate($product->email,
            [
               'FNAME'=>$product->fname,
               'LNAME'=>$product->lname,
               'MMERGE18'=>$product->newsletter,
            ]);
        }
        $getLastError = Newsletter::getLastError();
        // echo $getLastError;

    }

    public function updateUsers(){
        $Product = Product::all();
        foreach($Product as $product){
            $Exist = User::where('email',$product->email)->get();
            if($Exist->isEmpty()){
                User::create([
                    'email' => $product->email,
                    'name' => "$product->fname $product->lname",
                    'fname' => $product->fname,
                    'lname' => $product->lname,
                    'Newsletter' => $product->newsletter,
                    'password'=>Hash::make($product->email)
                ]);
            }else{

            }
        }
    }
}
