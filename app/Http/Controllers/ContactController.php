<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //CONTACT-US
    public function index(){
        return view('contact-us', ['link' => 'https://www.educastudio.com/contact-us']);
    }
}
