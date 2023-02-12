@extends('layouts.app')

@section('content')
    <section class="page-section no-padding">
        <div class="container full-width">
            <div class="main-slider">
                <div class="item slide3 ver3">
                    <div class="container">
                        <div class="div-table" style="padding-top: 100px">
                            <div class="div-cell">
                                <div class="caption-content">
                                    <!-- Search form -->
                                    <div class="form-search light">
                                        <form id="find-car" action="#">
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                                            <div class="form-title">
                                                <i class="fa fa-globe"></i>
                                                <h2>Search for Cheap Rental Cars Wherever Your Are</h2>
                                            </div>

                                            <div class="row row-inputs">
                                                <div class="container-fluid">
                                                    <div class="col-sm-12">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-up">Picking Up
                                                                Location</label>
                                                            <select name="pick-up-location" id="pick-up" class="form-control"  >
                                                                <option value="tivat aerodrom">Tivat Aerodrom</option>
                                                                <option value="tivat">Tivat</option>
                                                                <option value="podgorica aerodrom">Podgorica Aerodrom</option>
                                                                <option value="podgorica">Podgorica</option>
                                                                <option value="cetinje">Cetinje</option>
                                                                <option value="bar">Bar</option>
                                                                <option value="ulcinj">Ulcinj</option>
                                                                <option value="petrovac">Petrovac</option>
                                                                <option value="budva">Budva</option>
                                                                <option value="kotor">Kotor</option>
                                                                <option value="herceg novi">Herceg Novi</option>
                                                                <option value="niksic">Niksic</option>
                                                            </select>
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-location-arrow"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-off-location">Picking Off
                                                                Location</label>
                                                            <select name="pick-off-location" id="pick-off-location"
                                                                    class="form-control"  >
                                                                <option value="tivat aerodrom">Tivat Aerodrom</option>
                                                                <option value="tivat">Tivat</option>
                                                                <option value="podgorica aerodrom">Podgorica Aerodrom</option>
                                                                <option value="podgorica">Podgorica</option>
                                                                <option value="cetinje">Cetinje</option>
                                                                <option value="bar">Bar</option>
                                                                <option value="ulcinj">Ulcinj</option>
                                                                <option value="petrovac">Petrovac</option>
                                                                <option value="budva">Budva</option>
                                                                <option value="kotor">Kotor</option>
                                                                <option value="herceg novi">Herceg Novi</option>
                                                                <option value="niksic">Niksic</option>
                                                            </select>
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-location-arrow"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row row-inputs">
                                                <div class="container-fluid">
                                                    <div class="col-sm-7">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-up-date">Picking Up Date</label>
                                                            <input type="text" class="form-control datepicker"
                                                                   name="pick-up-date"
                                                                   id="pick-up-date" placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-up-time">Picking Up Time</label>
                                                            <div class='input-group date' id='pick-up-time'>
                                                                <input type='text'
                                                                       value="20:00"
                                                                       name="pick-up-time" class="form-control" />
                                                                <span class="input-group-addon">
                                                               <span class="glyphicon glyphicon-time"></span>
                                                               </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row row-inputs">
                                                <div class="container-fluid">
                                                    <div class="col-sm-7">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-off-date">Picking Off Date</label>
                                                            <input type="text" class="form-control datepicker"
                                                                   name="pick-off-date"
                                                                   id="pick-off-date" placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-off-time">Picking Off Time</label>
                                                            <div class='input-group date' id='pick-off-time'>
                                                                <input type='text'
                                                                       value="20:00"
                                                                       name="pick-off-time" class="form-control" />
                                                                <span class="input-group-addon">
                                                               <span class="glyphicon glyphicon-time"></span>
                                                               </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row row-submit">
                                                <div style="display: flex;justify-content: center;">
                                                    <button type="submit" class="btn btn-submit btn-theme pull-right" style="margin-bottom: 5px">Find Car
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Search form -->


                                    <h2 class="caption-title">For rental Cars</h2>
                                    <h3 class="caption-subtitle">Best Deals</h3>
                                    <p class="caption-text">
                                        Sales Up %45 Off<br/>
                                        All Rental Cars Start from 49$
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">

            <h2 class="section-title">
                <small>Great Rental Offers for You</small>
                <span>Our Fleet</span>
            </h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto"
                               href="assets/img/preview/cars/car-370x220x1.jpg">
                                <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                            <div class="caption-text">Start from 39$/per a day</div>
                            <div class="buttons">
                                <a class="btn btn-theme" href="#">Rent It</a>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-dashboard"></i> Diesel</td>
                                    <td><i class="fa fa-cog"></i> Auto</td>
                                    <td><img style="width: 15px" src="assets/img/car.png" alt=""> 5</td>
                                    <td><i class="fa fa-users"></i> 4</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto"
                               href="assets/img/preview/cars/car-370x220x1.jpg">
                                <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                            <div class="caption-text">Start from 39$/per a day</div>
                            <div class="buttons">
                                <a class="btn btn-theme" href="#">Rent It</a>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-dashboard"></i> Diesel</td>
                                    <td><i class="fa fa-cog"></i> Auto</td>
                                    <td><img style="width: 15px" src="assets/img/car.png" alt=""> 5</td>
                                    <td><i class="fa fa-users"></i> 4</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto"
                               href="assets/img/preview/cars/car-370x220x1.jpg">
                                <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                            <div class="caption-text">Start from 39$/per a day</div>
                            <div class="buttons">
                                <a class="btn btn-theme" href="#">Rent It</a>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-dashboard"></i> Diesel</td>
                                    <td><i class="fa fa-cog"></i> Auto</td>
                                    <td><img style="width: 15px" src="assets/img/car.png" alt=""> 5</td>
                                    <td><i class="fa fa-users"></i> 4</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto"
                               href="assets/img/preview/cars/car-370x220x1.jpg">
                                <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                            <div class="caption-text">Start from 39$/per a day</div>
                            <div class="buttons">
                                <a class="btn btn-theme" href="#">Rent It</a>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-dashboard"></i> Diesel</td>
                                    <td><i class="fa fa-cog"></i> Auto</td>
                                    <td><img style="width: 15px" src="assets/img/car.png" alt=""> 5</td>
                                    <td><i class="fa fa-users"></i> 4</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto"
                               href="assets/img/preview/cars/car-370x220x1.jpg">
                                <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                            <div class="caption-text">Start from 39$/per a day</div>
                            <div class="buttons">
                                <a class="btn btn-theme" href="#">Rent It</a>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-dashboard"></i> Diesel</td>
                                    <td><i class="fa fa-cog"></i> Auto</td>
                                    <td><img style="width: 15px" src="assets/img/car.png" alt=""> 5</td>
                                    <td><i class="fa fa-users"></i> 4</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto"
                               href="assets/img/preview/cars/car-370x220x1.jpg">
                                <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="#">VW POLO TRENDLINE 2.0 TDI</a></h4>
                            <div class="caption-text">Start from 39$/per a day</div>
                            <div class="buttons">
                                <a class="btn btn-theme" href="#">Rent It</a>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-dashboard"></i> Diesel</td>
                                    <td><i class="fa fa-cog"></i> Auto</td>
                                    <td><img style="width: 15px" src="assets/img/car.png" alt=""> 5</td>
                                    <td><i class="fa fa-users"></i> 4</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /PAGE -->


    <!-- PAGE -->
    <section class="page-section testimonials">
        <div class="container">
            <div class="testimonials-carousel">
                <div class="owl-carousel" id="testimonials">
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object testimonial-avatar"
                                         src="assets/img/preview/avatars/testimonial-140x140x1.jpg"
                                         alt="Testimonial avatar">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla
                                    facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
                                    ultrices posuere cubilia.
                                </div>
                                <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object testimonial-avatar"
                                         src="assets/img/preview/avatars/testimonial-140x140x1.jpg"
                                         alt="Testimonial avatar">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla
                                    facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
                                    ultrices posuere cubilia.
                                </div>
                                <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object testimonial-avatar"
                                         src="assets/img/preview/avatars/testimonial-140x140x1.jpg"
                                         alt="Testimonial avatar">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla
                                    facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
                                    ultrices posuere cubilia.
                                </div>
                                <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object testimonial-avatar"
                                         src="assets/img/preview/avatars/testimonial-140x140x1.jpg"
                                         alt="Testimonial avatar">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla
                                    facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
                                    ultrices posuere cubilia.
                                </div>
                                <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section find-car dark">
        <div class="container">

            <form action="#" class="form-find-car">
                <div class="row">

                    <div class="col-md-3">

                        <h2 class="section-title text-left no-margin">
                            <small>Great Rental Cars</small>
                            <span>Find your car</span>
                        </h2>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group has-icon has-label">
                            <label for="formFindCarLocation">Picking Up Location</label>
                            <input type="text" class="form-control" id="formFindCarLocation"
                                   placeholder="Airport or Anywhere">
                            <span class="form-control-icon"><i class="fa fa-location-arrow"></i></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group has-icon has-label">
                            <label for="formFindCarDate">Picking Up Date</label>
                            <input type="text" class="form-control datepicker" id="formFindCarDate"
                                   placeholder="dd/mm/yyyy">
                            <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group has-icon has-label">
                            <label for="formFindCarCategory">Price Category</label>
                            <input type="text" class="form-control" id="formFindCarCategory"
                                   placeholder="Select Car Group">
                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button type="submit" id="formFindCarSubmit" class="btn btn-block btn-submit btn-theme">Find
                                Car
                            </button>
                        </div>
                    </div>

                </div>
            </form>

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section no-padding no-bottom-space-off">
        <div class="container full-width">

            <!-- Google map -->
            <div class="google-map">
                <div id="map-canvas"></div>
            </div>
            <!-- /Google map -->

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section contact dark">
        <div class="container">

            <!-- Get in touch -->

            <h2 class="section-title">
                <small>Feel Free to Say Hello!</small>
                <span>Get in Touch With Us</span>
            </h2>

            <div class="row">
                <div class="col-md-6">
                    <!-- Contact form -->
                    <form name="contact-form" method="post" action="#" class="contact-form alt" id="contact-form">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="outer required">
                                    <div class="form-group af-inner has-icon">
                                        <label class="sr-only" for="name">Name</label>
                                        <input
                                            type="text" name="name" id="name" placeholder="Name" value="" size="30"
                                            data-toggle="tooltip" title="Name is required"
                                            class="form-control placeholder"/>
                                        <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="outer required">
                                    <div class="form-group af-inner has-icon">
                                        <label class="sr-only" for="email">Email</label>
                                        <input
                                            type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                            data-toggle="tooltip" title="Email is required"
                                            class="form-control placeholder"/>
                                        <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group af-inner has-icon">
                            <label class="sr-only" for="input-message">Message</label>
                            <textarea
                                name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                                data-toggle="tooltip" title="Message is required"
                                class="form-control placeholder"></textarea>
                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <input type="submit" name="submit"
                                       class="form-button form-button-submit btn btn-block btn-theme" id="submit_btn"
                                       value="Send message"/>
                            </div>
                        </div>

                    </form>
                    <!-- /Contact form -->
                </div>
                <div class="col-md-6">

                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>

                    <ul class="media-list contact-list">
                        <li class="media">
                            <div class="media-left"><i class="fa fa-home"></i></div>
                            <div class="media-body">Adress: 1600 Pennsylvania Ave NW, Washington, D.C.</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa"></i></div>
                            <div class="media-body">DC 20500, ABD</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-phone"></i></div>
                            <div class="media-body">Support Phone: 01865 339665</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-envelope"></i></div>
                            <div class="media-body">E mails: info@example.com</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-clock-o"></i></div>
                            <div class="media-body">Working Hours: 09:30-21:00 except on Sundays</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-map-marker"></i></div>
                            <div class="media-body">View on The Map</div>
                        </li>
                    </ul>

                </div>
            </div>

            <!-- /Get in touch -->

        </div>
    </section>
    <!-- /PAGE -->
@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('#token').val()
            }
        });

        $('#find-car').submit(function(e){

            e.preventDefault();

            var pickUpLocation = $("input[name=pick-up-location]").val();
            var pickOffLocation = $("input[name=pick-off-location]").val();
            var pickUpDate = $("input[name=pick-up-date]").val();
            var pickOffDate = $("input[name=pick-off-date]").val();
            var pickUpTime = $("input[name=pick-up-time]").val();
            var pickOffTime = $("input[name=pick-off-time]").val();


            $.ajax({
                type:'POST',
                url:"{{ route('booking', 1) }}",
                data:{
                    pickUpLocation: pickUpLocation,
                    pickOffLocation: pickOffLocation,
                    pickUpDate: pickUpDate,
                    pickOffDate: pickOffDate,
                    pickUpTime: pickUpTime,
                    pickOffTime: pickOffTime,
                },
                success:function(data){
                    alert('success');
                }
            });

        });


    </script>


@endsection
