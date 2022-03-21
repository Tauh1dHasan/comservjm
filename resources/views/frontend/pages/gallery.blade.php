@extends('frontend.layout.app')

    @section('content')
        <main id="tt-pageContent">
            <div class="section-indent" style="margin-top: 0px;">
                <div class="container container-md-fluid">
                    <div class="section-title max-width-01">
                        <div class="section-title__01">Gallery</div>
                        <div class="section-title__02">{{$gallery->title}}</div>
                        <div class="section-title__03">{{$gallery->description}}</div>
                    </div>
                    
                    <div id="filter-layout" class="row justify-content-center tt-gallery-wrapper js-wrapper-gallery">
                        @foreach ($images as $image)
                            <div class="col-6 col-md-4 col-sm-12 show filter-all filter-electrica">
                                <a href="{{asset('images/gallery/'.$image->image)}}" class="tt-gallery">
                                    <div class="gallery__icon"></div>
                                    <img class="img-fluid rounded" src="{{asset('images/gallery/'.$image->image)}}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    @endsection