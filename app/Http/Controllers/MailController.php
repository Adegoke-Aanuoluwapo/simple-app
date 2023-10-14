<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

use Illuminate\Contracts\Mail\Mailable;

class MailController extends Controller
{
    function sendMail(){
        $name = 'Aanuoluwapo';
        Mail::to('fake@mail.com')->send(new Email($name));
        return view('Email');
    }
}
