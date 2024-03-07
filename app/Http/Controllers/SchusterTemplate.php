<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ContactSchuster;
use Illuminate\Support\Facades\Validator;
use ErlandMuchasaj\LaravelFileUploader\FileUploader;
use Illuminate\Support\Facades\Http;

class SchusterTemplate extends Controller
{
    public function index() 
    {
        return view('index');
    }
    public function acceptable_use_policy() 
    {
        return view('acceptable_use_policy');
    }
    public function privacy_policy(Request $request) 
    {
        $clientIP = $request->ip();
        return view('privacy_policy', compact('clientIP'));
    }
    public function cookie_policies() 
    {
        return view('cookie_policies');
    }
    public function terms_and_conditions() 
    {
        return view('terms_and_conditions');
    }
    public function website_services()
    {
        return view('website_services');
    }
    public function business_consulting_services()
    {
        return view('business_consulting_services');
    }
    public function commercial_loan_services()
    {
        return view('commercial_loan_services');
    }
    public function disclaimers()
    {
        return view('disclaimers');
    }
    public function faq()
    {
        return view('faq');
    }
    public function team()
    {
        return view('team');
    }
    public function review()
    {
        return view('review');
    }
    public function glk()
    {
        return view('glk');
    }

    public function contactForm(Request $request) {
        \Log::info(json_encode($request->all()));

        $contactReq = new ContactSchuster();

        $cs_request_str = "";
        foreach($request->cs_request as $reqValue) {
            if (!empty($reqValue)) {
                $cs_request_str .= "$reqValue".",";
            }   
        }
        $cs_request_str = Str::beforeLast($cs_request_str , ',');

        $rules = [
            'cs_name' => 'required|string|min:1|max:255',
            'cs_email' => 'required|email:rfc,dns',
            'cs_message' => 'required|min:3|max:4000',
            'cs_phone' => 'required|string|max:255'
        ];
        $customMessage = [
            'cs_name.*' => 'Please enter your name',
            'cs_email.*' => 'Please enter a valid email address',
            'cs_phone.*' => 'Please enter a valid phone number',
            'cs_message.*' => 'Please enter a message'
        ];
        
        $validator = Validator::make($request->all(), $rules, $customMessage);

        if ( $validator->fails() ) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $contactReq->fullname = $request->cs_name;
        $contactReq->email = $request->cs_email;
        $contactReq->phonenumber = $request->cs_phone;
        $contactReq->businessname = $request->cs_bizname;
        $contactReq->location = $request->cs_location;
        $contactReq->channel = $request->cs_source;
        $contactReq->businessreqest = $cs_request_str;
        $contactReq->businessduration = $request->cs_duration;
        $contactReq->message = $request->cs_message;
        $contactReq->ipaddress = $request->ip();
        $contactReq->save();

        return response()->json( [ 'success' => 'Form submission is validated and logged' ] );
    }

    public function files()
    {
        return view('files');
    }

    public function filesUpload(Request $request)
    {
        $max_size = (int) ini_get('upload_max_filesize') * 1000;

        $extensions = implode(',', FileUploader::images());

        $request->validate([
            'file' => [
                'required',
                'file',
                'image',
                'mimes:' . $extensions,
                'max:'.$max_size,
            ]
        ]);

        $file = $request->file('file');

        $response = FileUploader::store($file);

        return redirect()
                ->back()
                ->with('success','File has been uploaded.')
                ->with('file', $response);
    }

    public function ApiHex()
    {
        // URL
        $apiURL = 'http://jsonplaceholder.typicode.com/posts';

        // POST Data
        $postInput = [
            'title' => 'Laravel 10 cURL Example',
            'body' => "This is cURL Post Request Example",
            'userId' => 1
        ];
  
        // Headers
        $headers = [
            //...
        ];
  
        
        $response = Http::withHeaders($headers)->post($apiURL, $postInput);
  
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
      
        echo $statusCode;  // status code

        dd($responseBody); // body response
        
        //phpinfo();
    }
}
