<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserResponse;

class UserResponseController extends Controller
{
    public function index()
    {
        $responses = UserResponse::orderBy('id', 'DESC')->latest()->paginate(20);
        return view('backend.pages.userResponse', compact('responses'));
    }

    // Store public query/response
    public function store(Request $request)
    {
        $response = new UserResponse;
        $response->name = $request->name;
        $response->email = $request->email;
        $response->phone = $request->phone;
        $response->select_date = $request->select_date;
        $response->address = $request->address;
        $response->comment = $request->comment;
        $response->status = 1;

        $response->save();
        return redirect()->route('frontend.home')->with('success', 'Thank you for response, We will get back to you as soon as possible.');
    }

    public function delete($id)
    {
        UserResponse::where('id', $id)->delete();
        return redirect()->route('admin.userResponse.index')->with('success', 'User Response deleted...!');
    }
}
