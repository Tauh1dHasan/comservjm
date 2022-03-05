@extends('frontend.layout.app')

    @section('content')
    <main id="tt-pageContent">
        <div class="section-indent" style="margin-top: 0px;">
            <!-- mobile product slider  -->
            <div class="tt-mobile-product-layout d-block d-sm-none">
                <div class="tt-mobile-product-slider slick-type01" id="mobile-product">
                    <div>
                        <img src="{{asset('images/product/product-10.jpg')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('images/product/product-10-02.jpg')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('images/product/product-10-03.jpg')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('images/product/product-10-04.jpg')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('images/product/product-10-05.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <!-- /mobile product slider  -->
            <div class="container container-lg-fluid">
                <div class="row">
                    <div class="col-5 col-lg-5 d-none d-sm-block">
                        <div class="tt-product-single-img">
                            <div>
                                <img class="zoom-product" src="{{asset('images/product/product-10.jpg')}}" data-zoom-image="{{asset('images/product/product-10.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="product-images-carousel">
                            <ul id="smallGallery" class="arrow-location-02">
                                <li>
                                    <a class="zoomGalleryActive" href="#" data-image="{{asset('images/product/product-10.jpg')}}" data-zoom-image="{{asset('images/product/product-10.jpg')}}">
                                        <img src="{{asset('images/product/product-10.jpg')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{asset('images/product/product-10-02.jpg')}}" data-zoom-image="{{asset('images/product/product-10-02.jpg')}}">
                                        <img src="{{asset('images/product/product-10-02.jpg')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{asset('images/product/product-10-03.jpg')}}" data-zoom-image="{{asset('images/product/product-10-03.jpg')}}">
                                        <img src="{{asset('images/product/product-10-03.jpg')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{asset('images/product/product-10-04.jpg')}}" data-zoom-image="{{asset('images/product/product-10-04.jpg')}}">
                                        <img src="{{asset('images/product/product-10-04.jpg')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="{{asset('images/product/product-10-05.jpg')}}" data-zoom-image="{{asset('images/product/product-10-05.jpg')}}">
                                        <img src="{{asset('images/product/product-10-05.jpg')}}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-7">
                        <div class="product-single-info">
                            <div class="tt-tag">Electrical Tape &amp; Tools</div>
                            <h3 class="tt-title">Blackt Electrotech: 230 Volt Digital Programmable Timer Electronic Timer (24x7): Energy Saving Socket</h3>
                            
                            <div class="tt-price">$329.99</div>
                            
                            <div class="tt-description">We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-indent">
            <div class="container container-lg-fluid">
                <div class="tt-tab-wrapper">
                    <ul class="nav nav-tabs tt-tabs-default" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link show active" data-toggle="tab" href="#tt-tab-01" role="tab">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active fade" id="tt-tab-01" role="tabpanel">We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.
                            <ul class="tt-list01 tt-list-top">
                                <li>1000 Watt / 10 Amps 240 V AC</li>
                                <li>Min Setting time: 1 Min</li>
                                <li>Operating Temperature: -10 to + 40 Deg C</li>
                                <li>Accourancy: +/-1 Min per month</li>
                                <li>24 hours / 7 days a week programmable</li>
                                <li>Built-in battery for backup when power failure</li>
                                <li>Repeat programs with 16 on/off settings, and setting on/off manually</li>
                                <li>Battery Backup: Ni-Mh 1.2V 80mAH</li>
                                <li>Current Cunsumption: 0.015MA</li>
                                <li>Socket Type: Indian Standard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-indent">
            <div class="container container-lg-fluid">
                <div class="section-title">
                    <div class="section-title__02">Similar Products</div>
                </div>
                <div class="carusel-product js-carusel-product slick-type01" 
                    data-slick='{
						"slidesToShow": 4,
						"slidesToScroll": 1,
						"autoplaySpeed": 3500,
						"responsive": [
							{
								"breakpoint": 767,
								"settings": {
									"slidesToShow": 3,
									"slidesToScroll": 1
								}
							},
							{
								"breakpoint": 576,
								"settings": {
									"slidesToShow": 2,
									"slidesToScroll": 1
								}
							}
						]
				    }'>
                    <div class="item">
                        <div class="tt-product">
                            <div class="tt-product__img">
                                <a href="{{route('frontend.shopItem')}}">
                                    <img src="{{asset('images/product/product-01.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="tt-product__description">
                                <h2 class="tt-product__title">
                                    <a href="{{route('frontend.shopItem')}}">Woods WiOn 15 amps Receptacle and USB Charger</a>
                                </h2>
                                <div class="tt-price">$41.99</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="tt-product">
                            <div class="tt-product__img">
                                <a href="{{route('frontend.shopItem')}}">
                                    <img src="{{asset('images/product/product-02.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="tt-product__description">
                                <h2 class="tt-product__title">
                                    <a href="{{route('frontend.shopItem')}}">Powerboss 3500 watts Gasoline Portable Generator</a>
                                </h2>
                                <div class="tt-price">$41.99</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="tt-product">
                            <div class="tt-product__img">
                                <a href="{{route('frontend.shopItem')}}">
                                    <img src="{{asset('images/product/product-03.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="tt-product__description">
                                <h2 class="tt-product__title">
                                    <a href="{{route('frontend.shopItem')}}">Eveready® AAA Super Battery</a>
                                </h2>
                                <div class="tt-price">$86.16</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="tt-product">
                            <div class="tt-product__img">
                                <a href="{{route('frontend.shopItem')}}">
                                    <img src="{{asset('images/product/product-05.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="tt-product__description">
                                <h2 class="tt-product__title">
                                    <a href="{{route('frontend.shopItem')}}">GE Bluetooth Outdoor Smart Switch Timer</a>
                                </h2>
                                <div class="tt-price">$49.99</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="tt-product">
                            <div class="tt-product__img">
                                <a href="{{route('frontend.shopItem')}}">
                                    <img src="{{asset('images/product/product-06.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="tt-product__description">
                                <h2 class="tt-product__title">
                                    <a href="{{route('frontend.shopItem')}}">Rotary Fan Speed Control</a>
                                </h2>
                                <div class="tt-price">$23.99</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection