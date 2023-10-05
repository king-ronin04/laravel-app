<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactForm extends Controller
{
    public function showForm(){
        return view('contact');
    }
    public function getData(){
        
    }
}
