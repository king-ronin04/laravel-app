<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function showForm(){
        return view('contact');
    }
    public function getData(Request $request) 
    {

    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'subject' => 'required',
      'message' => 'required'
    ]);

    // Save data

    return redirect('/contact')->with('success', 'Thanks for contacting us!');

    }
}
