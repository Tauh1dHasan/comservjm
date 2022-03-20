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
                        <h4 class="page-title">Aboutus Page</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Aboutus Page</li>
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

                {{-- Experience Section --}}
                <div class="row">
                    <div class="col-12">
                        
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">Experience section</h4>
                                        <form class="form-horizontal mt-4" action="{{route('admin.aboutus.experienceUpdate')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
    
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" name="title" class="form-control" value="{{$experience->title}}" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Experience Description</label>
                                                <textarea class="form-control" name="description" id="description" rows="5" required>{{$experience->description}}</textarea>
                                                <script>
                                                    CKEDITOR.replace('description');
                                                </script>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Image</label>
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


                {{-- Certificate Section --}}
                <div class="row">
                    <div class="col-12">
                        
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">Certificate section</h4>
                                        <form class="form-horizontal mt-4" action="{{route('admin.aboutus.certificateUpdate')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
    
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" name="title" class="form-control" value="{{$certificate->title}}" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Certificate Description</label>
                                                <textarea class="form-control" name="description" id="descriptionCertificate" rows="5" required>{{$certificate->description}}</textarea>
                                                <script>
                                                    CKEDITOR.replace('descriptionCertificate');
                                                </script>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>

                                            <div class="form-group">
                                                <label>Certificate One</label>
                                                <input type="file" class="form-control" name="certificateOne">
                                            </div>

                                            <div class="form-group">
                                                <label>Certificate Two</label>
                                                <input type="file" class="form-control" name="certificateTwo">
                                            </div>

                                            <div class="form-group">
                                                <label>Certificate Three</label>
                                                <input type="file" class="form-control" name="certificateThree">
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


                <div class="row">
                    <div class="col-12">
                        
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-8 offset-lg-2 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="text-center">Add Team Member</h4>
                                        <form class="form-horizontal mt-4" action="{{route('admin.aboutus.addTeam')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
    
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Team Member Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="designation">Designation</label>
                                                <input type="text" id="designation" name="designation" class="form-control" placeholder="Designation" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
    
                                            <div class="form-group">
                                                <input type="submit" class="form-control btn btn-primary" value="Add New">
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
                                        <h4 class="text-center">List of Team Members</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @if (count($teams) > 0)
                                                    @foreach ($teams as $item)
                                                        <tr>
                                                            <th scope="row">{{$i}}</th>
                                                            <td>
                                                                <img src="{{asset('images/'.$item->image)}}" alt="{{$item->name}}" width="80px">
                                                            </td>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->designation}}</td>
                                                            <td>
                                                                <a href="{{route('admin.aboutus.deleteTeam', $item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="5" align="middle">
                                                            No Team member found
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