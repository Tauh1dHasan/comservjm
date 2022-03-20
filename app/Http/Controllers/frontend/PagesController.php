<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models
// Home page
use App\Models\HomeMainSlider;
use App\Models\HomeAboutus;
use App\Models\HomeHighlight;
use App\Models\HomeOffer;
use App\Models\HomeStatistic;
use App\Models\HomeTestimonial;
// Aboutus page
use App\Models\AboutusExperience;
use App\Models\AboutusCertificate;
use App\Models\Team;

class PagesController extends Controller
{
    // Frontend pages controller

    // Home page method
    public function home()
    {
        $mainSliders = HomeMainSlider::all();
        $aboutUs = HomeAboutus::where('id', 1)->first();
        $highlights = HomeHighlight::all();
        $offer = HomeOffer::where('id', 1)->first();
        $statistic = HomeStatistic::where('id', 1)->first();
        $testimonials = HomeTestimonial::all();

        return view('frontend.pages.home', compact(
            'mainSliders', 'aboutUs', 'highlights', 'offer', 'statistic', 'testimonials'
        ));
    }

    // AboutUs page method
    public function about()
    {
        $experience = AboutusExperience::where('id', 1)->first();
        $certificate = AboutusCertificate::where('id', 1)->first();
        $teams = Team::all();

        return view('frontend.pages.about', compact(
            'experience', 'certificate', 'teams',
        ));
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
