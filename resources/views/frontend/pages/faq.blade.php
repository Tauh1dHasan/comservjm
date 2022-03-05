@extends('frontend.layout.app')

    @section('content')
    <main id="tt-pageContent">
        <div class="section-indent" style="margin-top: 0px;">
            <div class="container container-md-fluid">
                <div class="section-title max-width-01">
                    <div class="section-title__01">Your Questions. Our Answers</div>
                    <div class="section-title__02">Frequently Asked Questions</div>
                    <div class="section-title__03">You will find answers to all of your most common Electrical Services related questions located here.</div>
                </div>
                <div class="row tt-faq">
                    <div class="col-md-6">
                        <div class="js-accordeon">
                            <div class="tt-item">
                                <div class="tt-item__marker"></div>
                                <div class="tt-item__title">Does conduit need to go inside the transformer box?</div>
                                <div class="tt-item__content">No. Conduit should be stopped just short of the box.</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-item__marker"></div>
                                <div class="tt-item__title">Is additional conduit required beyond what is installed in the ditch?</div>
                                <div class="tt-item__content">If the service is being supplied from a utility pole, the member is required to supply 1-10' section of SCH 80 PVC and 2-10' sections of SCH 40 PVC to be left near the base of the pole for installation by the power company
                                    up the pole.</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-item__marker"></div>
                                <div class="tt-item__title">Is there a difference in meter bases?</div>
                                <div class="tt-item__content">Yes, There are three types. Overhead only, Underground only, and Overhead/Underground combination bases. However, combination boxes are not recommended for Underground installations because of their limited wire space.</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-item__marker"></div>
                                <div class="tt-item__title">Can permanent service be installed if the house has had a ruff in inspection?</div>
                                <div class="tt-item__content">No, We will not set a meter without a final inspection or in some instances a non occupancy permit shall be allowed from the local electrical inspector.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="js-accordeon">
                            <div class="tt-item">
                                <div class="tt-item__marker"></div>
                                <div class="tt-item__title">How close to the pole do I bring my conduit to?</div>
                                <div class="tt-item__content">The top of the elbow must be 6" from the pole.</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-item__marker"></div>
                                <div class="tt-item__title">Does someone need to inspect the ditch before covering the conduit?</div>
                                <div class="tt-item__content">Yes, contact the power company and a representative will come and inspect the ditch and conduit. The representative will place a white sticker on the meter panel with a pass or fail notice.</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-item__marker"></div>
                                <div class="tt-item__title">Can septic lines be installed under power lines?</div>
                                <div class="tt-item__content">Yes.</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-item__marker"></div>
                                <div class="tt-item__title">What about outdoor lighting?</div>
                                <div class="tt-item__content">We offer a variety of lighting products including decorative colonial, cobra head, directional floodlights, and security lights. We can customize plans to fit any lighting need.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-indent">
            <div class="container container-md-fluid">
                <div class="section-title max-width-01">
                    <div class="section-title__01">Send us your questions below</div>
                    <div class="section-title__02">Ask Your Question</div>
                    <div class="section-title__03">Are you stumped by a home wiring project or problem? Don't worry – we are here to help. There are a number of options available for you.</div>
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
                            <div class="form-group">
                                <div class="tt-notes text-center">All Electrical work must be done by a qualified licensed electrician.</div>
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