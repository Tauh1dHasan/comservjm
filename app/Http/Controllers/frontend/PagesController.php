<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Frontend pages controller

    // Home page method
    public function home()
    {
        return view('frontend.pages.home');
    }

    // AboutUs page method
    public function about()
    {
        return view('frontend.pages.about');
    }
}
