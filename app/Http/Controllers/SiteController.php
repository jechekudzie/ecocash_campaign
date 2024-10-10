<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function contact()
    {
        return view('contact');
    }

    public function gettingStarted()
    {
        return view('getting-started');
    }
}
