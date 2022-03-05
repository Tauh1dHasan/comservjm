@extends('frontend.layout.app')

    @section('content')
        <main id="tt-pageContent">
            <div class="section-indent" style="margin-top: 0px;">
                <div class="container container-lg-fluid">
                    <div class="row flex-sm-row-reverse">
                        <div class="col-12 col-md-8 col-lg-8">
                            <div class="services-item">
                                <div class="services-item__img">
                                    <img src="{{asset('images/services_img01.jpg')}}" alt="">
                                </div>
                                <div class="services-item__layout">
                                    <div class="tt-selected-block">
                                        <div class="section-title text-left">
                                            <div class="section-title__01">Commercial Service</div>
                                            <div class="section-title__02">Outdoor and Motion Lighting</div>
                                        </div>
                                        <blockquote class="blockquote01 blockquote01__max-width01">Electricity is arguably the most valuable resource we have in our modern society. Without electricity, most of the things we do and rely on on a daily basis wouldn’t be there.</blockquote>
                                    </div>
                                    <h4 class="tt-layout-title">Home Electrical Repair</h4>
                                    <p>Electricity is arguably the most valuable resource we have in our modern society. Without electricity, most of the things we do and rely on on a daily basis wouldn’t be there. So while electricity is so ingrained into our
                                        lives that we can take it for granted and hardly notice it’s there, if there’s an electrical problem, it can be difficult to notice anything else.</p>
                                    <p>Our electrical repair technicians know what a hassle any electrical problems can be, which is why we’ll always respond to any requests for service as quickly as possible. And because all of our technicians are licensed,
                                        background checked, and professionally trained, you’re guaranteed to receive the best quality service and workmanship available when you call us. We can assist with all your electric needs including:</p>
                                    
                                    <div class="tt-col-img__top">
                                        <div class="row tt-col-img">
                                            <div class="col-sm-6">
                                                <img src="{{asset('images/services_img02.jpg')}}" alt="">
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{asset('images/services_img03.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="tt-layout-title tt-layout-title__top">Always Hire a Professionals</h6>
                                    <p>No matter urgent any electrical repairs seem, it’s never okay to attempt to handle them on your own. Trying to take care of electrical problems without professional training is extremely dangerous. If you or someone else
                                        aren’t hurt during your attempt, there’s still a chance that you’ve left something undone that poses a huge risk to you, your home, or your family. In fact, faulty electrical wiring is the number one cause of house
                                        fires in the United States, according to the National Fire Protection Agency. So in order to make sure that your home is safe, always rely on a professional for any electrical services.</p>
                                    <blockquote class="blockquote02 blockquote02__top">
                                        When searching for a reliable electrician, call us at 
                                        <a href="tel:1(800)7654321">
                                            <span class="tt-base-color">1 (800) 765-43-21.</span>
                                        </a> We specialize in electrical repairs, indoor and outdoor lighting installations,
                                        panel upgrades, and even hot tub wiring!
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
                                        <div class="tt-item tt-item__open">
                                            <div class="tt-item__title">Commercial</div>
                                            <div class="tt-item__content">
                                                <ul>
                                                    <li><a href="#">Electrical Repairs</a></li>
                                                    <li><a href="#">Panel Upgrades</a></li>
                                                    <li><a href="#">Lighting Upgrades</a></li>
                                                    <li><a href="#">Surge Protection</a></li>
                                                    <li><a href="#">Generator Repair</a></li>
                                                    <li><a href="#">Install a Ceiling Fan</a></li>
                                                    <li><a href="#">Outdoor and Motion Lighting</a></li>
                                                    <li><a href="#">Digital Thermostat Installation</a></li>
                                                    <li><a href="#">Baseboard Heating Installation</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tt-item">
                                            <div class="tt-item__title">Industrial</div>
                                            <div class="tt-item__content">
                                                <ul>
                                                    <li><a href="#">Electrical Repairs</a></li>
                                                    <li><a href="#">Panel Upgrades</a></li>
                                                    <li><a href="#">Lighting Upgrades</a></li>
                                                    <li><a href="#">Surge Protection</a></li>
                                                    <li><a href="#">Generator Repair</a></li>
                                                    <li><a href="#">Install a Ceiling Fan</a></li>
                                                    <li><a href="#">Outdoor and Motion Lighting</a></li>
                                                    <li><a href="#">Digital Thermostat Installation</a></li>
                                                    <li><a href="#">Baseboard Heating Installation</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tt-item">
                                            <div class="tt-item__title">Residential</div>
                                            <div class="tt-item__content">
                                                <ul>
                                                    <li><a href="#">Electrical Repairs</a></li>
                                                    <li><a href="#">Panel Upgrades</a></li>
                                                    <li><a href="#">Lighting Upgrades</a></li>
                                                    <li><a href="#">Surge Protection</a></li>
                                                    <li><a href="#">Generator Repair</a></li>
                                                    <li><a href="#">Install a Ceiling Fan</a></li>
                                                    <li><a href="#">Outdoor and Motion Lighting</a></li>
                                                    <li><a href="#">Digital Thermostat Installation</a></li>
                                                    <li><a href="#">Baseboard Heating Installation</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-block-aside tt-block-aside__shadow">
                                <h3 class="tt-aside-title">Our Contacts</h3>
                                <div class="tt-aside-content">
                                    <ul class="box-aside-info">
                                        <li><i class="icon-map-marker"></i> 8494 Signal Hill Road Manassas, VA, 20110</li>
                                        <li><i class="icon-clock-circular-outline-1"></i> Mon-Fri 08:00 AM - 05:00 PM</li>
                                        <li><a href="tel:1(800)7654321"><i class="icon-telephone"></i> 1 (800) 765-43-21</a></li>
                                    </ul><a href="#" data-toggle="modal" data-target="#modalMakeAppointment" class="tt-btn btn__color01"><span class="icon-lightning"></span>Make an Appointent</a></div>
                            </div>
                            <div class="tt-block-aside">
                                <h3 class="tt-aside-title">Ask Your Question</h3>
                                <div class="tt-aside-content">
                                    <form id="questionform" class="form-default" method="post" novalidate="novalidate" action="#">
                                        <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your Name *"></div>
                                        <div class="form-group"><input type="text" name="email" class="form-control" placeholder="Your e-mail address *"></div>
                                        <div class="form-group"><input type="text" name="phonenumber" class="form-control" placeholder="Your phone number"></div>
                                        <div class="form-group"><textarea name="textarea" class="form-control" rows="4" placeholder="Your Qustion *"></textarea></div>
                                        <div class="form-group"><button class="tt-btn btn__color01" type="submit"><span class="icon-lightning"></span>Ask your question</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection