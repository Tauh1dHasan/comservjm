<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Used Models
use App\Models\ServiceCategory;
use App\Models\Service;
use File;

class ServiceController extends Controller
{
    // Service index page
    public function index()
    {
        $categories = ServiceCategory::all();
        $services = Service::with('serviceCategory')->latest()->paginate(20);
        return view('backend.pages.service', compact('categories', 'services'));
    }
    // add new service
    public function addService(Request $request)
    {
        $service = new Service;
        $service->service_category_id = $request->service_category_id;
        $service->name = $request->name;

        $header_image = time().".header_image.".$request->header_image->extension();
        $service->header_image = $header_image;
        $request->header_image->move(public_path('images/service/'), $header_image);

        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;

        $image1 = time().".image1.".$request->image1->extension();
        $service->image1 = $image1;
        $request->image1->move(public_path('images/service/'), $image1);

        $image2 = time().".image2.".$request->image2->extension();
        $service->image2 = $image2;
        $request->image2->move(public_path('images/service/'), $image2);

        $service ->save();

        return redirect()->route('admin.service.index')->with('success', 'New Service added successfully...!');
    }

    // delete service
    public function deleteService($id)
    {
        $service = Service::where('id', $id)->first();

        $header_image = $service->header_image;
        File::delete(public_path('images/service/'.$header_image));

        $image1 = $service->image1;
        File::delete(public_path('images/service/'.$image1));

        $image2 = $service->image2;
        File::delete(public_path('images/service/'.$image2));

        $service->delete();
        return redirect()->route('admin.service.index')->with('success', 'Service deleted successfully...!');
    }

    // Category index page
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
