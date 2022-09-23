<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactUs;
class MailController extends Controller
{
    public function contactUs(){
        return view('contact-us');
    }
    public function contactData(Request $request)
    {
        $name = $request['name'];
        $country = $request['country'];
        $email = $request['email'];
        $msg = $request['subject'];
 
      Mail::to('hamzabashir541@gmail.com')->send(new ContactUs($name, $country, $msg));
 
      if (Mail::failures()) 
      {
           return  redirect()->back()->with('Sorry! Please try again latter');
      }
      else
      {
           return  redirect()->back()->with('message', 'Successfully send in your mail');
      }
    } 
}
