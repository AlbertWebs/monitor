<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\SslCertificate\SslCertificate;

class HomeController extends Controller
{
    //
    public function index(){
       
        
        return view('index');
        
    }

    public function privacy(){
       
        return view('privacy');
    
    }

    public function terms(){
       
        return view('terms');
    
    }

    public function credit(){
       
        return view('credit');
    
    }

    public function monitoring_plans(){
       
        return view('monitoring_plans');
    
    }

    public function getSSL(){
        // fetch the certificate using an url
        $certificate = SslCertificate::createForHostName('spatie.be');
        $certificate->getIssuer(); // returns "Let's Encrypt Authority X3"
        $certificate->isValid(); // returns true if the certificate is currently valid
        $certificate->validFromDate(); // returns a Carbon instance Carbon
        $certificate->expirationDate(); // returns a Carbon instance Carbon
        $certificate->lifespanInDays(); // return the amount of days between  validFromDate and expirationDate
        $certificate->expirationDate()->diffInDays(); // returns an int
        $certificate->getSignatureAlgorithm(); // returns a string
        $certificate->getOrganization(); // returns the organization name when available
    }

    public function getDown(){
        // fetch the certificate using an url
       
    }

    public function addHost(Request $request)
    {

        $url = $request->url;
        $uptime_check_enabled = $request->uptime_check_enabled;
        $certificate_check_enabled = $request->certificate_check_enabled;
        $look_for_string = $request->look_for_string;
        $uptime_check_interval_in_minutes = $request->uptime_check_interval_in_minutes;
        $uptime_check_method = $request->uptime_check_method;
        $uptime_check_payload = $request->uptime_check_payload;
        $uptime_check_additional_headers = $request->uptime_check_additional_headers;
        $uptime_check_response_checker = $request->uptime_check_response_checker;

        $Monitor = new Monitor;
        $Monitor->url = $request->url;
        $Monitor->user_id = $request->user_id;
        $Monitor->uptime_check_enabled = $request->uptime_check_enabled;
        $Monitor->certificate_check_enabled = $request->certificate_check_enabled;
        $Monitor->look_for_string = $request->look_for_string;
        $Monitor->uptime_check_interval_in_minutes = $request->uptime_check_interval_in_minutes;
        $Monitor->uptime_check_method = $request->uptime_check_method;
        $Monitor->uptime_check_payload = $request->uptime_check_payload;
        $Monitor->uptime_check_additional_headers = $request->uptime_check_additional_headers;
        $Monitor->uptime_check_response_checker = $request->uptime_check_response_checker;
        $Monitor->save();
    }

    public function editHost(Request $request)
    {

        $url = $request->url;
        $uptime_check_enabled = $request->uptime_check_enabled;
        $certificate_check_enabled = $request->certificate_check_enabled;
        $look_for_string = $request->look_for_string;
        $uptime_check_interval_in_minutes = $request->uptime_check_interval_in_minutes;
        $uptime_check_method = $request->uptime_check_method;
        $uptime_check_payload = $request->uptime_check_payload;
        $uptime_check_additional_headers = $request->uptime_check_additional_headers;
        $uptime_check_response_checker = $request->uptime_check_response_checker;

        $Monitor = new Monitor;
        $Monitor->url = $request->url;
        $Monitor->user_id = $request->user_id;
        $Monitor->uptime_check_enabled = $request->uptime_check_enabled;
        $Monitor->certificate_check_enabled = $request->certificate_check_enabled;
        $Monitor->look_for_string = $request->look_for_string;
        $Monitor->uptime_check_interval_in_minutes = $request->uptime_check_interval_in_minutes;
        $Monitor->uptime_check_method = $request->uptime_check_method;
        $Monitor->uptime_check_payload = $request->uptime_check_payload;
        $Monitor->uptime_check_additional_headers = $request->uptime_check_additional_headers;
        $Monitor->uptime_check_response_checker = $request->uptime_check_response_checker;
        $Monitor->save();
    }

    public function monitors(){
       
        return view('monitors');
    
    }

    public function login(){
       
        return view('login');
    
    }

    
    

    
}
