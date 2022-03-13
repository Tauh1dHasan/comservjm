<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models
use App\Models\HomeMainSlider;
use App\Models\HomeAboutus;

class PagesController extends Controller
{
    // Frontend pages controller

    // Home page method
    public function home()
    {
        $mainSliders = HomeMainSlider::all();
        $aboutUs = HomeAboutus::where('id', 1)->first();

        return view('frontend.pages.home', compact('mainSliders', 'aboutUs'));
    }

    // AboutUs page method
    public function about()
    {
        return view('frontend.pages.about');
    }

    // Services page method
    public function services()
    {
        return view('frontend.pages.services');
    }

    // Service-Item page method
    public function serviceItem()
    {
        return view('frontend.pages.serviceItem');
    }

    // Gallery page method
    public function gallery()
    {
        return view('frontend.pages.gallery');
    }

    // shop page method
    public function shop()
    {
        return view('frontend.pages.shop');
    }

    // shopItem page method
    public function shopItem()
    {
        return view('frontend.pages.shopItem');
    }

    // faq page method
    public function faq()
    {
        return view('frontend.pages.faq');
    }

    // contact page method
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
