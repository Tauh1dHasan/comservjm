<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Used Models
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    public function categories()
    {
        $categories = ServiceCategory::all();

        return view('backend.pages.serviceCategories', compact('categories'));
    }

    // Add new category
    public function addCategory(Request $request)
    {
        $category = new ServiceCategory;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.service.categories')->with('success', 'Service Category added successfully...!');
    }

    // Delete category
    public function deleteCategory($id)
    {
        $category = ServiceCategory::where('id', $id)->delete();
        return redirect()->route('admin.service.categories')->with('success', 'Service Category deleted successfully...!');
    }
}
