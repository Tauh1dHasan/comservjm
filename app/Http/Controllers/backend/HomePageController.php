<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models
use App\Models\HomeMainSlider;
// Facades
use File;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.dashboard');
    }

    // Show Home page main slider update page
    public function mainSlider(){
        
        $sliders = HomeMainSlider::all();
        
        return view('backend.pages.home.mainSlider', compact('sliders'));
    }

    // Update Home page main slider
    public function mainSliderUpdate(Request $request)
    {   
        if($request->mainSlider == NULL){
            
            $slider = HomeMainSlider::where('id', $request->id)->first();
            $slider->title = $request->title;
            $done = $slider->save();

            if($done){
                return redirect()->route('admin.home.mainSlider')->with('success', 'Slider Title Updated...!');
            }else{
                return redirect()->route('admin.home.mainSlider')->with('fail', 'Please try again...!');
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
                return redirect()->route('admin.home.mainSlider')->with('success', 'Slider Updated...!');
            }else{
                return redirect()->route('admin.home.mainSlider')->with('fail', 'Please try again...!');
            }

        }
    }

    // Show home page aboutus update page
    public function aboutus()
    {
        return view('backend.pages.home.aboutus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
