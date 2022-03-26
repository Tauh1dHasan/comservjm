<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Used Models
use App\Models\ShopCategory;
use App\Models\Product;

class ShopController extends Controller
{
    public function categories()
    {
        $categories = ShopCategory::all();
        return view('backend.pages.shopCategories', compact('categories'));
    }

    // Add new category
    public function addCategory(Request $request)
    {
        $category = new ShopCategory;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.shop.categories')->with('success', 'New Category Added Successfully...!');
    }

    // Delete category
    public function deleteCategory($id)
    {
        $category = ShopCategory::where('id', $id)->delete();
        return redirect()->route('admin.shop.categories')->with('success', 'Category Deleted Successfully...!');
    }
}
