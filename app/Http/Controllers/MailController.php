<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
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
    }
}
