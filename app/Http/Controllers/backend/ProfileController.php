<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Profile controller
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('backend.pages.profile', compact('user'));
    }

    // Profile update
    public function update(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        if($request->password != NULL){
            $user->password = Hash::make($request->password);
        }
        $user->email = $user->email;
        $user->save();
        return redirect()->route('admin.profile.index')->with('success', 'Profile information updated successfully...!');
    }
}
