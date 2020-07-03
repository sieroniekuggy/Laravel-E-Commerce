<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //show homepage
    public function getHome()
    {
        return view('home');
    }

    //show about page
    public function getAbout()
    {
        return view('about');
    }
    
    //show contact page
    public function getContact()
    {
        return view('contact');
    }
    
    //show homepage
    public function postContact(Request $request)
    {
        dd($request->all());
    }
    
}
