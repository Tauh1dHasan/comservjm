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
                        <h4 class="page-title">Setting</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Setting</li>
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

                {{-- FAQ --}}
                <div class="row">
                    <div class="col-12">
                        
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">Setting</h4>
                                        <form class="form-horizontal mt-4" action="{{route('admin.setting.update')}}" method="POST">
                                            @csrf
    
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" id="address" name="address" class="form-control" value="{{$setting->address}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Work House</label>
                                                <input type="text" class="form-control" name="workhours" id="workhours" value="{{$setting->workhours}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone One</label>
                                                <input type="text" class="form-control" name="phone1" id="phone1" value="{{$setting->phone1}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone Two</label>
                                                <input type="text" class="form-control" name="phone2" id="phone2" value="{{$setting->phone2}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Footer Text</label>
                                                <textarea class="form-control" name="footer_text" id="footer_text" rows="5" required>{{$setting->footer_text}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" name="facebook" id="facebook" value="{{$setting->facebook}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control" name="insta" id="insta" value="{{$setting->insta}}" required>
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