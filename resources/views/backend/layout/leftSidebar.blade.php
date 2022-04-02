<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        {{-- Home page --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.home.homePage')}}">
                                <i class="icon-Home-4"></i>
                                <span class="hide-menu">Home </span>
                            </a>
                        </li>

                        {{-- About Us page --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.aboutus.index')}}">
                                <i class="icon-File-Fire"></i>
                                <span class="hide-menu">About Us </span>
                            </a>
                        </li>
                        {{-- /About Us page --}}

                        {{-- Services page --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-File-Fire"></i>
                                <span class="hide-menu">Services</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('admin.service.categories')}}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Service Categories</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('admin.service.index')}}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Services</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- /Services --}}

                        {{-- Gallery page --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.gallery.index')}}">
                                <i class="icon-File-Fire"></i>
                                <span class="hide-menu">Gallery</span>
                            </a>
                        </li>
                        {{-- /Gallery --}}

                        {{-- FAQ page --}}
                        <li class="sidebar-item">
                            <a href="{{route('admin.faq.index')}}" class="sidebar-link">
                                <i class="icon-Record"></i>
                                <span class="hide-menu">FAQ</span>
                            </a>
                        </li>
                        {{-- /FAQ page --}}

                        {{-- Setting --}}
                        <li class="sidebar-item">
                            <a href="{{route('admin.setting.index')}}" class="sidebar-link">
                                <i class="icon-File-Fire"></i>
                                <span class="hide-menu">Setting</span>
                            </a>
                        </li>
                        {{-- /Setting --}}

                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Shop</span>
                        </li>

                        {{-- Shop --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Shop-2"></i>
                                <span class="hide-menu">Shop</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('admin.shop.categories')}}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Categories</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('admin.shop.products')}}" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu">Products</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- /Shop --}}

                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Visitor Response</span>
                        </li>

                        {{-- Visitor responses --}}
                        <li class="sidebar-item">
                            <a href="index.html" class="sidebar-link">
                                <i class="icon-Inbox-Into"></i>
                                <span class="hide-menu">All responses</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Profile</span>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{route('admin.profile.index')}}" class="sidebar-link">
                                <i class="fa fa-user"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->