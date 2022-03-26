@extends('backend.layout.app')
    @section('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Products</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('admin.dashboard')}}">Dadhboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                {{-- Alert --}}
                @include('backend.layout.alert')

                {{-- Products --}}
                <div class="row">
                    <div class="col-12">
                        
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">Add New Product</h4>
                                        <form class="form-horizontal mt-4" action="{{route('admin.shop.addProduct')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
    
                                            <div class="form-group">
                                                <label for="name">Select Category</label>
                                                <select name="shop_category_id" class="form-control" required>
                                                    <option value="">--Select a category--</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Product Name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Product Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Product Price</label>
                                                <input type="text" id="price" name="price" class="form-control" placeholder="Product Price with symbol like $">
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Favorite</label>
                                                <input type="checkbox" id="favorite" name="favorite"> [Check if you want it to display on shop page]
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Product image</label>
                                                <input type="file" id="image" name="image" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="short_description">Short description</label>
                                                <textarea id="short_description" name="short_description" class="form-control" placeholder="Product Short Description" rows="5" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="long_description">Long description</label>
                                                <textarea id="long_description" name="long_description" class="form-control" placeholder="Product Long Description" rows="8" required></textarea>
                                            </div>
    
                                            <div class="form-group">
                                                <input type="submit" class="form-control btn btn-primary" value="Add New Product">
                                            </div>

                                        </form>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

                <div class="row">
                    <div class="col-12">

                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">List of Products</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Favorite</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @if (count($products) > 0)
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <th scope="row">{{$i}}</th>
                                                            <td>
                                                                <img src="{{asset('images/product/'. $product->image)}}" width="80px">
                                                            </td>
                                                            <td>{{$product->name}}</td>
                                                            <td>{{$product->shopCategory->name}}</td>
                                                            <td>{{$product->price ? $product->price : ''}}</td>
                                                            <td>
                                                                @if ($product->favorite == 1)
                                                                    Yes
                                                                @else
                                                                    No
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{route('admin.shop.deleteCategory', $product->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="7" align="middle">
                                                            No Product found
                                                        </td>
                                                    </tr>
                                                @endif
                                                
                                                
                                            </tbody>
                                        </table>
                                        {!! $products->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Developed by <a href="https://github.com/Tauh1dHasan/" target="_blank"><span class="text-danger">Tauhid Hasan</span></a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    @endsection