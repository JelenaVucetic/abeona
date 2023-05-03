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
                                                            <label for="pick-up">{{ __('Pick Up Location') }}</label>
                                                            <select id="pick-up-location" name="pick-up-location" id="pick-up" class="form-control"
                                                                    title="Pick up location is required" data-toggle="tooltip" >
                                                                <option value="tivat {{ __("Airport") }}">Tivat {{ __("Airport") }}</option>
                                                                <option value="tivat">Tivat</option>
                                                                <option value="podgorica {{ __("Airport") }}">Podgorica {{ __("Airport") }}</option>
                                                                <option value="podgorica">Podgorica</option>
                                                                <option value="bar">Bar</option>
                                                                <option value="ulcinj">Ulcinj</option>
                                                                <option value="petrovac">Petrovac</option>
                                                                <option value="budva">Budva</option>
                                                                <option value="kotor">Kotor</option>
                                                                <option value="herceg novi">Herceg Novi</option>
                                                                <option value="dubrovnik">Dubrovnik</option>
                                                                <option value="cetinje">Cetinje</option>
                                                                <option value="niksic">Nikšic</option>
                                                                <option value="pljevlja">Pljevlja</option>
                                                                <option value="berane">Berane</option>
                                                                <option value="bijelo polje">Bijelo Polje</option>
                                                                <option value="kolasin">Kolašin</option>
                                                                <option value="mojkovac">Mojkovac</option>
                                                                <option value="zabljak">Žabljak</option>
                                                            </select>
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-location-arrow"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-off-location">{{ __('Drop Off Location') }}</label>
                                                            <select name="pick-off-location" id="pick-off-location"
                                                                    class="form-control" title="{{ __('Drop off location is required') }}" data-toggle="tooltip" >
                                                                <option value="tivat {{ __("Airport") }}">Tivat {{ __("Airport") }}</option>
                                                                <option value="tivat">Tivat</option>
                                                                <option value="podgorica {{ __("Airport") }}">Podgorica {{ __("Airport") }}</option>
                                                                <option value="podgorica">Podgorica</option>
                                                                <option value="bar">Bar</option>
                                                                <option value="ulcinj">Ulcinj</option>
                                                                <option value="petrovac">Petrovac</option>
                                                                <option value="budva">Budva</option>
                                                                <option value="kotor">Kotor</option>
                                                                <option value="herceg novi">Herceg Novi</option>
                                                                <option value="dubrovnik">Dubrovnik</option>
                                                                <option value="cetinje">Cetinje</option>
                                                                <option value="niksic">Nikšic</option>
                                                                <option value="pljevlja">Pljevlja</option>
                                                                <option value="berane">Berane</option>
                                                                <option value="bijelo polje">Bijelo Polje</option>
                                                                <option value="kolasin">Kolašin</option>
                                                                <option value="mojkovac">Mojkovac</option>
                                                                <option value="zabljak">Žabljak</option>
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
                                                            <label for="pick-up-date">{{ __('Pick Up Date') }}</label>
                                                            <input type="text" class="form-control datepicker pick-up-date-calendar"
                                                                   name="pick-up-date"
                                                                   id="pick-up-date"
                                                                   title="{{ __('The pick-up date is required and must be before the drop-off date.') }}" data-toggle="tooltip"
                                                                   placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon">
                                                                <i class="fa fa-calendar pick-up-calendar-icon"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-up-time">{{ __('Pick Up Time') }}</label>
                                                            <div class='input-group date' id='pick-up-time'>
                                                                <input type='text'
                                                                       value="12:00"
                                                                       id='pick-up-time-input'
                                                                       title="{{ __('Pick up time is required') }}" data-toggle="tooltip"
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
                                                            <label for="pick-off-date">{{ __('Drop Off Date') }}</label>
                                                            <input type="text" class="form-control datepicker drop-of-date-calendar"
                                                                   name="pick-off-date"
                                                                   title="{{ __("Drop off date is required") }}" data-toggle="tooltip"
                                                                   id="pick-off-date" placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-calendar drop-of-calendar-icon"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-off-time">{{ __('Drop Off Time') }}</label>
                                                            <div class='input-group date' id='pick-off-time'>
                                                                <input type='text'
                                                                       value="12:00"
                                                                       id="pick-off-time-input"
                                                                       title="{{ __('Drop off time is required') }}" data-toggle="tooltip"
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
                                       href="{{ env("APP_IMAGE_PATH") }}/storage/{{collect(($car->images)->where('type', 'main')->first())['path']}}">
                                        <img src="{{ env("APP_IMAGE_PATH") }}/storage/{{collect(($car->images)->where('type', 'main')->first())['path']}}" alt=""/>
                                        <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <h4 class="caption-title"><a href="#">{{ $car->name }}</a></h4>
                                    <div class="caption-text">{{ __('Start from price a day', ['price' => $car->pricePerDay ]) }}</div>
                                    <div class="buttons">
                                        <button class="btn btn-theme rent-it" data-id="{{ $car->id }}">
                                            {{ __('Rent It') }}
                                        </button>
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
                                <div class="testimonial-text">
                                    I would definitely be renting my cars from Filip of Abeona from now on. He's very
                                    reasonable and offers full service.. hassle free and clean cars with no hidden fees.
                                    Had a blast with this convertible beetle!
                                </div>
                                <div class="testimonial-name">Mona O{{-- <span class="testimonial-position">RUSSIA</span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-body">
                                <div class="testimonial-text">
                                    It was excellent working with Fillip and renting a car from him in the beautiful Montenegro,
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
                                <div class="testimonial-text">
                                    Abeona was a great rental car experience. We drove three of it cars during our trip and all three were excellent.
                                    Filip’s service was first class. I highly recommend Abeona to anyone traveling to Montenegro.
                                </div>
                                <div class="testimonial-name">JOHN VUKMANOVIC{{--<span class="testimonial-position">USA</span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-body">
                                <div class="testimonial-text">
                                    Great experience from start to finish Filip was quick to respond on emails and we
                                    were met at the Airport. Rented the convertible A3 to drive around Montenegro (would
                                    definitely recommend!). Car was clean and in a good condition. Will certainly use
                                    again. Thanks all!
                                </div>
                                <div class="testimonial-name">Michael Dowsett {{--<span class="testimonial-position">Co- founder at Rent It</span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-body">
                                <div class="testimonial-text">
                                    Absolutely best experience I ever had with car rental. The owner is really helpful,
                                    friendly and will go extra mile for his customers. We didn’t book in advance so we
                                    had to wait for a car few hours. Meanwhile he dropped us in the city , gave us some
                                    recommendations on places to visit, few hours later brought us the car . Owner is
                                    very flexible and will find the best solution for your needs. Highly recommended!!
                                    Thank you very much once again!
                                </div>
                                <div class="testimonial-name">Ieva Vainauskaitė {{--<span class="testimonial-position">Co- founder at Rent It</span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-body">
                                <div class="testimonial-text">
                                        Very professional , easy and nice car to rental, we drove Montenegro, Croatia and
                                        Bosnia, picked up car in Tivat airport and delivered in Sarajevo airport. Nice and
                                        fast reply on what’s app with Abeona rental. Strongly recommended. I’ll chose them
                                        again.
                                </div>
                                <div class="testimonial-name">Dani Olav Nilsen {{--<span class="testimonial-position">Co- founder at Rent It</span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-body">
                                <div class="testimonial-text">
                                    Absolutely friendly and nice persons are working here. It was a great and lovely
                                    experience. Car was nice and fresh. Filip and Nikola were amazing and kindly. Highly
                                    recommended.
                                </div>
                                <div class="testimonial-name">Кирилл Шульга {{--<span class="testimonial-position">Co- founder at Rent It</span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="media">
                            <div class="media-body">
                                <div class="testimonial-text">
                                    Filip is beyond great! Highly communicative. Always ready and willing to help. Cars
                                    are clean and in great condition. Would definitely rent again when back in
                                    Montenegro
                                </div>
                                <div class="testimonial-name">Ben Shalom {{--<span class="testimonial-position">Co- founder at Rent It</span>--}}
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
@endsection

@section('js')
    <script type = "text/JavaScript" src ="{{ asset("assets/js/moment.js") }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('#token').val()
            }
        });

        $('#find-car').submit(function(e){

            console.log('clicked')
            e.preventDefault();

            var pickUpLocation = $("#pick-up-location");
            var pickOffLocation = $("#pick-off-location");
            var pickUpDate = $("#pick-up-date");
            var pickOffDate = $("#pick-off-date");
            var pickUpTime = $("#pick-up-time-input");
            var pickOffTime = $("#pick-off-time-input");

            console.log(pickUpDate.val())
            console.log(pickOffDate.val())
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

            if (moment(pickUpDate.val(), 'DD/MM/YYYY').isAfter(moment(pickOffDate.val(), 'DD/MM/YYYY'))) {
          /*      pickUpDate.attr("title", "New Tooltip Title");
                // Refresh the tooltip to update its content
                pickUpDate.tooltip("refresh");*/
                pickUpDate.tooltip({placement: 'top', trigger: 'manual', title: "zasto"}).tooltip('show');
                // pickUpDate.focus();
         /*   console.log(pickUpDate)
                pickUpDate.tooltip({
                    placement: 'top',
                    trigger: 'manual',
                    title: 'Old tooltip text' // Existing tooltip text
                }).tooltip("option", "content", "New tooltip text"); // New tooltip text

                pickUpDate.tooltip("show");*/


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

            window.location.href = '{{ app()->getLocale() }}/findCar?' + $.param({
                pick_up_location: encodeURIComponent(pickUpLocation.val()),
                pick_off_location: encodeURIComponent(pickOffLocation.val()),
                pick_up_date: pickUpDate.val(),
                pick_off_date: pickOffDate.val(),
                pick_up_time: pickUpTime.val(),
                pick_off_time: pickOffTime.val(),
            });
        });


        $('.rent-it').click(function(e){
            e.preventDefault();
            const car =  $(this).data('id');

            let pickUpLocation = $("#pick-up-location").val();
            let pickOffLocation = $("#pick-off-location").val();
            let pickUpDate = $("#pick-up-date").val();
            let pickOffDate = $("#pick-off-date").val();
            let pickUpTime = $("#pick-up-time-input").val();
            let pickOffTime = $("#pick-off-time-input").val();

            if (pickUpLocation === "") {
                pickUpLocation = "Tivat {{ __("Airport") }}"
            }

            if (pickOffLocation === "") {
                pickOffLocation = "Tivat {{ __("Airport") }}"
            }

            if (pickUpDate === "") {
                pickUpDate = $.datepicker.formatDate('mm/dd/yy', new Date());
            }

            if (pickOffDate === "") {
                pickOffDate = $.datepicker.formatDate('mm/dd/yy', new Date());
            }

            if (pickUpTime === "") {
                pickUpTime = '20:00'
            }

            if (pickOffTime === "") {
                pickOffTime = '20:00'
            }

            window.location.href = '{{ app()->getLocale() }}/cars/' + car + '/book?' + $.param({
                car_id: car,
                pick_up_location: encodeURIComponent(pickUpLocation),
                pick_off_location: encodeURIComponent(pickOffLocation),
                pick_up_date: pickUpDate,
                pick_off_date: pickOffDate,
                pick_up_time: pickUpTime,
                pick_off_time: pickOffTime,
            });
        });
    </script>


@endsection
