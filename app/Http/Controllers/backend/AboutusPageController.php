<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
// used models
use App\Models\AboutusExperience;
use App\Models\AboutusCertificate;
use App\Models\Team;

class AboutusPageController extends Controller
{
    // Aboutus page index
    public function index()
    {
        $experience = AboutusExperience::where('id', 1)->first();
        $certificate = AboutusCertificate::where('id', 1)->first();
        $teams = Team::all();

        return view('backend.pages.aboutus', compact(
            'experience', 'certificate', 'teams',
        ));
    }

    // Experience update
    public function experienceUpdate(Request $request)
    {
        $experience = AboutusExperience::where('id', 1)->first();

        if($request->image == NULL){
            $experience->title = $request->title;
            $experience->description = $request->description;
            $done = $experience->save();

            if($done){
                return redirect()->route('admin.aboutus.index')->with('success', 'Experience updated successfully...!');
            }else{
                return redirect()->route('admin.aboutus.index')->with('fail', 'Something went wrong, Please try again later...!');
            }

        }else{
            $experience->title = $request->title;
            $experience->description = $request->description;

            $oldImage = $experience->image;
            File::delete(public_path('images/'.$oldImage));
            $imageName = time().'.'.$request->image->extension();
            $experience->image = $imageName;
            $request->image->move(public_path('images/'), $imageName);

            $done = $experience->save();

            if($done){
                return redirect()->route('admin.aboutus.index')->with('success', 'Experience updated successfully...!');
            }else{
                return redirect()->route('admin.aboutus.index')->with('fail', 'Something went wrong, Please try again later...!');
            }
        }
    }

    // Certificate update
    public function certificateUpdate(Request $request)
    {
        $certificate = AboutusCertificate::where('id', 1)->first();
        $certificate->title = $request->title;
        $certificate->description = $request->description;
        // BG image
        if($request->image != NULL){
            $oldImage = $certificate->image;
            File::delete(public_path('images/'.$oldImage));
            $imageName = time().'.'.$request->image->extension();
            $certificate->image = $imageName;
            $request->image->move(public_path('images/'), $imageName);
        }
        // Certificate One
        if($request->certificateOne != NULL){
            $oldImage = $certificate->certificateOne;
            File::delete(public_path('images/'.$oldImage));
            $imageName = time().'.'.$request->certificateOne->extension();
            $certificate->certificateOne = $imageName;
            $request->certificateOne->move(public_path('images/'), $imageName);
        }
        // Certificate Two
        if($request->certificateTwo != NULL){
            $oldImage = $certificate->certificateTwo;
            File::delete(public_path('images/'.$oldImage));
            $imageName = time().'.'.$request->certificateTwo->extension();
            $certificate->certificateTwo = $imageName;
            $request->certificateTwo->move(public_path('images/'), $imageName);
        }
        // Certificate Three
        if($request->certificateThree != NULL){
            $oldImage = $certificate->certificateThree;
            File::delete(public_path('images/'.$oldImage));
            $imageName = time().'.'.$request->certificateThree->extension();
            $certificate->certificateThree = $imageName;
            $request->certificateThree->move(public_path('images/'), $imageName);
        }
        $done = $certificate->save();       
        if($done){
            return redirect()->route('admin.aboutus.index')->with('success', 'Certificate updated successfully...!');
        }else{
            return redirect()->route('admin.aboutus.index')->with('fail', 'Something went wrong, Please try again later...!');
        }
    }

    // Add team member
    public function addTeam(Request $request)
    {
        $team = new Team;
        $team->name = $request->name;
        $team->designation = $request->designation;
        $imageName = time().'.'.$request->image->extension();
        $team->image = $imageName;
        $request->image->move(public_path('images/'), $imageName);
        $done = $team->save();
        if($done){
            return redirect()->route('admin.aboutus.index')->with('success', 'New team member added successfully...!');
        }else{
            return redirect()->route('admin.aboutus.index')->with('fail', 'Something went wrong, Please try again later...!');
        }
    }

    // delete team member
    public function deleteTeam($id)
    {
        $team = Team::where('id', $id)->delete();
        if($team){
            return redirect()->route('admin.aboutus.index')->with('success', 'Team member deleted successfully...!');
        }else{
            return redirect()->route('admin.aboutus.index')->with('fail', 'Something went wrong, Please try again later...!');
        }
    }
}
