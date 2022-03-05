@extends('frontend.layout.app')

    @section('content')
    <main id="tt-pageContent">
        <div class="section-indent" style="margin-top: 0px;">
            <div class="container container-lg-fluid">
                <div class="row">
                    <div class="col-md-4 col-lg-3 col-xl-3 leftColumn tt-aside" id="aside-js">
                        <div class="tt-block-aside tt-block-aside__shadow">
                            <h3 class="tt-aside-title">Categories</h3>
                            <div class="tt-aside-content">
                                <nav class="nav-categories">
                                    <ul>
                                        <li><a href="#">Generators</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Extension Cords</a></li>
                                        <li><a href="#">Batteries &amp; Chargers</a></li>
                                        <li><a href="#">Electrical Tape &amp; Tools</a></li>
                                        <li><a href="#">Dimmers &amp; Receptacles</a></li>
                                        <li><a href="#">Wall Plates</a></li>
                                        <li><a href="#">Adapters &amp; Timers</a></li>
                                        <li><a href="#">Door Chimes &amp; Buttons</a></li>
                                        <li><a href="#">Plugs &amp; Connectors</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="tt-block-aside tt-block-aside__shadow">
                            <h3 class="tt-aside-title">Search</h3>
                            <div class="tt-aside-content">
                                <form class="form-default">
                                    <div class="tt-aside-search">
                                        <input type="text" placeholder="Product search">
                                        <a href="#" class="tt-btn-icon icon-search"></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="tt-block-aside tt-block-aside__shadow">
                            <h3 class="tt-aside-title">Popular</h3>
                            <div class="tt-aside-content">
                                <div class="tt-popular">
                                    <div class="tt-item">
                                        <div class="tt-item__img">
                                            <img src="{{asset('images/product/product-01.jpg')}}" alt="">
                                        </div>
                                        <div class="tt-item__layout">
                                            <div class="tt-title">
                                                <a href="#">Woods WiOn 15 amps Receptacle and USB Charger</a>
                                            </div>
                                            <div class="tt-value">
                                                <a href="#" class="tt-icon-btn">
                                                    <i class="icon-808584"></i>
                                                </a>
                                                <div class="tt-price">$41.99</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tt-item">
                                        <div class="tt-item__img">
                                            <img src="{{asset('images/product/product-02.jpg')}}" alt="">
                                        </div>
                                        <div class="tt-item__layout">
                                            <div class="tt-title">
                                                <a href="#">Powerboss 3500 watts Gasoline Portable Generator</a>
                                            </div>
                                            <div class="tt-value">
                                                <a href="#" class="tt-icon-btn">
                                                    <i class="icon-808584"></i>
                                                </a>
                                                <div class="tt-price">$329.99</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9 col-xl-9">
                        <div class="section-title text-left">
                            {{-- <div class="section-title__01">Best Quality Parts</div> --}}
                            <div class="section-title__02">Electrical Products</div>
                            <div class="section-title__03">We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.</div>
                        </div>
                        
                        <div id="tt-product-listing" class="tt-product-listing row">
                            <div class="col-6 col-md-4 tt-col-item">
                                <div class="tt-product">
                                    <div class="tt-product__img">
                                        <a href="{{route('frontend.shopItem')}}">
                                            <img src="{{asset('images/product/product-01.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="tt-product__description">
                                        <h2 class="tt-product__title">
                                            <a href="">Woods WiOn 15 amps Receptacle and USB Charger</a>
                                        </h2>
                                        <div class="tt-price">$41.99</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 tt-col-item">
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
                                        <div class="tt-price">
                                            <span class="new-price">$329.99</span> 
                                            <span class="old-price">$342.32</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 tt-col-item">
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
                                        <div class="tt-rating">
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i>
                                        </div>
                                        <div class="tt-price">$86.16</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 tt-col-item">
                                <div class="tt-product">
                                    <div class="tt-product__img">
                                        <a href="{{route('frontend.shopItem')}}">
                                            <img src="{{asset('images/product/product-04.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="tt-product__description">
                                        <h2 class="tt-product__title">
                                            <a href="{{route('frontend.shopItem')}}">Combination Toggle Switch</a>
                                        </h2>
                                        <div class="tt-rating">
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i>
                                        </div>
                                        <div class="tt-price">$15.99</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 tt-col-item">
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

                            <div class="col-6 col-md-4 tt-col-item">
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
                                        <div class="tt-rating">
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i> 
                                            <i class="icon-favorite"></i>
                                        </div>
                                        <div class="tt-price">$23.99</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 tt-col-item">
                                <div class="tt-product">
                                    <div class="tt-product__img">
                                        <a href="{{route('frontend.shopItem')}}">
                                            <img src="{{asset('images/product/product-07.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="tt-product__description">
                                        <h2 class="tt-product__title">
                                            <a href="{{route('frontend.shopItem')}}">Intermatic Outdoor Portable Timer</a>
                                        </h2>
                                        <div class="tt-price">
                                            <span class="new-price">$30.99</span> 
                                            <span class="old-price">$32.32</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 tt-col-item">
                                <div class="tt-product">
                                    <div class="tt-product__img">
                                        <a href="{{route('frontend.shopItem')}}">
                                            <img src="{{asset('images/product/product-08.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="tt-product__description">
                                        <h2 class="tt-product__title">
                                            <a href="{{route('frontend.shopItem')}}">Ace® 12/3 SPT-3 9ft Major Appliance Cord</a>
                                        </h2>
                                        <div class="tt-price">$16.99</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 tt-col-item">
                                <div class="tt-product">
                                    <div class="tt-product__img">
                                        <a href="{{route('frontend.shopItem')}}">
                                            <img src="{{asset('images/product/product-09.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="tt-product__description">
                                        <h2 class="tt-product__title">
                                            <a href="{{route('frontend.shopItem')}}">General Purpose Indoor Extension Cord in Various Sizes</a>
                                        </h2>
                                        <div class="tt-price">$34.99</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tt-pagination">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection