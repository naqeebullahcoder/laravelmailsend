<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEmail(Request $req){

        $data = [
            'name'=>$req->name,
            'email'=>$req->email,
            'message'=>$req->message
        ];
        Mail::to('naqeebullah656@gmail.com')->send(new ContactMail($data));
        return 'Message Sent';
    }
}
