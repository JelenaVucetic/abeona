@extends('layouts.app')

@section('content')
    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar sub-page">
        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                <div class="col-md-9 content" id="content">

                    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Car Information</h3>
                    <div class="car-big-card alt">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="owl-carousel img-carousel">
                                    <div class="item">
                                        <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="assets/img/preview/cars/car-600x426x1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x1.jpg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="assets/img/preview/cars/car-600x426x2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/img/preview/cars/car-600x426x2.jpg" alt=""/></a>
                                    </div>
                                </div>
                                <div class="row car-thumbnails">
                                    <div class="col-xs-2 col-sm-2 col-md-3"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [0,300]);"><img src="assets/img/preview/cars/car-70x70x1.jpg" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-3"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [1,300]);"><img src="assets/img/preview/cars/car-70x70x2.jpg" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-3"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [2,300]);"><img src="assets/img/preview/cars/car-70x70x1.jpg" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-3"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [3,300]);"><img src="assets/img/preview/cars/car-70x70x2.jpg" alt=""/></a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="car-details">
                                    <div class="list">
                                        <ul>
                                            <li class="title">
                                                <h2>Volkswagen Golf <span>Diesel</span></h2>
                                                2.0 CC Comfortline 95 HP
                                            </li>
                                            <li>Fuel Diesel / 1600 cm3 Engine</li>
                                            <li>Under 25,000 Km</li>
                                            <li>Transmission Manual</li>
                                            <li>5 Year service included</li>
                                            <li>Manufacturing Year 2014</li>
                                            <li>5 Doors and Panorama View</li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <strong>220.0</strong> <span>$/for 8 day(s)</span> <i class="fa fa-info-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="page-divider half transparent"/>

                    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Extras & Frees</h3>
                    <form role="form" class="form-extras">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="left">
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxl1" type="checkbox">
                                        <label for="checkboxl1">Baby Seat <span class="pull-right">12 $ /for a day</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxl2" type="checkbox">
                                        <label for="checkboxl2">Car Seat For Childres <span class="pull-right">12 $ /for a day</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxl3" type="checkbox">
                                        <label for="checkboxl3">Navigation <span class="pull-right">42 $ /Total</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxl4" type="checkbox">
                                        <label for="checkboxl4">Excess Protection <span class="pull-right">12 $ /for a day</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxl5" type="checkbox">
                                        <label for="checkboxl5">Additional Driver <span class="pull-right">24 $ /Total</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="right">
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxr1" type="checkbox" checked="">
                                        <label for="checkboxr1">Ful Rent a Car Insures <span class="pull-right">Free</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxr2" type="checkbox" checked="">
                                        <label for="checkboxr2">Wheels and Glass Insures <span class="pull-right">Free</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxr3" type="checkbox" checked="">
                                        <label for="checkboxr3">Taking from Airport <span class="pull-right">Free</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxr4" type="checkbox" checked="">
                                        <label for="checkboxr4">Unlimited Kilometres for ALL cars <span class="pull-right">Free</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkboxr5" type="checkbox" checked="">
                                        <label for="checkboxr5">VAT <span class="pull-right">Included</span></label>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>

                    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Customer Information</h3>
                    <form action="#" class="form-delivery">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="radio radio-inline">
                                    <input type="radio" id="inlineRadio1" value="Mr" name="radioInline" checked="">
                                    <label for="inlineRadio1">Mr</label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" id="inlineRadio2" value="Ms" name="radioInline">
                                    <label for="inlineRadio2">Ms</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="fd-name" id="fd-name" title="Name is required" data-toggle="tooltip"
                                           class="form-control alt" type="text" placeholder="Name and Surname:*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="fd-name" id="fd-email" title="Email is required" data-toggle="tooltip"
                                           class="form-control alt" type="text" placeholder="Your Email Address:*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control alt" type="text" placeholder="Phone Number:"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control alt" type="text" placeholder="Cell Phone Number:"></div>
                            </div>
                        </div>
                    </form>

                    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Additional Information</h3>
                    <form action="#" class="form-additional">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <textarea name="fad-message" id="fad-message" title="Addition information is required" data-toggle="tooltip"
                                                  class="form-control alt" placeholder="Additional Information" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="overflowed reservation-now">
                        <div class="checkbox pull-left">
                            <input id="accept" type="checkbox" name="fd-name" title="Please accept" data-toggle="tooltip">
                            <label for="accept">I accept all information and Payments etc</label>
                        </div>
                        <a class="btn btn-theme pull-right btn-reservation-now" href="#">Reservation Now</a>
                        <a class="btn btn-theme pull-right btn-cancel btn-theme-dark" href="#">Cancel</a>
                    </div>

                </div>
                <!-- /CONTENT -->

                <!-- SIDEBAR -->
                <aside class="col-md-3 sidebar" id="sidebar">
                    <!-- widget detail reservation -->
                    <div class="widget shadow widget-details-reservation">
                        <h4 class="widget-title">Detail Reservation</h4>
                        <div class="widget-content">
                            <h5 class="widget-title-sub">Picking Up Location</h5>
                            <div class="media">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="media-body"><p>15 January 2015 / 08:00 am</p></div>
                            </div>
                            <div class="media">
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="media-body"><p>From SkyLine AirPort</p></div>
                            </div>
                            <h5 class="widget-title-sub">Droping Off Location</h5>
                            <div class="media">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="media-body"><p>15 January 2015 / 08:00 am</p></div>
                            </div>
                            <div class="media">
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="media-body"><p>From SkyLine AirPort</p></div>
                            </div>
                            <div class="button">
                                <a href="#" class="btn btn-block btn-theme btn-theme-dark">Update Reservation</a>
                            </div>
                        </div>
                    </div>
                    <!-- /widget detail reservation -->
                    <!-- widget testimonials -->
                    <div class="widget shadow">
                        <div class="widget-title">Testimonials</div>
                        <div class="testimonials-carousel">
                            <div class="owl-carousel" id="testimonials">
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                            <div class="testimonial-name">John Doe <span class="testimonial-position">Co- founder at Rent It</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                            <div class="testimonial-name">John Doe <span class="testimonial-position">Co- founder at Rent It</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                            <div class="testimonial-name">John Doe <span class="testimonial-position">Co- founder at Rent It</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /widget testimonials -->
                    <!-- widget helping center -->
                    <div class="widget shadow widget-helping-center">
                        <h4 class="widget-title">Helping Center</h4>
                        <div class="widget-content">
                            <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
                            <h5 class="widget-title-sub">+90 555 444 66 33</h5>
                            <p><a href="mailto:support@supportcenter.com">support@supportcenter.com</a></p>
                            <div class="button">
                                <a href="#" class="btn btn-block btn-theme btn-theme-dark">Support Center</a>
                            </div>
                        </div>
                    </div>
                    <!-- /widget helping center -->
                </aside>
                <!-- /SIDEBAR -->

            </div>
        </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->
@endsection
