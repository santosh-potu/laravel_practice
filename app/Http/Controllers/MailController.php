<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function basic_email(){
        $data = ['name' => 'Santosh Potu'];
        Mail::send(['text'=>'mail'] ,$data, function($message){
            $message->to('santoshreddy.potu@gmail.com','Santhu')
                    ->subject('Test mail from laravel')
                    ->From('spotu16@gmail.com','santosh');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
    
    public function html_email(){
        
    }
    
    public function attachment_email(){
        
    }
}
