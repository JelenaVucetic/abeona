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
                                        <a class="btn btn-zoom" href="assets/car-images/image0.jpeg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="assets/car-images/image0.jpeg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/car-images/image0.jpeg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="assets/car-images/image1.jpeg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="assets/car-images/image1.jpeg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/car-images/image1.jpeg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="assets/car-images/image2.jpeg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="assets/car-images/image2.jpeg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/car-images/image2.jpeg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="assets/car-images/image3.jpeg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="assets/car-images/image3.jpeg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/car-images/image3.jpeg" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="assets/car-images/image4.jpeg" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="assets/car-images/image4.jpeg" data-gal="prettyPhoto"><img class="img-responsive" src="assets/car-images/image4.jpeg" alt=""/></a>
                                    </div>
                                </div>
                                <div class="row car-thumbnails">
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [0,300]);"><img style="width: 100%;" src="assets/car-images/image0.jpeg" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [1,300]);"><img style="width: 100%;" src="assets/car-images/image1.jpeg" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [2,300]);"><img style="width: 100%;" src="assets/car-images/image2.jpeg" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [3,300]);"><img style="width: 100%;" src="assets/car-images/image3.jpeg" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [4,300]);"><img style="width: 100%;" src="assets/car-images/image4.jpeg" alt=""/></a></div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="car-details">
                                    <div class="price">
                                        <strong>220.0</strong> <span>$/for 8 day(s)</span> <i class="fa fa-info-circle"></i>
                                    </div>

                                    <div class="list">
                                        <ul>
                                            <li class="title">
                                                <h2>Volkswagen Golf</h2>
                                            </li>
                                            <li>Fuel Diesel</li>
                                            <li>Transmission Manual</li>
                                            <li>5 Doors</li>
                                            <li>4 Persons</li>
                                        </ul>
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
                                        <input id="second-driver" name="second-driver" type="checkbox" class="car-extras" value="20">
                                        <label for="second-driver">Second Driver<span class="pull-right">20 $ /Total</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="unlimited-mileage" name="unlimited-mileage" type="checkbox" class="car-extras" value="20">
                                        <label for="unlimited-mileage">Unlimited Mileage<span class="pull-right">20 $ /Total</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="border-crossing" name="border-crossing" type="checkbox" class="car-extras" value="20">
                                        <label for="border-crossing">Border Crossing <span class="pull-right">20 $ /Total</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="baby-seat-small" name="baby-seat-small" type="checkbox" class="car-extras" value="0">
                                        <label for="baby-seat-small">Baby Seat Small <span class="pull-right">Free</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="baby-seat-big" name="baby-seat-big" type="checkbox" class="car-extras" value="0">
                                        <label for="baby-seat-big">Baby Seat Big <span class="pull-right">Free</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="baby-seat-booster" name="baby-seat-booster" type="checkbox" class="car-extras" value="0">
                                        <label for="baby-seat-booster">Baby Seat Booster <span class="pull-right">Free</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="right">
                                    <div class="checkbox checkbox-danger">
                                        <input id="insurance" name="insurance" type="checkbox" checked="" class="car-extras" value="12">
                                        <label for="insurance">Ful Rent a Car Insures <span class="pull-right" >12 $ /for a day</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="participation-in-the-demage" name="participation-in-the-demage" type="checkbox" checked="" class="car-extras" value="12">
                                        <label for="participation-in-the-demage">Participation in the damage<span class="pull-right">12 $ /for a day</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="deposit" name="deposit" type="checkbox" checked="" class="car-extras" value="12">
                                        <label for="deposit">Deposit<span class="pull-right">12 $ /for a day</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="gps" name="gps" type="checkbox" checked="" class="car-extras" value="0">
                                        <label for="gps">Gps<span class="pull-right">Free</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="green-card" name="green-card" type="checkbox" checked="" class="car-extras" value="0">
                                        <label for="green-card">Green Card <span class="pull-right">Included</span></label>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>

                    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Customer Information</h3>
                    <form action="#" class="form-delivery">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="first-name" id="first-name" title="First Name is required" data-toggle="tooltip"
                                           class="form-control alt customer-info" type="text" placeholder="First Name:*" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="last-name" id="last-name" title="Last Name is required" data-toggle="tooltip"
                                           class="form-control alt customer-info" type="text" placeholder="Last Name:*" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" id="email" title="Email is required" data-toggle="tooltip"
                                           class="form-control alt customer-info" type="text" placeholder="Your Email Address:*" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="phone-number" id="phone-number" title="Phone Number is required" data-toggle="tooltip"
                                        class="form-control alt customer-info" type="text" placeholder="Phone Number:*" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                        </div>
                    </form>

                    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Additional Information</h3>
                    <form action="#" class="form-additional">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <textarea name="additional-info" id="additional-info" title="Addition information" data-toggle="tooltip"
                                                  class="form-control alt customer-info" placeholder="Additional Information" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="overflowed reservation-now">
                        <div class="checkbox pull-left">
                            <input id="accept" type="checkbox" name="fd-name" title="Please accept" data-toggle="tooltip">
                            <label for="accept">I accept all information and Payments etc</label>
                        </div>
                        <button id="reservation-btn" class="btn btn-theme pull-right btn-reservation-now">Make a Reservation</button>

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
                            <div class="media" style="display: flex">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="media-body" >
                                    <input name="pick-up-date" class="reservation-info" disabled value="15 January 2015">
                                    <input name="pick-up-time" class="reservation-info"  disabled value="08:00 am">
                                </div>
                            </div>
                            <div class="media" style="display:flex;" >
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="media-body">
                                    <input name="pick-up-location" class="reservation-info" disabled value="From SkyLine AirPort">
                                </div>
                            </div>
                            <h5 class="widget-title-sub">Droping Off Location</h5>
                            <div class="media" style="display:flex;">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="media-body">
                                    <input name="pick-off-date" class="reservation-info" disabled value="15 January 2015">
                                    <input name="pick-off-time" class="reservation-info"  disabled value="08:00 am">
                                </div>
                            </div>
                            <div class="media" style="display: flex">
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="media-body">
                                    <input name="pick-off-location"  class="reservation-info" disabled value="From SkyLine AirPort">
                                </div>
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

@section('modal')
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="car-details">
                        <div style="display: flex; align-items: baseline; flex-wrap: wrap">
                            <div>
                                <h4>Volkswagen Golf</h4>
                            </div>

                            <div class="price" style="padding-left: 20px">
                                <strong>220.0</strong> <span>$/for 8 day(s)</span>
                            </div>
                        </div>

                    </div>
                   <div class="container">
                       <div class=" ow widget-content" style="display: flex; flex-wrap: wrap">
                           <div class="col-6">
                               <h5 class="widget-title-sub">Picking Up Location</h5>
                               <div class="media" style="display: flex">
                                   <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                   <div class="" style="width: fit-content;display: flex;flex-direction: column;">
                                       <input name="pick-up-date" class="reservation-info" disabled value="15 January 2015">
                                       <input name="pick-up-time" class="reservation-info"  disabled value="08:00 am">
                                   </div>
                               </div>
                               <div class="media" style="display:flex;" >
                                   <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                   <div class="" style="width: fit-content;">
                                       <input name="pick-up-location" class="reservation-info" disabled value="From SkyLine AirPort">
                                   </div>
                               </div>
                           </div>
                           <div class="col-6">
                               <h5 class="widget-title-sub">Droping Off Location</h5>
                               <div class="media" style="display:flex;">
                                   <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                   <div class="" style="width: fit-content;display: flex;flex-direction: column;">
                                       <input name="pick-off-date" class="reservation-info" disabled value="15 January 2015">
                                       <input name="pick-off-time" class="reservation-info"  disabled value="08:00 am">
                                   </div>
                               </div>
                               <div class="media" style="display: flex">
                                   <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                   <div class="" style="width: fit-content;">
                                       <input name="pick-off-location"  class="reservation-info" disabled value="From SkyLine AirPort">
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="container">
                        <h5 class="widget-title-sub">Additional Equipment</h5>
                        <div class="list">
                            <ul class="append" style="padding-top:10px">
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <div class="total-price">
                            <h4>Total</h4>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-theme pull-right btn-reservation-now">Confirm</button>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        // A $( document ).ready() block.
        $( document ).ready(function() {
            let customerInfo = {};
            let carExtras = {};
            let reservationInfo = {};

            let total = 220 // car price

            $('#reservation-btn').on('click', function (event) {

                $('.car-extras:checkbox:checked').map(function() {
                    carExtras[$(this).attr("name")] = this.value
                });
                console.log(carExtras)

                $.each(carExtras, function(index, value) {
                    let feeName = index.replace(/-+/g, ' ').toLowerCase().replace(/\b[a-z]/g, function(letter) {
                        return letter.toUpperCase();
                    });
                    total += parseFloat(value)

                    $(".append").append(
                        '<li>' +
                            feeName + ' <span>' + value + '$ </span>' +
                        '</li>');

                });

                $(".total-price").append(
                    ' <span>' + total + '$ </span>'
                    );

                $('input.customer-info').map(function() {
                    customerInfo[$(this).attr("name")] = this.value
                });

                customerInfo[$('textarea.customer-info').attr("name")] = $('textarea.customer-info').val()

                console.log(customerInfo)

                $('input.reservation-info').map(function() {
                    reservationInfo[$(this).attr("name")] = this.value
                });

                console.log(reservationInfo)


                for(let i = 0; i < carExtras.length; i++) {
                    console.log(carExtras[i])
                }
                const firstName = $(".form-delivery input#first-name");
                if (firstName.val() === "" || firstName.val() === "First Name:*" ) {
                    firstName.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    firstName.focus();
                    return false;
                }

                const lastName = $(".form-delivery input#last-name");
                if (lastName.val() === "" || lastName.val() === "Last Name:*" ) {
                    lastName.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    lastName.focus();
                    return false;
                }

                const email = $(".form-delivery input#email");
                if (email.val() === "" || email.val() === "Your Email Address:*" ) {
                    email.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    email.focus();
                    return false;
                }

                const phone = $(".form-delivery input#phone-number");
                if (phone.val() === "" || phone.val() === "Phone Number:*" ) {
                    phone.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    phone.focus();
                    return false;
                }

                $('#reservationModal').modal('show')
            })


            $('#reservationModal').on('shown.bs.modal', function () {



            })
        });


    </script>

@endsection
