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
                                                <h2>{{ __('Search for Cheap Rental Cars Wherever Your Are') }}</h2>
                                            </div>

                                            <div class="row row-inputs">
                                                <div class="container-fluid">
                                                    <div class="col-sm-12">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-up">{{ __('Picking Up Location') }}</label>
                                                            <select name="pick-up-location" id="pick-up" class="form-control"
                                                                    title="Pick up location is required" data-toggle="tooltip" >
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
                                                            <label for="pick-off-location">{{ __('Picking Off Location') }}</label>
                                                            <select name="pick-off-location" id="pick-off-location"
                                                                    class="form-control" title="Pick off location is required" data-toggle="tooltip" >
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
                                                            <label for="pick-up-date">{{ __('Picking Up Date') }}</label>
                                                            <input type="text" class="form-control datepicker"
                                                                   name="pick-up-date"
                                                                   id="pick-up-date"
                                                                   title="Pick up date is required" data-toggle="tooltip"
                                                                   placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-up-time">{{ __('Picking Up Time') }}</label>
                                                            <div class='input-group date' id='pick-up-time'>
                                                                <input type='text'
                                                                       value="20:00"
                                                                       title="Pick up time is required" data-toggle="tooltip"
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
                                                            <label for="pick-off-date">{{ __('Picking Off Date') }}</label>
                                                            <input type="text" class="form-control datepicker"
                                                                   name="pick-off-date"
                                                                   title="Pick off date is required" data-toggle="tooltip"
                                                                   id="pick-off-date" placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-off-time">{{ __('Picking Off Time') }}</label>
                                                            <div class='input-group date' id='pick-off-time'>
                                                                <input type='text'
                                                                       value="20:00"
                                                                       title="Pick off time is required" data-toggle="tooltip"
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
                                                    <button type="submit" class="btn btn-submit btn-theme pull-right" style="margin-bottom: 5px">
                                                        {{ __('Find Car') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Search form -->


                                    <h2 class="caption-title">{{ __('Rent Your Ride') }}</h2>
                                    <h3 class="caption-subtitle">{{ __('Find Your Perfect Car Rental') }}</h3>
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
                <small>{{ __('Great Rental Offers for You') }}</small>
                <span>{{ __('Our Fleet') }}</span>
            </h2>

            @foreach ($cars->chunk(3) as $cars_set)
                <div class="row">
                    @foreach ($cars_set as $car)
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
                                    <h4 class="caption-title"><a href="#">{{ $car->name }}</a></h4>
                                    <div class="caption-text">{{ __('Start from price a day', ['price' => 39 ]) }}</div>
                                    <div class="buttons">
                                        <a class="btn btn-theme" href="#">{{ __('Rent It') }}</a>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td><i class="fa fa-dashboard"></i> {{ $car->motor }}</td>
                                            <td><i class="fa fa-cog"></i> {{ $car->transmission }}</td>
                                            <td><img style="width: 15px" src="{{ asset('assets/img/door.jpg') }}" alt=""> {{ $car->doors }}</td>
                                            <td><i class="fa fa-users"></i> {{ $car->passenger }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
    <!-- /PAGE -->


    <!-- PAGE -->
    <section class="page-section testimonials" style="padding-top: 30px">
        <div class="container">
            <div class="testimonials-carousel">
                <div class="owl-carousel" id="testimonials">
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-body">
                                <div class="testimonial-text">Everything works very cool! They quickly found a car, even drove to the apartment for free,
                                    thanks to Philip for this! Quickly drawn up and quickly took the car!
                                    I really enjoyed a good relationship! I advise everyone these guys they are great.
                                </div>
                                <div class="testimonial-name">ИЛЬЯ ЛЕТОДИАНИ <span class="testimonial-position">RUSSIA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-body">
                                <div class="testimonial-text">It was excellent working with Fillip and renting a car from him in the beautiful Montenegro,
                                    especially that it was my husband’s and my first time traveling from the US to there. We had so much fun and comfort with
                                        the very nice and extremely-fuel-efficient car that he gave us. Communication with Philip was easy and
                                    the points he made before signing the contract were very helpful. We highly recommend him.
                                </div>
                                <div class="testimonial-name">FAMILY MODIRI<span class="testimonial-position">USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-body">
                                <div class="testimonial-text">Abeona was a great rental car experience. We drove three of it cars during our trip and all three were excellent.
                                    Filip’s service was first class. I highly recommend Abeona to anyone traveling to Montenegro.
                                </div>
                                <div class="testimonial-name">JOHN VUKMANOVIC<span class="testimonial-position">USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
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
                <small>{{ __('Feel Free to Say Hello!') }}</small>
                <span>{{ __('Get in Touch With Us') }}</span>
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

            var pickUpLocation = $("input[name=pick-up-location]");
            var pickOffLocation = $("input[name=pick-off-location]");
            var pickUpDate = $("input[name=pick-up-date]");
            var pickOffDate = $("input[name=pick-off-date]");
            var pickUpTime = $("input[name=pick-up-time]");
            var pickOffTime = $("input[name=pick-off-time]");

            if (pickUpLocation.val() === "") {
                pickUpLocation.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                pickUpLocation.focus();
                return false;
            }

            if (pickOffLocation.val() === "") {
                pickOffLocation.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                pickOffLocation.focus();
                return false;
            }

            if (pickUpDate.val() === "") {
                pickUpDate.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
               // pickUpDate.focus();
                return false;
            }

            if (pickOffDate.val() === "") {
                pickOffDate.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
              //  pickOffDate.focus();
                return false;
            }

            if (pickUpTime.val() === "") {
                pickUpTime.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                return false;
            }

            if (pickOffTime.val() === "") {
                pickOffTime.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                pickOffTime.focus();
                return false;
            }

            $.ajax({
                type:'GET',
                url:"{{ route('findCar') }}",
                data:{
                    pick_up_location: pickUpLocation.val(),
                    pick_off_location: pickOffLocation.val(),
                    pick_up_date: pickUpDate.val(),
                    pick_off_date: pickOffDate.val(),
                    pick_up_time: pickUpTime.val(),
                    pick_off_time: pickOffTime.val(),
                },
                success:function(response){
                    console.log(response)
                    window.location.replace(response);
                }
            });

        });


    </script>


@endsection
