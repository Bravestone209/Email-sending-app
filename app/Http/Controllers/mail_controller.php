<?php

namespace App\Http\Controllers;

use App\Jobs\Email_Job;
use App\Mail\mail_mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mail_controller extends Controller
{
    //

    public function mail(){
        return view('mail');
    }


    public function mail1(Request $request){


        $requestData = $request->only('email');
        $emails = explode(',', $requestData['email']);

        
        $emaildata =[
            'subject'=>'Test email sender.',
            'body'=>$request->text,
            'tagline' => 'Hi, this is my tagline'
        ];

    

        foreach ($emails as $email) {
            Mail::to($email)->send(new mail_mail($emaildata));

        }

        return redirect()->to('mail')->with('success', 'Email sent successfully.');

    }




}
