<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contact;

class ContactController extends Controller
{

   public function store(Request $request)
  {
    $this->validate($request, [
      'name'  => 'required',
      'email'  => 'required',
      'number'  => 'required',
      'message'  => 'required',
    ],
    [
      'name.required'  => 'Please provide Your Name',
      'email.required'  => 'Please provide Email Address',
      'number.required'  => 'Please provide Your Phone Numebr',
      'message.required'  => 'Please provide Your Message.',
    ]);

    $contactus = new contact();
    $contactus->name = $request->name;
    $contactus->email = $request->email;
    $contactus->number = $request->number;
    $contactus->message = $request->message;


    $contactus->save();

    session()->flash('success', 'Your Message is Sent on Admin Panel.');
    return redirect()->route('contact');

  }
}
