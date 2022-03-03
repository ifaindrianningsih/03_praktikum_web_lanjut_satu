<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //HOME
    public function home(){
        return view('home', ['link' => 'https://www.educastudio.com/']);
    }
    //PRODUCT
    public function product($id){
        return view('product', ['link' => $id]);
    }
    //NEWS
    public function news($id){
        return view('news', ['link' => $id]);
    }
    //PROGRAM
    public function program($id){
        return view('program', ['link' => $id]);
    }
    //ABOUT-US
    public function aboutus(){
        return view('about-us', ['link' => 'https://www.educastudio.com/about-us']);
    }
}
