<footer id="tt-footer">
    <div class="footer-wrapper">
        <div class="container container-lg-fluid container-lg__no-gutters">
            <div class="f-holder row no-gutters">
                <div class="col-xl-7">
                    <div class="additional-strut">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="f-logo">
                                    <a href="index.html" class="f-logo">
                                        <span>
                                            <img width="200px" src="{{asset('images/logo-dark.png')}}" alt="">
                                        </span>
                                    </a>
                                    <!-- /logo -->
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="f-info-text">{{$setting->footer_text}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-5">
                            <nav class="f-nav" id="f-nav">
                                <ul>
                                    <li><a href="{{route('frontend.home')}}">Home</a></li>
                                    <li><a href="{{route('frontend.gallery')}}">Gallery</a></li>
                                    <li><a href="{{route('frontend.about')}}">About Us</a></li>
                                    <li><a href="{{route('frontend.shop')}}">Shop</a></li>
                                    <li><a href="{{route('frontend.services')}}">Services</a></li>
                                    <li><a href="{{route('frontend.faq')}}">FAQ</a></li>
                                    <li><a href="{{route('frontend.contact')}}">Contacts</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-6 col-md-7">
                            <ul class="f-info-icon">
                                <li><span class="icon-map-marker"></span> {{$setting->address}}
                                </li>
                                <li><span class="icon-clock-circular-outline-1"></span> {{$setting->workhours}}
                                </li>
                                <li>
                                    <a href="tel:{{$setting->phone1}}">
                                        <span class="icon-telephone"></span> {{$setting->phone1}}
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:{{$setting->phone2}}">
                                        <span class="icon-telephone"></span> {{$setting->phone2}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25523.871526502386!2d-76.96638081559256!3d18.01841730918742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb12e1cd3d06dd%3A0x7eb9355f26bcf0dd!2sSpanish%20Town%2C%20Jamaica!5e0!3m2!1sen!2sbd!4v1648227800456!5m2!1sen!2sbd" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            {{-- <div id="map"></div> --}}
            
            
            <div class="f-copyright row no-gutters">
                <div class="col-sm-auto">&copy; Developed By <a href="https://github.com/Tauh1dHasan/" target="_blank"><span class="text-danger">Tauhid Hasan</span></a></div>
                <div class="col-sm-auto ml-sm-auto">
                    <ul class="f-social">
                        <li>
                            <a href="#" class="icon-facebook-logo-button"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-instagram-logo"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script async src="{{asset('js/bundle.js')}}"></script>
<!-- modal - Make an Appointment -->
<div class="modal fade" id="modalMakeAppointment" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body form-default modal-layout-dafault">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="icon-860796"></span>
                </button>
                <div class="modal-titleblock">
                    <div class="modal-title">Make an Appointment</div>
                </div>
                <form class="form-modal" method="post" action="{{route('admin.userResponse.store')}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="modalName01" placeholder="Your Name *" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="modalEmail01" placeholder="Your e-mail address ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="modalPhone01" placeholder="Your phone number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input name="select_date" placeholder="Date of visit" autocomplete="off" data-timepicker="true" class="js_datepicker-1 form-control" type="text">
                        <div class="form-group__icon icon-747993"></div>
                    </div>
                    <div class="form-group">
                        <textarea name="comment" class="form-control" placeholder="Your comment"></textarea>
                    </div>
                    <button type="submit" class="tt-btn btn__color01">
                        <span class="icon-lightning"></span>Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<a href="#" id="js-backtotop" class="tt-back-to-top">
    <i class="icon-lightning"></i>
</a>
</body>

</html>