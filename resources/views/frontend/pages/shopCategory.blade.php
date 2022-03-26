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
                                        @foreach ($categories as $category)
                                            <li><a href="{{route('frontend.shopCategory', $category->id)}}">{{$category->name}}</a></li> <!--  class="active"  -->
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-9 col-xl-9">
                        <div class="section-title text-left">
                            {{-- <div class="section-title__01">Best Quality Parts</div> --}}
                            <div class="section-title__02">{{$categoryName->name}}</div>
                        </div>
                        
                        <div id="tt-product-listing" class="tt-product-listing row">
                            @foreach ($products as $product)
                                <div class="col-6 col-md-4 tt-col-item">
                                    <div class="tt-product">
                                        <div class="tt-product__img">
                                            <a href="{{route('frontend.shopItem', $product->id)}}">
                                                <img src="{{asset('images/product/'.$product->image)}}">
                                            </a>
                                        </div>
                                        <div class="tt-product__description">
                                            <h2 class="tt-product__title">
                                                <a href="{{route('frontend.shopItem', $product->id)}}">{{$product->name}}</a>
                                            </h2>
                                            <div class="tt-price">{{$product->price ? $product->price : ''}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="tt-pagination">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection