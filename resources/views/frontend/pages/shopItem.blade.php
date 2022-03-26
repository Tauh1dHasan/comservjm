@extends('frontend.layout.app')

    @section('content')
    <main id="tt-pageContent">
        <div class="section-indent" style="margin-top: 0px;">
            <!-- mobile product slider  -->
            <div class="tt-mobile-product-layout d-block d-sm-none">
                <div class="tt-mobile-product-slider slick-type01" id="mobile-product">
                    <div>
                        <img src="{{asset('images/product/'.$product->image)}}">
                    </div>
                </div>
            </div>
            <!-- /mobile product slider  -->
            <div class="container container-lg-fluid">
                <div class="row">
                    <div class="col-5 col-lg-5 d-none d-sm-block">
                        <div class="tt-product-single-img">
                            <div>
                                <img class="zoom-product" src="{{asset('images/product/'.$product->image)}}" data-zoom-image="{{asset('images/product/'.$product->image)}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-7">
                        <div class="product-single-info">
                            <h3 class="tt-title">{{$product->name}}</h3> 
                            <div class="tt-price">{{$product->price ? $product->price : ''}}</div>
                            <div class="tt-description">{{$product->short_description}}</div>
                            
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
                        <div class="tab-pane active fade" id="tt-tab-01" role="tabpanel">
                            {{$product->long_description}}
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
                    @foreach ($similars as $similar)
                        <div class="item">
                            <div class="tt-product">
                                <div class="tt-product__img">
                                    <a href="{{route('frontend.shopItem'.$similar->id)}}">
                                        <img src="{{asset('images/product/'.$similar->image)}}">
                                    </a>
                                </div>
                                <div class="tt-product__description">
                                    <h2 class="tt-product__title">
                                        <a href="{{route('frontend.shopItem'. $similar->id)}}">{{$similar->name}}</a>
                                    </h2>
                                    <div class="tt-price">{{$similar->price ? $similar->price : ''}}</div>
                                </div>
                            </div>
                        </div>    
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    @endsection