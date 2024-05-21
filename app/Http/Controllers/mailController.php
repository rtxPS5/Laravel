<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'Web dev blog'], function ($message){
            $message->to('segasaturnatari@gmail.com', 'To web dev blog')->subject('Test email');
            $message->from('segasaturnatari@gmail.com', 'Web dev blog');
        });
    }
}
