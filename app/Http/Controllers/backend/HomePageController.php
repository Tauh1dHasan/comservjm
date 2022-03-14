<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models
use App\Models\HomeMainSlider;
use App\Models\HomeAboutus;
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

        return view('backend.pages.home', compact('sliders', 'aboutUs'));
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


    


}
