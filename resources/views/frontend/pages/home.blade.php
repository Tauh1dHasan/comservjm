@extends('frontend.layout.app')
    @section('content')
        <main id="tt-pageContent">
            <div class="container-indent no-margin mainSlider-wrapper">
                <div class="loading-content">
                    <div class="loading-dots">
                        <img src="{{asset('images/bolt.gif')}}" alt="">
                    </div>
                </div>
                <div id="js-mainSlider" class="mainSlider">
                    <div class="slide">
                        <div class="img--holder" data-bgslide="{{asset('images/mainslide-01.jpg')}}"></div>
                        <div class="slide-content">
                            <div class="container text-center js-rotation" data-animation="fadeInUpSm" data-animation-delay="0s">
                                <div class="tt-title-01">Keeping You Wired</div>
                                <div class="tt-title-02">We’re the Current<br>Specialist!</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img--holder" data-bgslide="{{asset('images/mainslide-02.jpg')}}"></div>
                        <div class="slide-content">
                            <div class="container text-center js-rotation" data-animation="fadeInUpSm" data-animation-delay="0s">
                                <div class="tt-title-01">Making Our Clients Happier</div>
                                <div class="tt-title-02">Best Services<br>for Your Family</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img--holder" data-bgslide="{{asset('images/mainslide-03.jpg')}}"></div>
                        <div class="slide-content">
                            <div class="container text-center js-rotation" data-animation="fadeInUpSm" data-animation-delay="0s">
                                <div class="tt-title-01">We Can Light Everything</div>
                                <div class="tt-title-02">Nothing is Impossible<br>for Us</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container order-form-wrapper container-lg-fluid container-lg__no-gutters">
                <div class="order-form">
                    <div class="order-form__title" id="js-toggle-orderform"><i class="tt-arrow down"></i> Request Service Today
                    </div>
                    <div class="order-form__content form-order">
                        <form id="orderform" method="post" novalidate="novalidate" action="#">
                            <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your name"></div>
                            <div class="form-group"><input type="text" name="email" class="form-control" placeholder="Your e-mail"></div>
                            <div class="form-group"><input type="text" name="phonenumber" class="form-control" placeholder="Your phone"></div>
                            <div class="form-group"><span class="icon icon-747993"></span> <input name="date" class="datepicker-1 form-control" autocomplete="off" placeholder="Date" type="text">
                                <div class="form-group__icon icon-calendar"></div>
                            </div>
                            <div class="form-group"><button class="tt-btn btn__color01" type="submit"><span
                                        class="icon-lightning"></span>Get Service</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="container container-lg-fluid">
                    <div class="layout01 layout01__img-more">
                        <div class="layout01__img">
                            <div class="tt-img-main">
                                <img data-src="{{asset('images/layout01-img01.jpg')}}" class="lazyload" alt="">
                            </div>
                            <div class="tt-img-more left-bottom">
                                <img data-src="{{asset('images/layout01-img02.jpg')}}" class="lazyload" alt="">
                            </div>
                        </div>
                        <div class="layout01__content">
                            <div class="layout01__content-wrapper">
                                <div class="section-title text-left">
                                    <div class="section-title__01">About Us</div>
                                    <div class="section-title__02">Outstanding Residential &amp; Commercial Services</div>
                                </div>
                                <p>All of our services are backed by our 100% satisfaction guarantee. Our electricians can install anything from new security lighting for your outdoors to a whole home generator that will keep your appliances working during a
                                    power outage.</p>
                                <ul class="tt-list01 tt-list-top">
                                    <li>Full-service electrical layout, design</li>
                                    <li>Wiring and installation/upgrades</li>
                                    <li>Emergency power solutions (generators)</li>
                                    <li>Virtually any electrical needs you have – just ask!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="tt-slideinfo-wrapper slick-type01">

                    <div class="tt-slideinfo">
                        <div class="tt-item__bg">
                            <div data-bg="{{asset('images/slideinfo-01.jpg')}}" class="lazyload tt-item__bg-img"></div>
                            <div class="tt-item__bg-top"></div>
                        </div>
                        <div class="tt-item__content">
                            <div class="tt-item__title">
                                <span class="tt-text">Commercial</span>
                            </div>
                            <div class="tt-item__description">We offer the highest level of responsiveness and reliability, including on-line job management and reporting. Our highly experienced contractors across the nation ensure that your premises are always maintained and compliant.</div>
                            <div class="tt-item__btn"><a href="#">+</a></div>
                        </div>
                    </div>

                    <div class="tt-slideinfo">
                        <div class="tt-item__bg">
                            <div data-bg="{{asset('images/slideinfo-02.jpg')}}" class="lazyload tt-item__bg-img"></div>
                            <div class="tt-item__bg-top"></div>
                        </div>
                        <div class="tt-item__content">
                            <div class="tt-item__title">
                                <span class="tt-text">Industrial</span>
                            </div>
                            <div class="tt-item__description">We offer the highest level of responsiveness and reliability, including on-line job management and reporting. Our highly experienced contractors across the nation ensure that your premises are always maintained and compliant.</div>
                            <div class="tt-item__btn"><a href="#">+</a></div>
                        </div>
                    </div>

                    <div class="tt-slideinfo">
                        <div class="tt-item__bg">
                            <div data-bg="{{asset('images/slideinfo-03.jpg')}}" class="lazyload tt-item__bg-img"></div>
                            <div class="tt-item__bg-top"></div>
                        </div>
                        <div class="tt-item__content">
                            <div class="tt-item__title">
                                <span class="tt-text">Residential</span>
                            </div>
                            <div class="tt-item__description">We offer the highest level of responsiveness and reliability, including on-line job management and reporting. Our highly experienced contractors across the nation ensure that your premises are always maintained and compliant.</div>
                            <div class="tt-item__btn"><a href="#">+</a></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="section-indent">
                <div class="container container-lg-fluid container__p-r">
                    <div class="section-title max-width-01 section-title_indent-02">
                        <div class="section-title__01">24/7 Electrician Services – Safe and Efficient</div>
                        <div class="section-title__02">We are a Full Service Electrical Contractor</div>
                    </div>
                    <div class="tt-box02_wrapper row slick-type01 slick-slider slick-dotted" data-slick='{
                        "slidesToShow": 3,
                        "autoplaySpeed": 4500,
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
                            <div class="tt-box02">
                                <a href="services-item.html" class="tt-box02__img">
                                    <div class="tt-bg-dark">
                                        <img data-src="{{asset('images/box02-img01.jpg')}}" class="tt-img-main lazyload" alt="">
                                    </div>
                                </a>
                                <h6 class="tt-box02__title">
                                    <a href="#">Electrical Service</a>
                                </h6>
                                <p>We provide complete electrical design and installation services.</p>
                                <div class="tt-row-btn">
                                    <a href="services-item.html" class="tt-link">More info
                                        <span class="icon-arrowhead-pointing-to-the-right-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="tt-box02">
                                <a href="services-item.html" class="tt-box02__img">
                                    <div class="tt-bg-dark">
                                        <img data-src="{{asset('images/box02-img02.jpg')}}" class="tt-img-main lazyload" alt="">
                                    </div>
                                </a>
                                <h6 class="tt-box02__title">
                                    <a href="#">Heating Service</a>
                                </h6>
                                <p>We offer energy efficient electric heat products and installations.</p>
                                <div class="tt-row-btn">
                                    <a href="services-item.html" class="tt-link">More info
                                        <span class="icon-arrowhead-pointing-to-the-right-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="tt-box02">
                                <a href="services-item.html" class="tt-box02__img">
                                    <div class="tt-bg-dark">
                                        <img data-src="{{asset('images/box02-img03.jpg')}}" class="tt-img-main lazyload" alt="">
                                    </div>
                                </a>
                                <h6 class="tt-box02__title">
                                    <a href="#">Air Conditioning</a>
                                </h6>
                                <p>Our installation services ensure that you get the right air conditioner.</p>
                                <div class="tt-row-btn">
                                    <a href="services-item.html" class="tt-link">More info
                                        <span class="icon-arrowhead-pointing-to-the-right-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="tt-box02">
                                <a href="services-item.html" class="tt-box02__img">
                                    <div class="tt-bg-dark">
                                        <img data-src="{{asset('images/box02-img04.jpg')}}" class="tt-img-main lazyload" alt="">
                                    </div>
                                </a>
                                <h6 class="tt-box02__title">
                                    <a href="#">Security Systems</a>
                                </h6>
                                <p>You can view events over a monitor in our home.</p>
                                <div class="tt-row-btn">
                                    <a href="services-item.html" class="tt-link">More info
                                        <span class="icon-arrowhead-pointing-to-the-right-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="tt-box02">
                                <a href="services-item.html" class="tt-box02__img">
                                    <div class="tt-bg-dark">
                                        <img data-src="{{asset('images/box02-img05.jpg')}}" class="tt-img-main lazyload" alt="">
                                    </div>
                                </a>
                                <h6 class="tt-box02__title">
                                    <a href="#">Panels Changes</a>
                                </h6>
                                <p>Electrical panels are the heart of your electrical system.</p>
                                <div class="tt-row-btn">
                                    <a href="services-item.html" class="tt-link">More info
                                        <span class="icon-arrowhead-pointing-to-the-right-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="tt-box02">
                                <a href="services-item.html" class="tt-box02__img">
                                    <div class="tt-bg-dark">
                                        <img data-src="{{asset('images/box02-img06.jpg')}}" class="tt-img-main lazyload" alt="">
                                    </div>
                                </a>
                                <h6 class="tt-box02__title">
                                    <a href="#">Trouble Shooting</a>
                                </h6>
                                <p>We think before we start working to save you money.</p>
                                <div class="tt-row-btn">
                                    <a href="services-item.html" class="tt-link">More info
                                        <span class="icon-arrowhead-pointing-to-the-right-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="tt-box01 js-init-bg lazyload" data-bg="{{asset('images/box01-bg-desktop.jpg')}}">
                    <div class="container">
                        <div class="tt-box01__holder">
                            <div class="tt-box01__description">
                                <h4 class="tt-box01__title">
                                    Do you <span class="tt-base-color">Need Help</span>
                                    <br>With Electrical
                                    <br>Maintenance?
                                </h4>
                                <p>Our electrical repair and service options are proudly offered to clients. Give us a call today to schedule a free service estimate!</p>
                                <div class="tt-row-btn">
                                    <a class="tt-btn btn__color01" href="tel:1(800)7654321">
                                        <span class="icon-telephone"></span>Give Us a Call
                                    </a>
                                    <a class="tt-btn btn__color02" data-toggle="modal" data-target="#modalMakeAppointment" href="#">
                                        <span class="icon-lightning"></span>Free Estimate
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="container container-md-fluid">
                    <div class="section-title max-width-01">
                        <div class="section-title__02">Our Projects</div>
                    </div>
                    <div id="filter-layout" class="row justify-content-center gallery-innerlayout-wrapper js-wrapper-gallery">

                        <div class="col-4 col-md-3 col-custom-item5 residences show all">
                            <a href="{{asset('images/gallery01-01.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img class="lazyload" data-src="{{asset('images/gallery01-01.jpg')}}" alt="">
                            </a>
                        </div>

                        <div class="col-4 col-md-3 col-custom-item5 residences show all">
                            <a href="{{asset('images/gallery01-02.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img class="lazyload" data-src="{{asset('images/gallery01-02.jpg')}}" alt="">
                            </a>
                        </div>

                        <div class="col-4 col-md-3 col-custom-item5 residences show all">
                            <a href="{{asset('images/gallery01-03.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div><img class="lazyload" data-src="{{asset('images/gallery01-03.jpg')}}" alt="">
                            </a>
                        </div>

                        <div class="col-4 col-md-3 col-custom-item5 industrial_objects show all">
                            <a href="{{asset('images/gallery01-04.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div><img class="lazyload" data-src="{{asset('images/gallery01-04.jpg')}}" alt="">
                            </a>
                        </div>

                        <div class="col-4 col-md-3 col-custom-item5 offices show all">
                            <a href="{{asset('images/gallery01-05.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div><img class="lazyload" data-src="{{asset('images/gallery01-05.jpg')}}" alt="">
                            </a>
                        </div>

                        <div class="col-4 col-md-3 col-custom-item5 industrial_objects show all">
                            <a href="{{asset('images/gallery01-06.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div><img class="lazyload" data-src="{{asset('images/gallery01-06.jpg')}}" alt="">
                            </a>
                        </div>

                        <div class="col-4 col-md-3 col-custom-item5 retail_objects show all">
                            <a href="{{asset('images/gallery01-07.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div><img class="lazyload" data-src="{{asset('images/gallery01-07.jpg')}}" alt="">
                            </a>
                        </div>

                        <div class="col-4 col-md-3 col-custom-item5 offices show all">
                            <a href="{{asset('images/gallery01-08.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div><img class="lazyload" data-src="{{asset('images/gallery01-08.jpg')}}" alt="">
                            </a>
                        </div>

                        <div class="col-4 col-md-3 col-custom-item5 retail_objects show all">
                            <a href="{{asset('images/gallery01-09.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div><img class="lazyload" data-src="{{asset('images/gallery01-09.jpg')}}" alt="">
                            </a>
                        </div>

                        <div class="col-4 col-md-3 col-custom-item5 retail_objects show all">
                            <a href="{{asset('images/gallery01-10.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div><img class="lazyload" data-src="{{asset('images/gallery01-10.jpg')}}" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="section__wrapper">
                    <div class="container container-md-fluid">
                        <div class="tt-info-value row">
                            <div class="tt-col-title col-md-4">
                                <div class="tt-title"><img class="bg-marker lazyload" data-src="{{asset('images/bg_marker.png')}}" alt="">
                                    <div class="tt-title__01">Our Statistics</div>
                                    <div class="tt-title__02">Some Important Facts</div>
                                </div>
                            </div>
                            <div class="col-auto ml-auto">
                                <div class="tt-item">
                                    <div class="tt-value">5000+</div>Residential Projects
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="tt-item">
                                    <div class="tt-value">1500+</div>Commercial Projects
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="tt-item">
                                    <div class="tt-value">1000+</div>Industrial Projects
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tt-box03 tt-box03__extraindent">
                <div class="container container-md-fluid">
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="tt-box03__content">
                                <div class="slick-type01 slick-dots-left" data-slick='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "autoplaySpeed": 4500
                                }'>
                                    <div class="item">
                                        <div class="item__row">
                                            <div class="tt-item__img">
                                                <img class="lazyload" data-src="{{asset('images/box03_img02.jpg')}}" alt="">
                                            </div>
                                            <div class="tt-item__title">
                                                <div class="section-title text-left">
                                                    <div class="section-title__01">What Our Clients Say</div>
                                                    <div class="section-title__02">Professional, Reliable & Cost Effective
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tt-item__content">
                                            <blockquote>We've been using your company and from the very beginning found him and his team to be extremely professional and knowledgeable. We wouldn't have any hesitation in recommending their services. <cite>- Teresa and Kevin
                                                    K.</cite></blockquote>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="item__row">
                                            <div class="tt-item__img">
                                                <img class="lazyload" data-src="{{asset('images/box03_img02.jpg')}}" alt="">
                                            </div>
                                            <div class="tt-item__title">
                                                <div class="section-title text-left">
                                                    <div class="section-title__01">What Our Clients Say</div>
                                                    <div class="section-title__02">Professional, Reliable & Cost Effective
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tt-item__content">
                                            <blockquote>We've been using your company and from the very beginning found him and his team to be extremely professional and knowledgeable. We wouldn't have any hesitation in recommending their services. <cite>- Teresa and Kevin
                                                    K.</cite></blockquote>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="item__row">
                                            <div class="tt-item__img">
                                                <img class="lazyload" data-src="{{asset('images/box03_img02.jpg')}}" alt="">
                                            </div>
                                            <div class="tt-item__title">
                                                <div class="section-title text-left">
                                                    <div class="section-title__01">What Our Clients Say</div>
                                                    <div class="section-title__02">Professional, Reliable & Cost Effective
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tt-item__content">
                                            <blockquote>We've been using your company and from the very beginning found him and his team to be extremely professional and knowledgeable. We wouldn't have any hesitation in recommending their services. <cite>- Teresa and Kevin
                                                    K.</cite></blockquote>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tt-box03__img tt-visible-mobile lazyload" data-bg="{{asset('images/box03_img01.jpg')}}"></div>
                            <div class="tt-box03__extra">
                                <div class="tt-title">Emergency Service</div>
                                <p>If this is an emergency outside of normal business hours, call us</p>
                                <address>
                                    <a href="tel:1(800)7654321"><i class="icon-telephone"></i> 1 (800) 765-43-21</a>
                                </address>
                            </div>
                        </div>
                        <div class="tt-box03__img tt-visible-desktop lazyload" data-bg="{{asset('images/box03_img01.jpg')}}"></div>
                    </div>
                </div>
            </div>

        </main>
    @endsection