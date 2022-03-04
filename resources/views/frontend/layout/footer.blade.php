<footer id="tt-footer">
    <div class="footer-wrapper">
        <div class="container container-lg-fluid container-lg__no-gutters">
            <div class="f-holder row no-gutters">
                <div class="col-xl-7">
                    <div class="additional-strut">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="f-logo">
                                    <a href="index.html" class="f-logo">
                                        <span class="tt-icon">
                                            <img src="images/logo-dark.png" alt="">
                                        </span>
                                        <span class="tt-text">Electron</span>
                                    </a>
                                    <!-- /logo -->
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="f-info-text">Our experienced electricians are highly trained in all aspects of electrical service, from office lighting and security systems to emergency repair.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-5">
                            <nav class="f-nav" id="f-nav">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Prices</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-6 col-md-7">
                            <ul class="f-info-icon">
                                <li><span class="icon-map-marker"></span> 8494 Signal Hill Road Manassas,<br>VA, 20110
                                </li>
                                <li><span class="icon-clock-circular-outline-1"></span> Mon-Fri 08:00 AM - 05:00 PM
                                </li>
                                <li><a href="tel:1(800)7654321"><span class="icon-telephone"></span> 1 (800)
                                        765-43-21</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map"></div>
            <div class="f-copyright row no-gutters">
                <div class="col-sm-auto">&copy; 2020 Electrical Services. All Rights Reserved.</div>
                <div class="col-sm-auto ml-sm-auto">
                    <ul class="f-social">
                        <li>
                            <a href="#" class="icon-twitter-logo-button"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-facebook-logo-button"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-instagram-logo"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script async src="{{asset('js/bundle.js')}}"></script>
<!-- modal - Make an Appointment -->
<div class="modal fade" id="modalMakeAppointment" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body form-default modal-layout-dafault">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="icon-860796"></span>
                </button>
                <div class="modal-titleblock">
                    <div class="modal-title">Make an Appointment</div>
                </div>
                <form class="form-modal" id="jsFormMakeAppointment" method="post" novalidate="novalidate" action="#">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="modalName01" placeholder="Your Name *">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" id="modalEmail01" placeholder="Your e-mail address *">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="modalPhone01" placeholder="Your phone number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="modalAddress" class="form-control" id="modalAddress" placeholder="Address *">
                    </div>
                    <div class="form-group">
                        <div class="custom-select">
                            <select name="typeofholiday" class="tt-select">
                                <option value="Service">Service</option>
                                <option value="Service 02">Service 02</option>
                                <option value="Service 03">Service 03</option>
                                <option value="Service 04">Service 04</option>
                                <option value="Service 05">Service 05</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="date" placeholder="Date of visit" autocomplete="off" data-timepicker="true" class="js_datepicker-1 form-control" type="text">
                        <div class="form-group__icon icon-747993"></div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Your comment"></textarea>
                    </div>
                    <button type="submit" class="tt-btn btn__color01">
                        <span class="icon-lightning"></span>Explore services
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<a href="#" id="js-backtotop" class="tt-back-to-top">
    <i class="icon-lightning"></i>
</a>
</body>

</html>