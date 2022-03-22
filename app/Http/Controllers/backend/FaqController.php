<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// used models
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        
        return view('backend.pages.faq', compact('faqs'));
    }

    // add new FAQ
    public function add(Request $request)
    {
        $faqs = Faq::all();
        $count = $faqs->count();
        if($count >= 8){
            return redirect()->route('admin.faq.index')->with('fail', 'Sorry...!!! Can not add more then Eight FAQ...!'); 
        }
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $done = $faq->save();
        if($done){
            return redirect()->route('admin.faq.index')->with('success', 'New FAQ added successfully...!');
        }else{
            return redirect()->route('admin.faq.index')->with('fail', 'Something went wrong, Pleaes try agains...!');
        }
    }

    // delete faq
    public function delete($id)
    {
        $faq = Faq::where('id', $id)->delete();
        return redirect()->route('admin.faq.index')->with('success', 'FAQ deleted successfully...!');
    }
}

