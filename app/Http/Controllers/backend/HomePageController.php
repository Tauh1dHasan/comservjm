<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models
use App\Models\HomeMainSlider;
use App\Models\HomeAboutus;
use App\Models\HomeHighlight;
use App\Models\HomeOffer;
use App\Models\HomeStatistic;
use App\Models\HomeTestimonial;
// Facades
use File;

class HomePageController extends Controller
{
    // Show Dashboard (index)
    public function index()
    {
        return view('backend.dashboard');
    }

    // Show Home page manager (Home-page index)
    public function homePage(){
        
        $sliders = HomeMainSlider::all();
        $aboutUs = HomeAboutus::where('id', 1)->first();
        $highlights = HomeHighlight::all();
        $offer = HomeOffer::where('id', 1)->first();
        $statistic = HomeStatistic::where('id', 1)->first();
        $testimonials = HomeTestimonial::all();

        return view('backend.pages.home', compact(
            'sliders', 'aboutUs', 'highlights', 'offer', 'statistic', 'testimonials'
        ));
    }

    // Update Home page main slider
    public function mainSliderUpdate(Request $request)
    {   
        if($request->mainSlider == NULL){
            
            $slider = HomeMainSlider::where('id', $request->id)->first();
            $slider->title = $request->title;
            $done = $slider->save();

            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Slider Title Updated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try again...!');
            }

        }else{
            
            $slider = HomeMainSlider::where('id', $request->id)->first();

            $oldImage = $slider->image;
            File::delete(public_path('images/mainSlider/'.$oldImage));

            $slider->title = $request->title;
            $imageName = time().'.'.$request->mainSlider->extension();
            $slider->image = $imageName;
            $request->mainSlider->move(public_path('images/mainSlider/'), $imageName);
            $done = $slider->save();

            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Slider Updated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try again...!');
            }

        }
    }

    // Update home page about us section
    public function aboutusUpdate(Request $request)
    {
        if($request->image == NULL){
            $aboutUs = HomeAboutus::where('id', 1)->first();
            $aboutUs->title = $request->title;
            $aboutUs->description = $request->description;
            $done = $aboutUs->save();

            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Home page About us section udated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try agrain...!');
            }
        }else{
            $aboutUs = HomeAboutus::where('id', 1)->first();
            $aboutUs->title = $request->title;
            $aboutUs->description = $request->description;

            $oldImage = $aboutUs->image;
            File::delete(public_path('images/'.$oldImage));

            $imageName = time().'.'.$request->image->extension();
            $aboutUs->image = $imageName;
            $request->image->move(public_path('images/'), $imageName);

            $done = $aboutUs->save();

            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Home page About us section udated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try agrain...!');
            }
        }
    }

    // Update home page highlight section
    public function highlightUpdate(Request $request)
    {
        if($request->image == NULL){
            $highlight = HomeHighlight::where('id', $request->id)->first();
            $highlight->title = $request->title;
            $highlight->description = $request->description;
            $done = $highlight->save();

            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Home page Highlight section udated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try agrain...!');
            }
        }else{
            $highlight = HomeHighlight::where('id', $request->id)->first();
            $highlight->title = $request->title;
            $highlight->description = $request->description;

            $oldImage = $highlight->image;
            File::delete(public_path('images/'.$oldImage));

            $imageName = time().'.'.$request->image->extension();
            $highlight->image = $imageName;
            $request->image->move(public_path('images/'), $imageName);

            $done = $highlight->save();

            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Home page Highlight section udated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try agrain...!');
            }
        }
    }

    // Offer section update
    public function offerUpdate(Request $request)
    {
        if($request->image == NULL){
            $offer = HomeOffer::where('id', 1)->first();
            $offer->title = $request->title;
            $offer->description = $request->description;
            $offer->phone_number = $request->phone_number;
            $done = $offer->save();
            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Home page Offer section udated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try agrain...!');
            }
        }else{
            $offer = HomeOffer::where('id', 1)->first();
            $offer->title = $request->title;
            $offer->description = $request->description;
            $offer->phone_number = $request->phone_number;

            $oldImage = $offer->image;
            File::delete(public_path('images/'.$oldImage));

            $imageName = time().'.'.$request->image->extension();
            $offer->image = $imageName;
            $request->image->move(public_path('images/'), $imageName);

            $done = $offer->save();

            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Home page Offer section udated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try agrain...!');
            }
        }
    }

    // Update statistic
    public function statisticUpdate(Request $request)
    {
        if($request->image == NULL){
            $statistic = HomeStatistic::where('id', 1)->first();
            $statistic->title = $request->title;
            $statistic->residential = $request->residential;
            $statistic->commercial = $request->commercial;
            $statistic->industrial = $request->industrial;
            $done = $statistic->save();
            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Home page Statistic section udated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try agrain...!');
            }
        }else{
            $statistic = HomeStatistic::where('id', 1)->first();
            $statistic->title = $request->title;
            $statistic->residential = $request->residential;
            $statistic->commercial = $request->commercial;
            $statistic->industrial = $request->industrial;

            $oldImage = $statistic->image;
            File::delete(public_path('images/'.$oldImage));

            $imageName = time().'.'.$request->image->extension();
            $statistic->image = $imageName;
            $request->image->move(public_path('images/'), $imageName);

            $done = $statistic->save();

            if($done){
                return redirect()->route('admin.home.homePage')->with('success', 'Home page Statistic section udated...!');
            }else{
                return redirect()->route('admin.home.homePage')->with('fail', 'Please try agrain...!');
            }
        }
    }

    // Add testimocial
    public function addTestimonial(Request $request)
    {
        $testimonial = new HomeTestimonial;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        $testimonial->name = $request->name;
        if($request->image != NULL){
            $imageName = time().'.'.$request->image->extension();
            $testimonial->image = $imageName;
            $request->image->move(public_path('images/'), $imageName);
        }
        $done = $testimonial->save();

        if($done){
            return redirect()->route('admin.home.homePage')->with('success', 'Home page Testimonial added...!');
        }else{
            return redirect()->route('admin.home.homePage')->with('fail', 'Please try agrain...!');
        }
    }

    // Delete testimonial
    public function deleteTestimonial($id)
    {
        $testimonial = HomeTestimonial::where('id', $id)->delete();
        return redirect()->route('admin.home.homePage')->with('success', 'Testimonial deleted...!');
    }

    


}
