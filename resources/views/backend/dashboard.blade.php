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
                        <h4 class="page-title">Dashboard</h4>
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
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card-body">
                                    <h4 class="text-center">Pages</h4>
                                </div>
                                <div class="card-group">
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a href="{{route('admin.home.homePage')}}">
                                                        <span class="btn btn-circle btn-lg bg-danger">
                                                            <i class="ti-file text-white"></i>
                                                        </span>
                                                        <span style="font-size: 1.5em; font-weight: 500;">Home</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a href="{{route('admin.aboutus.index')}}">
                                                        <span class="btn btn-circle btn-lg bg-primary">
                                                            <i class="ti-file text-white"></i>
                                                        </span>
                                                        <span style="font-size: 1.5em; font-weight: 500;">About Us</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a href="{{route('admin.service.index')}}">
                                                        <span class="btn btn-circle btn-lg bg-success">
                                                            <i class="ti-file text-white"></i>
                                                        </span>
                                                        <span style="font-size: 1.5em; font-weight: 500;">Services</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a href="{{route('admin.gallery.index')}}">
                                                        <span class="btn btn-circle btn-lg bg-warning">
                                                            <i class="ti-file text-white"></i>
                                                        </span>
                                                        <span style="font-size: 1.5em; font-weight: 500;">Gallery</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Column -->
                                </div>
                                <div class="card-group">
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a href="{{route('admin.faq.index')}}">
                                                        <span class="btn btn-circle btn-lg bg-warning">
                                                            <i class="ti-file text-white"></i>
                                                        </span>
                                                        <span style="font-size: 1.5em; font-weight: 500;">FAQ</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a href="{{route('admin.setting.index')}}">
                                                        <span class="btn btn-circle btn-lg bg-danger">
                                                            <i class="ti-file text-white"></i>
                                                        </span>
                                                        <span style="font-size: 1.5em; font-weight: 500;">Setting</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a href="{{route('admin.setting.index')}}">
                                                        <span class="btn btn-circle btn-lg bg-success">
                                                            <i class="icon-Shop-2 text-white"></i>
                                                        </span>
                                                        <span style="font-size: 1.5em; font-weight: 500;">Shop</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <a href="{{route('admin.userResponse.index')}}">
                                                        <span class="btn btn-circle btn-lg bg-primary">
                                                            <i class="icon-Inbox-Into text-white"></i>
                                                        </span>
                                                        <span style="font-size: 1.5em; font-weight: 500;">User Responses</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">

                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">Latest User Responses</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Request Date</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @if (count($responses) > 0)
                                                    @foreach ($responses as $response)
                                                        <tr>
                                                            <th scope="row">{{$i}}</th>
                                                            <td>{{$response->name ? $response->name : ''}}</td>
                                                            <td>{{$response->email ? $response->email : ''}}</td>
                                                            <td>{{$response->phone ? $response->phone : ''}}</td>
                                                            <td>{{$response->address ? $response->address : ''}}</td>
                                                            <td>{{$response->select_date ? $response->select_date : ''}}</td>
                                                            <td>{{$response->comment ? $response->comment : ''}}</td>
                                                            <td>{{date('d/M/y', strtotime($response->created_at)) }}</td>
                                                            <td>
                                                                <a href="{{route('admin.userResponse.delete', $response->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="7" align="middle">
                                                            No Response found
                                                        </td>
                                                    </tr>
                                                @endif
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
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