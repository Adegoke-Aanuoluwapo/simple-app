<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

use Illuminate\Contracts\Mail\Mailable;

class MailController extends Controller
{
    function sendMail(){
        $build = [
            'subject'=>'Builder Academy',
            'body'=> 'Hello you have been booked for interview',
        ];
        try
        {
            Mail::to('Aanummaculate@gmial.com')->send(new Email($build));
            return response()->json(["Great check your mail box"]);
        }catch(Exception $th){
            return response()->json(["Sorry something went wrong"]);
        }
    }
}
