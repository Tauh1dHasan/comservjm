<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
// Models
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::where('id', 1)->first();
        $images = Gallery::whereNotNull('image')->get();

        return view('backend.pages.gallery', compact('gallery' , 'images'));
    }

    // Update gallery
    public function update(Request $request)
    {
        $gallery = Gallery::where('id', 1)->first();
        $gallery->title = $request->title;
        $gallery->description = $request->description;
        $done = $gallery->save();
        
        if($request->image != NUll){
            $image = new Gallery;
            $imageName = time().'.'.$request->image->extension();
            $image->image = $imageName;
            $request->image->move(public_path('images/gallery/'), $imageName);
            $imgDone = $image->save();

        }

        if($done){
            return redirect()->route('admin.gallery.index')->with('success', 'Gallery info updated successfully...!');
        }elseif($imgDone){
            return redirect()->route('admin.gallery.index')->with('success', 'New image uploaded successfully...!');
        }else{
            return redirect()->route('admin.gallery.index')->with('fail', 'Something went wrong, Please try again...!');
        }
    }

    // Delete image
    public function delete(Request $request)
    {
        $image = Gallery::where('id', $request->id)->first();
        $imageName = $image->image;
        File::delete(public_path('images/gallery/'.$imageName));
        $image->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted successfully...!');
    }
}
