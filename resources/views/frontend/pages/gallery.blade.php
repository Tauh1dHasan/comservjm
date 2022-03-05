@extends('frontend.layout.app')

    @section('content')
        <main id="tt-pageContent">
            <div class="section-indent" style="margin-top: 0px;">
                <div class="container container-md-fluid">
                    <div class="section-title max-width-01">
                        <div class="section-title__01">Electrical Gallery</div>
                        <div class="section-title__02">Our Photo Gallery</div>
                        <div class="section-title__03">You will really enjoy doing business with us! Fast, electrical estimates at a competitive price. We save you time and money. Interested? Check out our photos.</div>
                    </div>
                    
                    <div id="filter-layout" class="row justify-content-center tt-gallery-wrapper js-wrapper-gallery">
                        <div class="col-6 col-md-4 show filter-all filter-electrica">
                            <a href="{{asset('images/gallery-img01.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img01.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-electrica">
                            <a href="{{asset('images/gallery-img02.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img02.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-heating">
                            <a href="{{asset('images/gallery-img03.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img03.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-heating">
                            <a href="{{asset('images/gallery-img04.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img04.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-conditioning">
                            <a href="{{asset('images/gallery-img05.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img05.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-conditioning">
                            <a href="{{asset('images/gallery-img06.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img06.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-security">
                            <a href="{{asset('images/gallery-img07.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img07.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-security">
                            <a href="{{asset('images/gallery-img08.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img08.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-other">
                            <a href="{{asset('images/gallery-img09.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img09.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-other">
                            <a href="{{asset('images/gallery-img10.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img10.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-heating">
                            <a href="{{asset('images/gallery-img11.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img11.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4 show filter-all filter-electrical">
                            <a href="{{asset('images/gallery-img12.jpg')}}" class="tt-gallery">
                                <div class="gallery__icon"></div>
                                <img src="{{asset('images/gallery-img12.jpg')}}" alt="">
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </main>
    @endsection