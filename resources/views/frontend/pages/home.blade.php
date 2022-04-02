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

                    {{-- Main Slider loop --}}
                    @foreach ($mainSliders as $mainSlider)
                        <div class="slide">
                            <div class="img--holder" data-bgslide="{{asset('images/mainSlider/' . $mainSlider->image)}}"></div>
                            <div class="slide-content">
                                <div class="container text-center js-rotation" data-animation="fadeInUpSm" data-animation-delay="0s">
                                    <div class="tt-title-02">{{$mainSlider->title}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
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
                                <img data-src="{{asset('images/'.$aboutUs->image)}}" class="lazyload" alt="">
                            </div>
                            {{-- <div class="tt-img-more left-bottom">
                                <img data-src="{{asset('images/layout01-img02.jpg')}}" class="lazyload" alt="">
                            </div> --}}
                        </div>
                        <div class="layout01__content">
                            <div class="layout01__content-wrapper">
                                <div class="section-title text-left">
                                    <div class="section-title__01">About Us</div>
                                    <div class="section-title__02">{{$aboutUs->title}}</div>
                                </div>
                                {!! $aboutUs->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="tt-slideinfo-wrapper slick-type01">
                    @foreach ($highlights as $highlight)
                        <div class="tt-slideinfo">
                            <div class="tt-item__bg">
                                <div data-bg="{{asset('images/' . $highlight->image)}}" class="lazyload tt-item__bg-img"></div>
                                <div class="tt-item__bg-top"></div>
                            </div>
                            <div class="tt-item__content">
                                <div class="tt-item__title">
                                    <span class="tt-text">{{$highlight->title}}</span>
                                </div>
                                <div class="tt-item__description">{{$highlight->description}}</div>
                                <div class="tt-item__btn"><a href="#">+</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="section-indent">
                <div class="container container-lg-fluid container__p-r">
                    <div class="section-title max-width-01 section-title_indent-02">
                        <div class="section-title__01">Our Services</div>
                        <div class="section-title__02">Some of our Services</div>
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
                        @foreach ($services as $service)
                            <div class="col-md-4">
                                <div class="tt-box02">
                                    <a href="{{ route('frontend.serviceItem', $service->id) }}" class="tt-box02__img">
                                        <div class="tt-bg-dark">
                                            <img data-src="{{asset('images/service/'.$service->header_image)}}" class="tt-img-main lazyload">
                                        </div>
                                    </a>
                                    <h6 class="tt-box02__title">
                                        <a href="{{route('frontend.serviceItem', $service->id)}}">{{$service->name}}</a>
                                    </h6>
                                    <p>{{ Str::substr($service->short_description, 0, 50) }}</p>
                                    <div class="tt-row-btn">
                                        <a href="{{ route('frontend.serviceItem', $service->id) }}" class="tt-link">More info
                                            <span class="icon-arrowhead-pointing-to-the-right-1"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="tt-box01 js-init-bg lazyload" data-bg="{{asset('images/'.$offer->image)}}">
                    <div class="container">
                        <div class="tt-box01__holder">
                            <div class="tt-box01__description">
                                <h4 class="tt-box01__title">
                                    {{$offer->title}}
                                </h4>
                                {!! $offer->description !!}
                                <div class="tt-row-btn">
                                    <a class="tt-btn btn__color01" href="tel:{{$offer->phone_number}}">
                                        <span class="icon-telephone"></span>Give Us a Call
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
                        <div class="section-title__02">Latest Gallery</div>
                    </div>
                    <div id="filter-layout" class="row justify-content-center gallery-innerlayout-wrapper js-wrapper-gallery">
                        @foreach ($galleryImages as $item)
                            <div class="col-4 col-md-3 col-custom-item5 residences show all">
                                <a href="{{asset('images/'.$item->image)}}" class="tt-gallery">
                                    <div class="gallery__icon"></div>
                                    <img class="lazyload" data-src="{{asset('images/gallery/'.$item->image)}}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="section-indent">
                <div class="section__wrapper">
                    <div class="container container-md-fluid">
                        <div class="tt-info-value row">
                            <div class="tt-col-title col-md-4">
                                <div class="tt-title">
                                    <div class="tt-title__01">Our Statistics</div>
                                    <div class="tt-title__02">{{$statistic->title}}</div>
                                </div>
                            </div>
                            <div class="col-auto ml-auto">
                                <div class="tt-item">
                                    <div class="tt-value">{{$statistic->residential}}+</div>Residential Projects
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="tt-item">
                                    <div class="tt-value">{{$statistic->commercial}}+</div>Commercial Projects
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="tt-item">
                                    <div class="tt-value">{{$statistic->industrial}}+</div>Industrial Projects
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
                                @foreach ($testimonials as $testimonial)
                                    <div class="item">
                                        <div class="item__row">
                                            <div class="tt-item__img">
                                                <img class="lazyload" data-src="{{asset('images/'.$testimonial->image)}}">
                                            </div>
                                            <div class="tt-item__title">
                                                <div class="section-title text-left">
                                                    <div class="section-title__01">What Our Clients Say</div>
                                                    <div class="section-title__02">{{$testimonial->title}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tt-item__content">
                                            <blockquote>{{$testimonial->description}} 
                                                <cite>- {{$testimonial->name}}</cite>
                                            </blockquote>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="tt-box03__img tt-visible-mobile lazyload" data-bg="{{asset('images/'.$statistic->image)}}"></div>
                        </div>
                        <div class="tt-box03__img tt-visible-desktop lazyload" data-bg="{{asset('images/'.$statistic->image)}}"></div>
                    </div>
                </div>
            </div>

        </main>
    @endsection