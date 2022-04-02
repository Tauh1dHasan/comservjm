@extends('frontend.layout.app')

    @section('content')
        <main id="tt-pageContent">
            {{-- <div class="section-indent" style="margin-top: 0px;"">
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
            </div> --}}
            
                <div class="container container-md-fluid">
                    <div class="section-title max-width-01">
                        <div class="section-title__02">Our Services</div>
                    </div>
                    <div id="filter-nav">
                        <ul>
                            <li>
                                <a href="{{ route('frontend.services') }}">All</a>
                            </li>
                            @foreach ($serviceCats as $category)
                                <li>
                                    <a href="{{ route('frontend.serviceCategory', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="filter-layout" class="row justify-content-center tt-obj-wrapper">

                        @foreach ($services as $service)
                            <div class="col-sm-6 col-md-4 show filter-all filter-commercial">
                                <div class="tt-obj">
                                    <div class="tt-obj__img">
                                        <img style="max-height: 250px" src="{{asset('images/service/'.$service->header_image)}}">
                                    </div>
                                    <div class="tt-obj__wrapper">
                                        <div class="tt-obj__title">
                                            <a href="{{ route('frontend.serviceItem', $service->id) }}">{{ $service->name }}</a>
                                        </div>
                                        <p>{{ Str::substr($service->short_description, 0, 50) }}</p>
                                        <div class="row-btn">
                                            <a href="{{ route('frontend.serviceItem', $service->id) }}" class="tt-link">Read more
                                                <span class="icon-arrowhead-pointing-to-the-right-1"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    <div class="text-center tt-top-more02">
                        <a href="#" data-toggle="modal" data-target="#modalMakeAppointment" class="tt-btn btn__color01">
                            <span class="icon-lightning"></span>Shedule for Service
                        </a>
                    </div>

                </div>

        </main>
    @endsection