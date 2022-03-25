@extends('frontend.layout.app')

    @section('content')
        <main id="tt-pageContent">
            <div class="section-indent" style="margin-top: 0px;"">
                <div class="container container-lg-fluid">
                    <div class="layout01 layout01__single-img">
                        <div class="layout01__bg-marker">
                            <img src="{{asset('images/bg_marker02.png')}}" alt="">
                        </div>
                        <div class="layout01__img">
                            <div class="tt-img-main">
                                <img src="{{asset('images/layout01-img05.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="layout01__content">
                            <div class="layout01__content-wrapper">
                                <div class="section-title text-left">
                                    <div class="section-title__01">Why Us ?</div>
                                    <div class="section-title__02">Responsive &amp; Professional</div>
                                </div>
                                <p>We go the extra mile on every project. The value we provide clients comes from our level of skill and performance, as well as our knowledge and professionalism. Rest assured, we put the same level of energy into every project
                                    we take on.</p>
                                <div class="tt-info tt-info__top">
                                    <div class="tt-info__title">Call us today</div>
                                    <address>
                                        <a href="tel:1(800)7654321">
                                            <i class="tt-icon icon-telephone"></i>	1 (800) 765-43-21
                                        </a>
                                    </address>We’re available 24/7, 365 days a year.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="container container-md-fluid">
                    <div class="section-title max-width-01">
                        <div class="section-title__02">What We Offer</div>
                    </div>
                    <div id="filter-nav">
                        <ul>
                            <li class="active"><a class="gallery-navitem" href="#">All</a></li>
                            <li><a class="gallery-navitem" href="#">Commercial Services</a></li>
                            <li><a class="gallery-navitem" href="#">Industrial Services</a></li>
                            <li><a class="gallery-navitem" href="#">Residential Services</a></li>
                        </ul>
                    </div>
                    <div id="filter-layout" class="row justify-content-center tt-obj-wrapper">
                        <div class="col-sm-6 col-md-4 show filter-all filter-commercial">
                            <div class="tt-obj">
                                <div class="tt-obj__img">
                                    <img src="{{asset('images/obj-img01.jpg')}}" alt="">
                                </div>
                                <div class="tt-obj__wrapper">
                                    <div class="tt-obj__title"><a href="services-item.html">Electrical Repairs</a></div>
                                    <p>Electrical repairs should always be handled by a professional electrician.</p>
                                    <div class="row-btn"><a href="services-item.html" class="tt-link">Read more<span class="icon-arrowhead-pointing-to-the-right-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 show filter-all filter-commercial">
                            <div class="tt-obj">
                                <div class="tt-obj__img"><img src="{{asset('images/obj-img02.jpg')}}" alt=""></div>
                                <div class="tt-obj__wrapper">
                                    <div class="tt-obj__title"><a href="services-item.html">Panel Upgrades</a></div>
                                    <p>Electrical panel maintenance, therefore, should be part of your regular routine.</p>
                                    <div class="row-btn"><a href="services-item.html" class="tt-link">Read more<span class="icon-arrowhead-pointing-to-the-right-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 show filter-all filter-commercial">
                            <div class="tt-obj">
                                <div class="tt-obj__img"><img src="{{asset('images/obj-img03.jpg')}}" alt=""></div>
                                <div class="tt-obj__wrapper">
                                    <div class="tt-obj__title"><a href="services-item.html">Lighting Upgrades</a></div>
                                    <p>Lighting can enhance and change the mood, the look and feel of any room or space.</p>
                                    <div class="row-btn"><a href="services-item.html" class="tt-link">Read more<span class="icon-arrowhead-pointing-to-the-right-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 show filter-all filter-industrial">
                            <div class="tt-obj">
                                <div class="tt-obj__img"><img src="{{asset('images/obj-img04.jpg')}}" alt=""></div>
                                <div class="tt-obj__wrapper">
                                    <div class="tt-obj__title"><a href="services-item.html">Surge Protection</a></div>
                                    <p>An electrical surge can happen for a number of reasons, including lightning strikes.</p>
                                    <div class="row-btn"><a href="services-item.html" class="tt-link">Read more<span class="icon-arrowhead-pointing-to-the-right-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 show filter-all filter-industrial">
                            <div class="tt-obj">
                                <div class="tt-obj__img"><img src="{{asset('images/obj-img05.jpg')}}" alt=""></div>
                                <div class="tt-obj__wrapper">
                                    <div class="tt-obj__title"><a href="services-item.html">Generator Repair</a></div>
                                    <p>Generators are a great way to protect your home or business from brownouts and power outages.</p>
                                    <div class="row-btn"><a href="services-item.html" class="tt-link">Read more<span class="icon-arrowhead-pointing-to-the-right-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 show filter-all filter-industrial">
                            <div class="tt-obj">
                                <div class="tt-obj__img"><img src="{{asset('images/obj-img06.jpg')}}" alt=""></div>
                                <div class="tt-obj__wrapper">
                                    <div class="tt-obj__title"><a href="services-item.html">Install a Ceiling Fan</a></div>
                                    <p>If you need a ceiling fan installed, repaired, or updated, our electricians are ready to help you.</p>
                                    <div class="row-btn"><a href="services-item.html" class="tt-link">Read more<span class="icon-arrowhead-pointing-to-the-right-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 show filter-all filter-residentiar">
                            <div class="tt-obj">
                                <div class="tt-obj__img"><img src="{{asset('images/obj-img07.jpg')}}" alt=""></div>
                                <div class="tt-obj__wrapper">
                                    <div class="tt-obj__title"><a href="services-item.html">Outdoor and Motion Lighting</a></div>
                                    <p>Outdoor Lighting can transform your outdoor living space completely.</p>
                                    <div class="row-btn"><a href="services-item.html" class="tt-link">Read more<span class="icon-arrowhead-pointing-to-the-right-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 show filter-all filter-residentiar">
                            <div class="tt-obj">
                                <div class="tt-obj__img"><img src="{{asset('images/obj-img08.jpg')}}" alt=""></div>
                                <div class="tt-obj__wrapper">
                                    <div class="tt-obj__title"><a href="services-item.html">Digital Thermostat Installation</a></div>
                                    <p>Give us a call to plan your Digital Thermostat Installation today.</p>
                                    <div class="row-btn"><a href="services-item.html" class="tt-link">Read more<span class="icon-arrowhead-pointing-to-the-right-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 show filter-all filter-residentiar">
                            <div class="tt-obj">
                                <div class="tt-obj__img"><img src="{{asset('images/obj-img09.jpg')}}" alt=""></div>
                                <div class="tt-obj__wrapper">
                                    <div class="tt-obj__title"><a href="services-item.html">Baseboard Heating Installation</a></div>
                                    <p>Baseboard heaters are one of the easiest systems to operate.</p>
                                    <div class="row-btn"><a href="services-item.html" class="tt-link">Read more<span class="icon-arrowhead-pointing-to-the-right-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center tt-top-more02">
                        <a href="#" data-toggle="modal" data-target="#modalMakeAppointment" class="tt-btn btn__color01">
                            <span class="icon-lightning"></span>Shedule for Service
                        </a>
                    </div>
                </div>
            </div>
        </main>
    @endsection