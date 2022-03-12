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
                                    <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                                    <li class="breadcrumb-item active" aria-current="page">Main Slider</li>
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
                
                <div class="row">
                    <div class="col-12">
                       <h4 class="d-inline">Home Page Main Slider</h4>
                       <!-- Row -->
                       <div class="row" style="margin-top: 50px;">
                        @foreach ($sliders as $slider)
                            <!-- column -->
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="{{asset('images/mainSlider/' . $slider->image)}}" alt="Card image cap">
                                    <div class="card-body">
                                        <form action="{{route('admin.home.mainSliderUpdate')}}" method="post" class="form-group" enctype="multipart/form-data">
                                            @csrf
                                            {{-- Hidden --}}
                                            <input type="hidden" name="id" value="{{$slider->id}}">

                                            <label for="title">Title:</label>
                                            <input class="form-control mb-2" id="title" type="text" name="title" value="{{$slider->title}}" required>

                                            <label for="mainSlider">Slider Image:</label>
                                            <input class="form-control mb-2" id="mainSlider" type="file" name="mainSlider">

                                            <input class="btn btn-primary form-control" type="submit" value="Update">
                                        </form>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                        @endforeach
                          

                       </div>
                       <!-- Row -->
                       
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