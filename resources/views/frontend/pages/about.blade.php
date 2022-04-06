@extends('frontend.layout.app')
    @section('content')
        <main id="tt-pageContent">
            <div class="section-indent" style="margin-top: 0px;">
                <div class="container container-lg-fluid">
                    <div class="layout01 layout01__revers layout01__small-layout layout01__img-more">
                        
                        <div class="layout01__img">
                            <div class="tt-img-main">
                                <img src="{{asset('images/'.$experience->image)}}">
                            </div>
                        </div>

                        <div class="layout01__content">
                            <div class="layout01__content-wrapper">
                                <div class="section-title text-left">
                                    <div class="section-title__01">Experience</div>
                                    <div class="section-title__02">{{$experience->title}}</div>
                                </div>
                                <div class="ck">
                                    {!! $experience->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="layout01-fluid">
                    <div class="layout01__img" style="background-image: url('{{asset('images/'.$certificate->image)}}')"></div>
                    <div class="container container-lg-fluid">
                        <div class="layout01__content">
                            <div class="layout01__content-wrapper">
                                <div class="section-title text-left">
                                    <div class="section-title__01">Certificates</div>
                                    <div class="section-title__02">{{$certificate->title}}</div>
                                </div>
                                <div class="ck">

                                    {!! $certificate->description !!}
                                </div>
                                <ul class="js-wrapper-gallery gallery01 gallery01-top">
                                    <li>
                                        <a style="max-width:200px;" class="tt-gallery" href="{{asset('images/'.$certificate->certificateOne)}}">
                                            <img src="{{asset('images/'.$certificate->certificateOne)}}">
                                        </a>
                                    </li>
                                    <li>
                                        <a style="max-width:200px;" class="tt-gallery" href="{{asset('images/'.$certificate->certificateTwo)}}">
                                            <img src="{{asset('images/'.$certificate->certificateTwo)}}">
                                        </a>
                                    </li>
                                    <li>
                                        <a style="max-width:200px;" class="tt-gallery" href="{{asset('images/'.$certificate->certificateThree)}}">
                                            <img src="{{asset('images/'.$certificate->certificateThree)}}">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="container container-lg-fluid">
                    <div class="section-title max-width-01">
                        <div class="section-title__01">Our Advantages</div>
                        <div class="section-title__02">Reasons You Should Call Us</div>
                        {{-- <div class="section-title__03">Electrician is your single source for a complete range of high-quality electrical services, including design/build, engineering and maintenance.</div> --}}
                    </div>
                    <div class="row tt-services-promo__list justify-content-center">
                        <div class="col-sm-6 col-lg-4 tt-item">
                            <div class="tt-services-promo">
                                <div class="tt-value tt-value__indent">1</div>
                                <div class="tt-wrapper">
                                    <div class="tt-col-icon icon-hours"></div>
                                    <div class="tt-col-layout">
                                        <div class="tt-title">24/7 Emergency Services</div>
                                        <p>24/7 emergency service you can trust.</p>
                                    </div>
                                </div>
                                <div class="tt-bg-marker"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 tt-item">
                            <div class="tt-services-promo">
                                <div class="tt-value">2</div>
                                <div class="tt-wrapper">
                                    <div class="tt-col-icon icon-tool2"></div>
                                    <div class="tt-col-layout">
                                        <div class="tt-title">Free Estimates</div>
                                        <p>Yes, we offer free estimates for your personal project.</p>
                                    </div>
                                </div>
                                <div class="tt-bg-marker"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 tt-item">
                            <div class="tt-services-promo">
                                <div class="tt-value">3</div>
                                <div class="tt-wrapper">
                                    <div class="tt-col-icon icon-price-tag"></div>
                                    <div class="tt-col-layout">
                                        <div class="tt-title">Low Price Guarantee</div>
                                        <p>We strive to offer the lowest price on the market.</p>
                                    </div>
                                </div>
                                <div class="tt-bg-marker"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-indent">
                <div class="container container-lg-fluid">
                    <div class="section-title max-width-01">
                        <div class="section-title__01">Our Team</div>
                        <div class="section-title__02">Fully Qualified Experts</div>
                        {{-- <div class="section-title__03">All our personnel operate within an Integrated Management System to ensure the delivery of services that are at an exception level of quality, reliability, and value</div> --}}
                    </div>
                    <div class="tt-box05_wrapper row slick-type01 slick-type01" data-slick='{
                        "slidesToShow": 3,
                        "slidesToScroll": 2,
                        "responsive": [
                            {
                                "breakpoint": 750,
                                "settings": {
                                    "slidesToShow": 2
                                }
                            },
                            {
                                "breakpoint": 546,
                                "settings": {
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1
                                }
                            }
                        ]
                    }'>
                        @foreach ($teams as $item)
                            <div class="col-md-4">
                                <a href="testimonials.html" class="tt-box05">
                                    <div class="tt-box05__img">
                                        <img src="{{asset('images/'.$item->image)}}" class="tt-img-main" alt="">
                                    </div>
                                    <div class="tt-box05__title">
                                        <div class="tt-text-01">{{$item->name}}</div>
                                        <div class="tt-text-02">{{$item->designation}}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    @endsection