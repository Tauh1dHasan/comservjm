<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Electron - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,maximum-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>

<body>
    <nav class="panel-menu" id="mobile-menu">
        <ul></ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <header id="tt-header">
        <!-- holder-top (mobile) -->
        <div class="holder-top-mobile d-block d-md-none">
            <div class="h-topbox__content">
                <div class="tt-item">
                    <div class="tt-item__icon"><span class="icon-map-marker"></span></div>
                    <div class="tt-item__text">
                        <address>8494 Signal Hill Road Manassas, VA, 20110</address>
                    </div>
                </div>
                <div class="tt-item">
                    <div class="tt-item__icon"><span class="icon-482948"></span></div>
                    <div class="tt-item__text"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></div>
                </div>
                <div class="tt-item">
                    <div class="tt-item__icon"><span class="icon-telephone"></span></div>
                    <div class="tt-item__text">
                        <address><a href="tel:1(800)7654321">1 (800) 765-43-21</a></address>
                    </div>
                </div>
                <div class="tt-item">
                    <div class="tt-item__icon"><span class="icon-clock-circular-outline-1"></span></div>
                    <div class="tt-item__text">Mon-Fri 08:00 AM - 05:00 PM, Sat-Sun</div>
                </div>
            </div><a href="#" class="h-topbox__btn" id="js-toggle-h-holder"><i class="tt-arrow down"></i></a>
        </div>
        <!-- /holder-top (mobile) -->
        <!-- holder-top (desktop) -->
        <div class="holder-top-desktop d-none d-md-block">
            <div class="container container-lg-fluid">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <div class="h-info01">
                            <div class="tt-item">
                                <address>
                                    <span class="icon-map-marker"></span>8494 Signal Hill Road Manassas, VA, 20110
								</address>
                            </div>
                            <div class="tt-item">
                                <span class="icon-clock-circular-outline-1"></span>Mon-Fri 08:00 AM - 05:00 PM
                            </div>
                        </div>
                    </div>
                    <div class="col-auto ml-auto">
                        <div class="tt-obj">
                            <div class="h-info02">
                                <div class="tt-item">
                                    <address>
                                        <a href="tel:1(800)7654321">
                                            <span class="icon-telephone"></span>1 (800) 765-43-21
                                        </a>
                                    </address>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /holder-top (desktop) -->
        <!-- holder- -->
        <div id="js-init-sticky">
            <div class="tt-holder-wrapper">
                <div class="container container-lg-fluid">
                    <div class="tt-holder">
                        <div class="tt-col-logo">
                            <!-- logo -->
                            <a href="{{route('frontend.home')}}" class="tt-logo tt-logo-alignment">
                                <span class="tt-icon">
                                    <img src="{{asset('images/logo.png')}}" alt="">
                                </span>ComSrv
                            </a>
                            <!-- /logo -->
                        </div>
                        <div class="tt-col-objects tt-col-wide text-center">
                            <!-- desktop-nav -->
                            <nav id="tt-nav">
                                <ul>
                                    <li>
                                        <a href="{{route('frontend.home')}}">
                                            <div class="electric-btn"><span class="text">Home</span>
                                                <div class="mask"><span>Home</span></div>
                                                <div class="mask"><span>Home</span></div>
                                                <div class="mask"><span>Home</span></div>
                                                <div class="mask"><span>Home</span></div>
                                                <div class="mask"><span>Home</span></div>
                                                <div class="mask"><span>Home</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('frontend.about')}}">
                                            <div class="electric-btn"><span class="text">About Us</span>
                                                <div class="mask"><span>About Us</span></div>
                                                <div class="mask"><span>About Us</span></div>
                                                <div class="mask"><span>About Us</span></div>
                                                <div class="mask"><span>About Us</span></div>
                                                <div class="mask"><span>About Us</span></div>
                                                <div class="mask"><span>About Us</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                            <div class="electric-btn"><span class="text">Services</span>
                                                <div class="mask"><span>Services</span></div>
                                                <div class="mask"><span>Services</span></div>
                                                <div class="mask"><span>Services</span></div>
                                                <div class="mask"><span>Services</span></div>
                                                <div class="mask"><span>Services</span></div>
                                                <div class="mask"><span>Services</span></div>
                                            </div>
                                        </a>
                                        <ul>
                                            <li><a href="services-item.html">Services Item</a></li>
                                            <li><a href="services-item.html">Sub menu level 01</a></li>
                                            <li><a href="services-item.html">Sub menu level 01</a>
                                                <ul>
                                                    <li><a href="services-item.html">Sub menu level 02</a></li>
                                                    <li><a href="services-item.html">Sub menu level 02</a></li>
                                                    <li><a href="services-item.html">Sub menu level 02</a>
                                                        <ul>
                                                            <li><a href="services-item.html">Sub menu level 03</a></li>
                                                            <li><a href="services-item.html">Sub menu level 03</a></li>
                                                            <li><a href="services-item.html">Sub menu level 03</a></li>
                                                            <li><a href="services-item.html">Sub menu level 03</a></li>
                                                            <li><a href="services-item.html">Sub menu level 03</a></li>
                                                            <li><a href="services-item.html">Sub menu level 03</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="services-item.html">Sub menu level 02</a></li>
                                                    <li><a href="services-item.html">Sub menu level 02</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="services-item.html">Sub menu level 01</a></li>
                                            <li><a href="services-item.html">Sub menu level 01</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="gallery.html">
                                            <div class="electric-btn"><span class="text">Gallery</span>
                                                <div class="mask"><span>Gallery</span></div>
                                                <div class="mask"><span>Gallery</span></div>
                                                <div class="mask"><span>Gallery</span></div>
                                                <div class="mask"><span>Gallery</span></div>
                                                <div class="mask"><span>Gallery</span></div>
                                                <div class="mask"><span>Gallery</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="shop.html">
                                            <div class="electric-btn"><span class="text">Shop</span>
                                                <div class="mask"><span>Shop</span></div>
                                                <div class="mask"><span>Shop</span></div>
                                                <div class="mask"><span>Shop</span></div>
                                                <div class="mask"><span>Shop</span></div>
                                                <div class="mask"><span>Shop</span></div>
                                                <div class="mask"><span>Shop</span></div>
                                            </div>
                                        </a>
                                        <ul>
                                            <li><a href="shop-item.html">Shop Item</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="faq.html">
                                            <div class="electric-btn"><span class="text">FAQ</span>
                                                <div class="mask"><span>FAQ</span></div>
                                                <div class="mask"><span>FAQ</span></div>
                                                <div class="mask"><span>FAQ</span></div>
                                                <div class="mask"><span>FAQ</span></div>
                                                <div class="mask"><span>FAQ</span></div>
                                                <div class="mask"><span>FAQ</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <div class="electric-btn"><span class="text">Contacts</span>
                                                <div class="mask"><span>Contacts</span></div>
                                                <div class="mask"><span>Contacts</span></div>
                                                <div class="mask"><span>Contacts</span></div>
                                                <div class="mask"><span>Contacts</span></div>
                                                <div class="mask"><span>Contacts</span></div>
                                                <div class="mask"><span>Contacts</span></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- /desktop-nav -->
                        </div>
                        <div class="tt-col-objects">
                            <div class="tt-col__item d-block d-lg-none">
                                <div class="tt-obj tt-obj-cart js-dropdown-cart"><a href="#" class="tt-obj__btn"><i
											class="icon-808584"></i>
										<div class="tt-obj__badge">2</div>
									</a>
                                    <div class="tt-obj__dropdown"></div>
                                </div>
                            </div>
                            <div class="tt-col__item d-block d-lg-none">
                                <a href="#" id="tt-menu-toggle" class="icon-545705"></a>
                            </div>
                            <div class="tt-col__item d-none d-lg-block">
                                <a href="#" class="tt-btn btn__color01" data-toggle="modal" data-target="#modalMakeAppointment">
                                    <span class="icon-lightning"></span>Appointent
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>