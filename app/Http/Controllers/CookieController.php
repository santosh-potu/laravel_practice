<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function setCookie(){
        $minutes = 5;
        $response = new \Illuminate\Http\Response('Hello world');
        $response->withCookie(cookie('name','virat',$minutes));
        return $response;
    }
    
    public function getCookie(Request $request){
        $value = $request->cookie('name');
        echo $value;
    }
}
