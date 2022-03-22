@extends('frontend.layout.app')

    @section('content')
    <main id="tt-pageContent">
        <div class="section-indent" style="margin-top: 0px;">
            <div class="container container-md-fluid">
                <div class="section-title max-width-01">
                    <div class="section-title__01">Your Questions. Our Answers</div>
                    <div class="section-title__02">Frequently Asked Questions</div>
                </div>
                <div class="row tt-faq">
                    <div class="col-md-6">
                        <div class="js-accordeon">
                            @foreach ($firstFaqs as $ff)
                                <div class="tt-item">
                                    <div class="tt-item__marker"></div>
                                    <div class="tt-item__title">{{$ff->question}}</div>
                                    <div class="tt-item__content">{{$ff->answer}}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="js-accordeon">
                            @foreach ($secondFaqs as $sf)
                                <div class="tt-item">
                                    <div class="tt-item__marker"></div>
                                    <div class="tt-item__title">{{$sf->question}}</div>
                                    <div class="tt-item__content">{{$sf->answer}}</div>
                                </div>    
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-indent">
            <div class="container container-md-fluid">
                <div class="section-title max-width-01">
                    <div class="section-title__01">Have other question?</div>
                    <div class="section-title__02">Ask Your Question</div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form id="questionform" class="form-default" method="post" novalidate="novalidate" action="#">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Your e-mail address *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phonenumber" class="form-control" placeholder="Your phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="textarea" class="form-control" rows="4" placeholder="Qustion In Detail *"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="tt-btn btn__color01" type="submit">
                                    <span class="icon-lightning"></span>Ask your question
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection