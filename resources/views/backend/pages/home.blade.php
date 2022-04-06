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
                        <h4 class="page-title">Home Page</h4>
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

                {{-- Slider Section --}}
                <div class="row">
                    <div class="col-12">
                       <h4 class="text-center">Main Slider</h4>
                       <!-- Row -->
                       <div class="row" style="margin-top: 50px;">
                        @foreach ($sliders as $slider)
                            <!-- column -->
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="{{asset('images/mainSlider/' . $slider->image)}}">
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
                <!-- Row -->


                {{-- About us Section --}}
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center">About Us section</h4>
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form-horizontal mt-4" action="{{route('admin.home.aboutusUpdate')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
    
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" name="title" class="form-control" value="{{$aboutUs->title}}" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>About us Description</label>
                                                <textarea class="form-control ckeditor" name="description" id="description" rows="5" required>{{$aboutUs->description}}</textarea>
                                                <script>
                                                    CKEDITOR.replace('description');
                                                </script>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>About us Image</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
    
                                            <div class="form-group">
                                                <input type="submit" class="form-control btn btn-primary" value="Update">
                                            </div>
    
                                        </form>
                                   </div>
                                </div>
                            </div>
                         </div>
                    </div>
                 </div>
                 <!-- Row -->


                {{-- Hilight Section --}}
                <div class="row">
                    <div class="col-12">
                       <h4 class="text-center">Service Highlight</h4>
                       <!-- Row -->
                       <div class="row" style="margin-top: 50px;">
                        @foreach ($highlights as $highlight)
                            <!-- column -->
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="{{asset('images/' . $highlight->image)}}">
                                    <div class="card-body">
                                        <form action="{{route('admin.home.highlightUpdate')}}" method="post" class="form-group" enctype="multipart/form-data">
                                            @csrf
                                            {{-- Hidden --}}
                                            <input type="hidden" name="id" value="{{$highlight->id}}">

                                            <label for="title">Title:</label>
                                            <input class="form-control mb-2" id="title" type="text" name="title" value="{{$highlight->title}}" required>

                                            <label for="description">Description:</label>
                                            <textarea class="form-control mb-2" id="description" type="text" name="description" required>{{$highlight->description}}</textarea>

                                            <label for="image">Image:</label>
                                            <input class="form-control mb-2" id="image" type="file" name="image">

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
                <!-- Row -->

                {{-- Offer Section --}}
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center">Offer section</h4>
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form-horizontal mt-4" action="{{route('admin.home.offerUpdate')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
    
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" name="title" class="form-control" value="{{$offer->title}}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="phone_number">Phone Number</label>
                                                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{$offer->phone_number}}" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" id="offerDescription" rows="5" required>{{$offer->description}}</textarea>
                                                <script>
                                                    CKEDITOR.replace('offerDescription');
                                                </script>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Background Image</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
    
                                            <div class="form-group">
                                                <input type="submit" class="form-control btn btn-primary" value="Update">
                                            </div>
    
                                        </form>
                                   </div>
                                </div>
                            </div>
                         </div>
                    </div>
                 </div>
                 <!-- Row -->

                {{-- Hilight Section --}}
                <div class="row">
                    <div class="col-12">
                       {{-- <h4 class="text-center">Statistics</h4> --}}
                       <!-- Row -->
                       <div class="row" style="margin-top: 50px;">
                            <!-- column -->
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <h4 class="text-center">Statistics</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('admin.home.statisticUpdate')}}" method="post" class="form-group" enctype="multipart/form-data">
                                            @csrf
                                            {{-- Hidden --}}
                                            <input type="hidden" name="id" value="{{$statistic->id}}">

                                            <label for="title">Title:</label>
                                            <input class="form-control mb-2" id="title" type="text" name="title" value="{{$statistic->title}}" required>

                                            <label for="residential">Residential Projects:</label>
                                            <input class="form-control mb-2" id="residential" type="number" name="residential" value="{{$statistic->residential}}" required>

                                            <label for="commercial">Commercial Projects:</label>
                                            <input class="form-control mb-2" id="commercial" type="number" name="commercial" value="{{$statistic->commercial}}" required>

                                            <label for="industrial">Industrial Projects:</label>
                                            <input class="form-control mb-2" id="industrial" type="number" name="industrial" value="{{$statistic->industrial}}" required>

                                            <label for="image">Image:</label>
                                            <input class="form-control mb-2" id="image" type="file" name="image">

                                            <input class="btn btn-primary form-control" type="submit" value="Update">
                                        </form>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <h4 class="text-center">Add Testimonial</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('admin.home.addTestimonial')}}" method="post" class="form-group" enctype="multipart/form-data">
                                            @csrf

                                            <label for="title">Title:</label>
                                            <input class="form-control mb-2" id="title" type="text" name="title" placeholder="Testimonial Title" required>

                                            <label for="description">Description:</label>
                                            <textarea class="form-control mb-2" id="description" type="text" name="description" placeholder="Testimonial Description" required></textarea>

                                            <label for="name">Name:</label>
                                            <input class="form-control mb-2" id="name" type="text" name="name" placeholder="Testimonial By" required>

                                            <label for="image">Image:</label>
                                            <input class="form-control mb-2" id="image" type="file" name="image">

                                            <input class="btn btn-primary form-control" type="submit" value="Update">
                                        </form>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                            <!-- column -->
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <h4 class="text-center">All Testimonials</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table">
                                            <tr>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($testimonials as $testimonial)
                                                <tr>
                                                    <td>{{$testimonial->title}}</td>
                                                    <td>
                                                        <a href="{{route('admin.home.deleteTestimonial',$testimonial->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            
                                        </table>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->

                        </div>
                        <!-- Row -->
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