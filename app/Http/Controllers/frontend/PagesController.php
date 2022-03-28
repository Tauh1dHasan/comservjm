<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models
use App\Models\HomeMainSlider;
use App\Models\HomeAboutus;
use App\Models\HomeHighlight;
use App\Models\HomeOffer;
use App\Models\HomeStatistic;
use App\Models\HomeTestimonial;
use App\Models\AboutusExperience;
use App\Models\AboutusCertificate;
use App\Models\Team;
use App\Models\Gallery;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\ShopCategory;
use App\Models\Product;
use App\Models\Service;

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
        $galleryImages = Gallery::orderBy('id', 'DESC')->take(10)->where('id', '!=', 1)->get();

        return view('frontend.pages.home', compact(
            'mainSliders', 'aboutUs', 'highlights', 'offer', 'statistic', 'testimonials', 'galleryImages'
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
    public function serviceItem($id)
    {
        $allServices = Service::with('serviceCategory')->get();
        $service = Service::with('serviceCategory')->where('id', $id)->first();

        return view('frontend.pages.serviceItem', compact('allServices', 'service'));
    }

    // Gallery page method
    public function gallery()
    {
        $gallery = Gallery::where('id', 1)->first();
        $images = Gallery::whereNotNull('image')->get();
        return view('frontend.pages.gallery', compact('gallery', 'images'));
    }

    // shop page method
    public function shop()
    {
        $categories = ShopCategory::all();
        $products = Product::where('favorite', 1)->get();

        return view('frontend.pages.shop', compact('categories', 'products'));
    }

    // Category wise page
    public function shopCategory($id)
    {
        $categories = ShopCategory::all();
        $categoryName = ShopCategory::where('id', $id)->first();
        $products = Product::with('shopCategory')->where('shop_category_id', $id)->get();

        return view('frontend.pages.shopCategory', compact('products', 'categories', 'categoryName'));
    }

    // shopItem page method
    public function shopItem($id)
    {
        $product = Product::where('id', $id)->first();
        $category_id = Product::select('shop_category_id')->where('id', $id)->first();
        $similars = Product::where('shop_category_id', $category_id)->get();

        return view('frontend.pages.shopItem', compact('product', 'similars'));
    }

    // faq page method
    public function faq()
    {
        $firstFaqs = Faq::orderBy('id', 'asc')->take(4)->get();
        $secondFaqs = Faq::orderBy('id', 'desc')->take(4)->get();

        return view('frontend.pages.faq', compact('firstFaqs', 'secondFaqs'));
    }

    // contact page method
    public function contact()
    {
        $setting = Setting::where('id', 1)->first();

        return view('frontend.pages.contact', compact('setting'));
    }
}
