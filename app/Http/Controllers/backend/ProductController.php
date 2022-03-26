<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
// used modles
use App\Models\Product;
use App\Models\ShopCategory;

class ProductController extends Controller
{
    public function products()
    {
        $categories = ShopCategory::all();
        $products = Product::all();
        return view('backend.pages.products', compact('categories', 'products'));
    }

    // Add new product
    public function addProduct(Request $request)
    {
        $product = new Product;
        $product->shop_category_id = $request->shop_category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->favorite = $request->favorite;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $imageName = time().'.'.$request->image->extension();
        $product->image = $imageName;
        $request->image->move(public_path('images/product/'), $imageName);
        $product->save();
        return redirect()->route('admin.shop.products')->with('success', 'New Product Added Successfully...!');
    }

    // Delete product
    public function deleteProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $oldImage = $product->image;
        File::delete(public_path('images/product/'.$oldImage));
        $product->delete();
        return redirect()->route('admin.shop.products')->with('success', 'Product Deleted Successfully...!');
    }
}
