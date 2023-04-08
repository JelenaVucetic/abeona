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
                                                            <label for="pick-off-location">{{ __('Pick Off Location') }}</label>
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
                                                            <label for="pick-up-date">{{ __('Pick Up Date') }}</label>
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
                                                            <label for="pick-up-time">{{ __('Pick Up Time') }}</label>
                                                            <div class='input-group date' id='pick-up-time'>
                                                                <input type='text'
                                                                       value="20:00"
                                                                       id='pick-up-time-input'
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
                                                            <label for="pick-off-date">{{ __('Pick Off Date') }}</label>
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
                                                            <label for="pick-off-time">{{ __('Pick Off Time') }}</label>
                                                            <div class='input-group date' id='pick-off-time'>
                                                                <input type='text'
                                                                       value="20:00"
                                                                       id="pick-off-time-input"
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
                                       href="{{ $car->images[0]["path"] }}">
                                        <img src="{{ $car->images[0]["path"] }}" alt=""/>
                                        <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <h4 class="caption-title"><a href="#">{{ $car->name }}</a></h4>
                                    <div class="caption-text">{{ __('Start from price a day', ['price' => 39 ]) }}</div>
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
@endsection

@section('js')
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
            console.log(pickUpLocation.val())
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

console.log(pickUpLocation)
            if (pickUpLocation === "") {
                pickUpLocation = "Tivat aerodrom"
            }

            if (pickOffLocation === "") {
                pickOffLocation = "Tivat aerodrom"
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

            window.location.href = '/cars/' + car + '/book?' + $.param({
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
