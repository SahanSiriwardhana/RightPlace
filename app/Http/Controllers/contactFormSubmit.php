<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class contactFormSubmit extends Controller
{
    //
    public function submitForm(Request $request){
        $data = $request->all();
        $this->sendEmailFromPopup($data);
        return  redirect()->back()->with(['successFullySentEmail' =>'Our Agents will contact you soon']);;
    }

    //Send Email

    public function sendEmailFromPopup($user){
        Mail::send(
            'contactFormMailBody',
            ['user'=>$user],
            function($message) use ($user){
                $message->to('rightplaceteam@gmail.com');
                $message->subject("Requested a advice from ",$user["name"]);
            }
        );
    }
}
