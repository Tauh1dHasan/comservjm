@extends('frontend.layout.app')
    @section('content')
        <main id="tt-pageContent">
            <div class="section-indent" style="margin-top: 0px;">
                <div class="container container-lg-fluid">
                    <div class="layout01 layout01__revers layout01__small-layout layout01__img-more">
                        
                        <div class="layout01__img">
                            <div class="tt-img-main">
                                <img src="{{asset('images/layout01-img03.jpg')}}" alt="">
                            </div>
                            <div class="tt-img-more left-bottom">
                                <img src="{{asset('images/layout01-img03-02.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="layout01__content">
                            <div class="layout01__content-wrapper">
                                <div class="section-title text-left">
                                    <div class="section-title__01">Experience</div>
                                    <div class="section-title__02">Experienced and Reliable Electrical Contractors</div>
                                </div>
                                <p>We are locally owned and operated which makes our services causal as they are done by friendly and helpful technicians.</p>
                                <p>We started out in 2002. We are locally owned and operated which makes our services causal as they are done by friendly and helpful technicians. Our mission is to service each client with a highly trained and courteous technician
                                    that is dependable and always trustworthy.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="layout01-fluid">
                    <div class="layout01__img" style="background-image: url('{{asset('images/layout01-img04.jpg')}}')"></div>
                    <div class="container container-lg-fluid">
                        <div class="layout01__content">
                            <div class="layout01__content-wrapper">
                                <div class="section-title text-left">
                                    <div class="section-title__01">Certificates</div>
                                    <div class="section-title__02">We are a Qualified &amp; Certified Electrical Company</div>
                                </div>
                                <p>We currently employ a team of fully qualified electricians and a number of apprentices. We have been registered with he ECA and therefore all our electricians are JIB registered. Our aim is to keep our services high and our
                                    prices very competitive.</p>
                                <ul class="js-wrapper-gallery gallery01 gallery01-top">
                                    <li>
                                        <a class="tt-gallery" href="{{asset('images/certificates-img01_large.jpg')}}">
                                            <img src="{{asset('images/certificates-img01.jpg')}}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a class="tt-gallery" href="{{asset('images/certificates-img02_large.jpg')}}">
                                            <img src="{{asset('images/certificates-img02.jpg')}}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a class="tt-gallery" href="{{asset('images/certificates-img03_large.jpg')}}">
                                            <img src="{{asset('images/certificates-img03.jpg')}}" alt="">
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
                        <div class="section-title__03">Electrician is your single source for a complete range of high-quality electrical services, including design/build, engineering and maintenance.</div>
                    </div>
                    <div class="row tt-services-promo__list justify-content-center">
                        <div class="col-sm-6 col-lg-4 tt-item">
                            <div class="tt-services-promo">
                                <div class="tt-value tt-value__indent">1</div>
                                <div class="tt-wrapper">
                                    <div class="tt-col-icon icon-hours"></div>
                                    <div class="tt-col-layout">
                                        <div class="tt-title">24/7 Emergency Services</div>
                                        <p>24/7 emergency electrician you can trust.</p>
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
                                        <p>Yes, we offer free estimates for electrical additions or replacements.</p>
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
                        <div class="section-title__02">Fully Qualified Electricians</div>
                        <div class="section-title__03">All our personnel operate within an Integrated Management System to ensure the delivery of services that are at an exception level of quality, reliability, and value</div>
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
                        <div class="col-md-4">
                            <a href="testimonials.html" class="tt-box05">
                                <div class="tt-box05__img">
                                    <img src="{{asset('images/box04-img01.jpg')}}" class="tt-img-main" alt=""> 
                                    <img src="{{asset('images/mask-img02.png')}}" class="tt-img-mask" alt="">
                                </div>
                                <div class="tt-box05__title">
                                    <div class="tt-text-01">David Anthony</div>
                                    <div class="tt-text-02">Master Electrician</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="testimonials.html" class="tt-box05">
                                <div class="tt-box05__img">
                                    <img src="{{asset('images/box04-img02.jpg')}}" class="tt-img-main" alt=""> 
                                    <img src="{{asset('images/mask-img02.png')}}" class="tt-img-mask" alt="">
                                </div>
                                <div class="tt-box05__title">
                                    <div class="tt-text-01">James Campbell</div>
                                    <div class="tt-text-02">Office Manager</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="testimonials.html" class="tt-box05">
                                <div class="tt-box05__img">
                                    <img src="{{asset('images/box04-img03.jpg')}}" class="tt-img-main" alt=""> 
                                    <img src="{{asset('images/mask-img02.png')}}" class="tt-img-mask" alt="">
                                </div>
                                <div class="tt-box05__title">
                                    <div class="tt-text-01">Charles Shepard</div>
                                    <div class="tt-text-02">Electrician</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="testimonials.html" class="tt-box05">
                                <div class="tt-box05__img">
                                    <img src="{{asset('images/box04-img01.jpg')}}" class="tt-img-main" alt=""> 
                                    <img src="{{asset('images/mask-img02.png')}}" class="tt-img-mask" alt="">
                                </div>
                                <div class="tt-box05__title">
                                    <div class="tt-text-01">David Anthony</div>
                                    <div class="tt-text-02">Master Electrician</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection