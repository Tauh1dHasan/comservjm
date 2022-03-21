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
                        <h4 class="page-title">Gallery</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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

                {{-- Gallery --}}
                <div class="row">
                    <div class="col-12">
                        
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">Gallery</h4>
                                        <form class="form-horizontal mt-4" action="{{route('admin.gallery.update')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
    
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" name="title" class="form-control" value="{{$gallery->title}}" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Gallery Description</label>
                                                <textarea class="form-control" name="description" id="description" rows="5" required>{{$gallery->description}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Add New Image</label>
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

                {{-- Slider Section --}}
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <h4 class="text-center">Gallery Images</h4>
                                <!-- Row -->
                                <div class="row" style="margin-top: 50px;">
                                    
                                    @foreach ($images as $image)
                                        <!-- column -->
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <!-- Card -->
                                            <div class="card">
                                                <img class="card-img-top img-responsive" src="{{asset('images/gallery/' . $image->image)}}">
                                                <div class="card-body">
                                                    <form action="{{route('admin.gallery.delete')}}" method="post">
                                                        @csrf
                                                        {{-- Hidden --}}
                                                        <input type="hidden" name="id" value="{{$image->id}}">

                                                        <input class="btn btn-danger form-control" type="submit" value="Delete">
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Card -->
                                        </div>
                                        <!-- column -->
                                    @endforeach

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