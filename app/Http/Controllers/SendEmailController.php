<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Contact;

class SendEmailController extends Controller
{
    function index()
    {
        return view('send_email');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required',
            'title' =>  'required'
        ]);

        $data = array(
            'name'=>  $request->name,
            'message'=>   $request->message,
            'title'=>  $request->title,
            'email'=>  $request->email
        );
        $mail = new Contact;
        $mail->name = request('name');
        $mail->description= request('message');
        $mail->title = request('title');
        $mail->email = request('email');
        $mail->save();
        //dd($data);

        Mail::to('senglikareng@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');



    }
}
