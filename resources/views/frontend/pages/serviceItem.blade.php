@extends('frontend.layout.app')

    @section('content')
        <main id="tt-pageContent">
            <div class="section-indent" style="margin-top: 0px;">
                <div class="container container-lg-fluid">
                    <div class="row flex-sm-row-reverse">
                        <div class="col-12 col-md-8 col-lg-8">
                            <div class="services-item">
                                <div class="services-item__img">
                                    <img src="{{asset('images/service/'.$service->header_image)}}">
                                </div>
                                <div class="services-item__layout">
                                    <div class="tt-selected-block">
                                        <div class="section-title text-left">
                                            <div class="section-title__01">{{$service->allServices ? $service->allServices->name : ''}}</div>
                                            <div class="section-title__02">{{$service->name}}</div>
                                        </div>
                                        <blockquote class="blockquote01 blockquote01__max-width01">{{$service->short_description}}</blockquote>
                                    </div>
                                    <div class="ck">

                                        {!! $service->long_description !!}
                                    </div>
                                    
                                    <div class="tt-col-img__top">
                                        <div class="row tt-col-img">
                                            <div class="col-sm-6">
                                                <img src="{{asset('images/service/'.$service->image1)}}">
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{asset('images/service/'.$service->image2)}}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <blockquote class="blockquote02 blockquote02__top">
                                        When searching for a reliable source to design and develop your networking, call us at 
                                        <a href="tel:1(800)7654321">
                                            <span class="tt-base-color">1 (800) 765-43-21.</span>
                                        </a> 
                                    </blockquote>
                                    <a href="#" data-toggle="modal" data-target="#modalMakeAppointment" class="tt-btn btn__color01 tt-btn-top">
                                        <span class="icon-lightning"></span>Get Service Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="divider d-block d-block d-md-none"></div>
                        <div class="col-12 col-md-4 col-lg-4 asideColumn asideColumn-left">
                            <div class="tt-block-aside">
                                <div class="tt-aside-content">
                                    <div class="submenu-aside js-accordeon">
                                        @foreach ($serviceCat as $category)
                                            <div class="tt-item">
                                                <div class="tt-item__title">{{ $category->name }}</div>
                                                <div class="tt-item__content">
                                                    <ul>
                                                        @foreach ($category->services as $service)
                                                            <li>
                                                                <a href="{{route('frontend.serviceItem', $service->id)}}">{{$service->name}}</a>
                                                            </li>    
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tt-block-aside tt-block-aside__shadow">
                                <h3 class="tt-aside-title">Our Contacts</h3>
                                <div class="tt-aside-content">
                                    <ul class="box-aside-info">
                                        <li>
                                            <i class="icon-map-marker"></i> {{$setting->address}}
                                        </li>
                                        <li>
                                            <i class="icon-clock-circular-outline-1"></i> {{$setting->workhours}}
                                        </li>
                                        <li>
                                            <a href="tel:{{$setting->phone1}}"><i class="icon-telephone"></i> {{$setting->phone1}}</a>
                                        </li>
                                        <li>
                                            <a href="tel:{{$setting->phone2}}"><i class="icon-telephone"></i> {{$setting->phone2}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection