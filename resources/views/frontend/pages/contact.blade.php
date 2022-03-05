@extends('frontend.layout.app')

    @section('content')
    <main id="tt-pageContent">
        <div class="map-contact" id="map-contact"></div>
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
                                        <address>Electrician Company<br>8494 Signal Hill Road Manassas,<br>VA, 20110</address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="tt-contact">
                                    <div class="tt-icon">
                                        <i class="icon-clock-circular-outline-1"></i>
                                    </div>
                                    <div class="tt-content">
                                        <div class="tt-title">Work Hours:</div>Mon-Fri 08:00 AM - 05:00 PM<br>Sat-Sun: Emergency only
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
                                        <address><a href="tel:1(800)7654321">1 (800) 765-43-21 (Appointments)</a></address>
                                        <address><a href="tel:1(800)7654322">1 (800) 765-43-22 (Office)</a></address>
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
                    <div class="section-title__03">Are you stumped by a home wiring project or problem? Fill out the form with the details of your situation and we can come to your aid.</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form id="feedbackform" class="form-default" method="post" novalidate="novalidate" action="#">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Your e-mail address *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phonenumber" class="form-control" placeholder="Your phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="4" placeholder="Qustion In Detail *"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="tt-notes text-center">All Electrical work must be done by a qualified licensed electrician.</div>
                            </div>
                            <div class="form-group text-center">
                                <button class="tt-btn btn__color01" type="submit">
                                    <span class="icon-lightning"></span>Contact us
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection