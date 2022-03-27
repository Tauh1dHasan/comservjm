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
                        <h4 class="page-title">Services</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
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

                {{-- Services --}}
                <div class="row">
                    <div class="col-12">
                        
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">Add New Service</h4>
                                        <form class="form-horizontal mt-4" action="{{route('admin.service.addService')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
    
                                            <div class="form-group">
                                                <label for="service_category_id">Select Service Category</label>
                                                <select name="service_category_id" class="form-control" required>
                                                    <option value="">--Select a category--</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Service Name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Service Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="header_image">Service Page Header Image</label>
                                                <input type="file" id="header_image" name="header_image" class="form-control" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="short_description">Short description</label>
                                                <textarea id="short_description" name="short_description" class="form-control" placeholder="Service Short Description" rows="5" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="long_description">Long description</label>
                                                <textarea id="long_description" name="long_description" class="form-control" placeholder="Product Long Description" rows="12" required></textarea>
                                                <script>
                                                    CKEDITOR.replace('long_description');
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label for="image1">Service image one</label>
                                                <input type="file" id="image1" name="image1" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="image2">Service image two</label>
                                                <input type="file" id="image2" name="image2" class="form-control">
                                            </div>
    
                                            <div class="form-group">
                                                <input type="submit" class="form-control btn btn-primary" value="Add New Service">
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
                                        <h4 class="text-center">List of Services</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Header Image</th>
                                                <th scope="col">Service Name</th>
                                                <th scope="col">Service Category</th>
                                                <th scope="col">Short Description</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @if (count($services) > 0)
                                                    @foreach ($services as $service)
                                                        <tr>
                                                            <th scope="row">{{$i}}</th>
                                                            <td>
                                                                <img src="{{asset('images/service/'. $service->header_image)}}" width="80px">
                                                            </td>
                                                            <td>{{$service->name}}</td>
                                                            <td>{{$service->serviceCategory->name}}</td>
                                                            <td>{{$service->short_description}}</td>
                                                            <td>
                                                                <a href="{{route('admin.service.deleteService', $service->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="7" align="middle">
                                                            No Service found
                                                        </td>
                                                    </tr>
                                                @endif
                                                
                                                
                                            </tbody>
                                        </table>
                                        {!! $services->links() !!}
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