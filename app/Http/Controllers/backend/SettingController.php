<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::where('id', 1)->first();
        return view('backend.pages.setting', compact('setting'));
    }

    // update
    public function update(Request $request)
    {
        $setting = Setting::where('id', 1)->first();
        $setting->address = $request->address;
        $setting->workhours = $request->workhours;
        $setting->phone1 = $request->phone1;
        $setting->phone2 = $request->phone2;
        $setting->footer_text = $request->footer_text;
        $setting->facebook = $request->facebook;
        $setting->insta = $request->insta;
        $setting->save();
        return redirect()->route('admin.setting.index')->with('success', 'Setting updated successfully');
    }
}
