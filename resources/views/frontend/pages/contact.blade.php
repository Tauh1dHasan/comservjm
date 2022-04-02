@extends('frontend.layout.app')

    @section('content')
    <main id="tt-pageContent">
        {{-- <div class="map-contact" id="map-contact"></div> --}}
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25523.871526502386!2d-76.96638081559256!3d18.01841730918742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb12e1cd3d06dd%3A0x7eb9355f26bcf0dd!2sSpanish%20Town%2C%20Jamaica!5e0!3m2!1sen!2sbd!4v1648227800456!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
            <div class="section-indent-extra">
                <div class="container container-lg-fluid">
                    <div class="section__wrapper02 tt-contact-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-md-4">
                                <div class="tt-contact">
                                    <div class="tt-icon">
                                        <i class="icon-map-marker"></i>
                                    </div>
                                    <div class="tt-content">
                                        <div class="tt-title">Address:</div>
                                        <address>{{$setting->address}}</address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="tt-contact">
                                    <div class="tt-icon">
                                        <i class="icon-clock-circular-outline-1"></i>
                                    </div>
                                    <div class="tt-content">
                                        <div class="tt-title">Work Hours:</div>{{$setting->workhours}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="tt-contact">
                                    <div class="tt-icon">
                                        <i class="icon-telephone"></i>
                                    </div>
                                    <div class="tt-content">
                                        <div class="tt-title">Phone Numbers:</div>
                                        <address><a href="tel:1(800)7654321">{{$setting->phone1}}</a></address>
                                        <address><a href="tel:1(800)7654322">{{$setting->phone2}}</a></address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-indent">
            <div class="container container-md-fluid">
                <div class="section-title max-width-01">
                    <div class="section-title__01">Contact Form</div>
                    <div class="section-title__02">Get In Touch with Us</div>
                    <div class="section-title__03">Are you stumped by a netwark wiring project or problem? Fill out the form with the details of your situation and we can come to your aid.</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form class="form-default" method="post" novalidate="novalidate" action="{{route('admin.userResponse.store')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your e-mail address *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Your phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="comment" class="form-control" rows="4" placeholder="Qustion In Detail *"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="tt-notes text-center">All wiring work must be done by a qualified licensed electrician.</div>
                            </div>
                            <div class="form-group text-center">
                                <button class="tt-btn btn__color01" type="submit">
                                    <span class="icon-lightning"></span>Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection