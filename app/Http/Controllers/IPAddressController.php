<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPAddressController extends Controller
{

    public function getLocalIP(Request $request) 
    {
        $clientIP = $request->ip(); 

        return "Client IP Address: ". $clientIP; 

    }
}
