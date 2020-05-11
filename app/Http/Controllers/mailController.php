<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send(){
        Mail::send(['text'=>'mail'],['name','sarthak'],function($message){
            $message->to('anuragsingh9999999@gmail.com','Polling App')->subject('Test Mail');
            $message->from('anuragsingh9999999@gmail.com');
            echo "Mail sent successfully";
        });
    }
}
