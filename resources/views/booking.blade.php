@extends('layouts.app')

@section('content')
    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar sub-page">
        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                <div class="col-md-9 content" id="content">

                    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>{{ __('Car Information') }}</h3>
                    <div class="car-big-card alt">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="owl-carousel img-carousel">
                                    <div class="item">
                                        <a class="btn btn-zoom" href="/storage/{{ $car->images[0]["path"] }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a  href="/storage/{{ $car->images[0]["path"] }}" data-gal="prettyPhoto"><img class="img-responsive" src="/storage/{{ $car->images[0]["path"] }}" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="/storage/{{ $car->images[1]["path"] }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="/storage/{{ $car->images[1]["path"] }}" data-gal="prettyPhoto"><img class="img-responsive" src="/storage/{{ $car->images[1]["path"] }}" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="/storage/{{ $car->images[2]["path"] }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="/storage/{{ $car->images[2]["path"] }}" data-gal="prettyPhoto"><img class="img-responsive" src="/storage/{{ $car->images[2]["path"] }}" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="/storage/{{ $car->images[3]["path"] }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="/storage/{{ $car->images[3]["path"] }}" data-gal="prettyPhoto"><img class="img-responsive" src="/storage/{{ $car->images[3]["path"] }}" alt=""/></a>
                                    </div>
                                    <div class="item">
                                        <a class="btn btn-zoom" href="/storage/{{ $car->images[4]["path"] }}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                        <a href="/storage/{{ $car->images[4]["path"] }}" data-gal="prettyPhoto"><img class="img-responsive" src="/storage/{{ $car->images[4]["path"] }}" alt=""/></a>
                                    </div>
                                </div>
                                <div class="row car-thumbnails">
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [0,300]);"><img style="width: 100%;" src="/storage/{{ $car->images[0]["path"] }}" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [1,300]);"><img style="width: 100%;" src="/storage/{{ $car->images[1]["path"] }}" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [2,300]);"><img style="width: 100%;" src="/storage/{{ $car->images[2]["path"] }}" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [3,300]);"><img style="width: 100%;" src="/storage/{{ $car->images[3]["path"] }}" alt=""/></a></div>
                                    <div class="col-xs-2 col-sm-2 col-md-2"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [4,300]);"><img style="width: 100%;" src="/storage/{{ $car->images[4]["path"] }}" alt=""/></a></div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="car-details">
                                    <div class="price">
                                        <input type="hidden" id="car-total-price" value="{{ $car->totalPrice }}">
                                        <input type="hidden" id="car-total-days" value="{{ $car->totalDays }}">
                                        <strong>{{ $car->totalPrice }}</strong> <span>{{ __('$/for number of day(s)', ['number' => $car->totalDays ]) }}</span>
                                    </div>

                                    <div class="list">
                                        <ul>
                                            <li class="title">
                                                <h2>Volkswagen Golf</h2>
                                            </li>
                                            <li>Fuel {{ $car->motor }}</li>
                                            <li>Transmission {{ $car->transmision }}</li>
                                            <li>{{ $car->doors }} {{ __('Doors') }}</li>
                                            <li>{{ $car->passenger }} {{ __('Passengers') }}</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="page-divider half transparent"/>

                    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>{{ __('Extras & Frees') }}</h3>
                    <form id="booking-form" class="form-extras" method="post" enctype="multipart/form-data">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="left">
                                    <div class="checkbox checkbox-danger">
                                        <input id="second-driver" name="second_driver" type="checkbox" class="car-extras">
                                        <label for="second_driver">{{ __('Second Driver') }}<span class="pull-right">{{ __('Free') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="unlimited-mileage" name="unlimited_mileage" type="checkbox" class="car-extras">
                                        <label for="unlimited_mileage">{{ __('Unlimited Mileage') }}<span class="pull-right">{{ __('Free') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="baby-seat-small" name="baby_seat_small" type="checkbox" class="car-extras">
                                        <label for="baby_seat_small">{{ __('Baby Seat Small') }}<span class="pull-right">{{ __('Free') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="baby-seat-big" name="baby_seat_big" type="checkbox" class="car-extras">
                                        <label for="baby_seat_big">{{ __('Baby Seat Big') }} <span class="pull-right">{{ __('Free') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="baby-seat-booster" name="baby_seat_booster" type="checkbox" class="car-extras">
                                        <label for="baby_seat_booster">{{ __('Baby Seat Booster') }} <span class="pull-right">{{ __('Free') }}</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="right">
                                    <div class="checkbox checkbox-danger">
                                        <input id="full-insurance"
                                               name="full_insurance"
                                               title="{{ __("You have to choose one insurance") }}" data-toggle="tooltip"
                                               type="checkbox"
                                               class="car-extras insurance-check" value="12">
                                        <label for="full_insurance">{{ __('Ful Rent a Car Insures') }}
                                            <i class="fa fa-info-circle deposit-info" style="padding-left: 5px" data-toggle="tooltip" title="Deposit is included"></i>
                                            <span class="pull-right" >12 &euro; /for a day</span>
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="basic-insurance"
                                               name="basic_insurance"
                                               value="{{ 12 + 12 }}"
                                               type="checkbox" checked=""
                                               class="car-extras insurance-check">
                                        <label for="basic_insurance">{{ __('Basic Rent a Car Insures') }} <span class="pull-right">{{ 12+12 }} &euro; /{{ __('Total') }} </span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger conditional-display">
                                        <input id="damage-participation" name="damage_participation" type="checkbox" checked="" disabled="disabled"  class="car-extras" value="12">
                                        <label for="damage_participation">{{ __('Participation in the damage') }}<span class="pull-right">12 &euro; /{{ __('Total') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger conditional-display">
                                        <input id="deposit" name="deposit" type="checkbox" checked="" class="car-extras" value="12"  disabled="disabled">
                                        <label for="deposit">{{ __('Deposit') }}
                                            <i class="fa fa-info-circle deposit-info" style="padding-left: 5px" data-toggle="tooltip" title="We only accept deposits in cash, in all currencies."></i>
                                            <span class="pull-right">12 &euro; /{{ __('Total') }}</span>
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="border-crossing" name="border_crossing" type="checkbox" class="car-extras" value="20">
                                        <label for="border_crossing">{{ __('Border Crossing') }}<span class="pull-right">20 &euro; /{{ __('Total') }}</span></label>
                                    </div>
                                   {{-- <div class="checkbox checkbox-danger">
                                        <input id="green-card" name="green_card" type="checkbox" checked="" class="car-extras" value="0">
                                        <label for="green_card">{{ __('Green Card') }}<span class="pull-right">Included</span></label>
                                    </div>--}}
                                </div>
                            </div>

                        </div>
                    </form>
                        <h3 class="block-title alt"><i class="fa fa-angle-down"></i>{{ __("Customer Information") }}</h3>
                    <form action="#" class="form-delivery">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="first-name" id="first-name" title="{{__('First Name is required')}}" data-toggle="tooltip"
                                           class="form-control alt customer-info" type="text" placeholder="{{ __("First Name:*") }}" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="last-name" id="last-name" title="{{ __('Last Name is required') }}" data-toggle="tooltip"
                                           class="form-control alt customer-info" type="text" placeholder="{{ __('Last Name:*') }}" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" id="email" title="{{ __("Email is required") }}" data-toggle="tooltip"
                                           class="form-control alt customer-info" type="text" placeholder="{{ __('Your Email Address:*') }}" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="phone-number" id="phone-number" title="{{ __("Phone Number is required") }}" data-toggle="tooltip"
                                        class="form-control alt customer-info" type="text" placeholder="{{ __('Phone Number:*') }}" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                        </div>
                    </form>
                        <h3 class="block-title alt"><i class="fa fa-angle-down"></i>{{ __('Additional Information') }}</h3>
                    <form action="#" class="form-additional">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <textarea name="additional-info" id="additional-info" title="{{ __('Additional Information') }}" data-toggle="tooltip"
                                                  class="form-control alt customer-info" placeholder="{{ __('Message') }}" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="overflowed reservation-now">
                        <div class="checkbox pull-right">
                            <input id="accept" type="checkbox"  title="{{ __("You have to accept terms and conditions") }}" data-toggle="tooltip">
                            <label for="accept">{{ __('I accept terms and conditions') }}</label>
                        </div>
                        <button id="reservation-btn" class="btn btn-theme btn-reservation-now">{{ __('Make a Reservation') }}</button>

                      </div>

                </div>
                <!-- /CONTENT -->

                <!-- SIDEBAR -->
                <aside class="col-md-3 sidebar" id="sidebar">
                    <!-- widget detail reservation -->
                    <div class="widget shadow widget-details-reservation">
                        <h4 class="widget-title">{{ __('Reservation details') }}</h4>
                        <div class="widget-content">
                            <h5 class="widget-title-sub">{{ __('Pick Up Location') }}</h5>
                            <div class="media" style="display: flex">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="media-body" >
                                    <input name="pick-up-date" class="reservation-info" disabled value="{{ $car_filter->pick_up_date }}">
                                    <input name="pick-up-time" class="reservation-info"  disabled value="{{ $car_filter->pick_up_time }}">
                                </div>
                            </div>
                            <div class="media" style="display:flex;" >
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="media-body">
                                    <input name="pick-up-location" class="reservation-info" disabled value="{{ str_replace('%20', ' ', ucfirst($car_filter->pick_up_location)) }}">
                                </div>
                            </div>
                            <h5 class="widget-title-sub">{{ __('Pick Off Location') }}</h5>
                            <div class="media" style="display:flex;">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="media-body">
                                    <input name="pick-off-date" class="reservation-info" disabled value="{{ $car_filter->pick_off_date }}">
                                    <input name="pick-off-time" class="reservation-info"  disabled value="{{ $car_filter->pick_off_time }}">
                                </div>
                            </div>
                            <div class="media" style="display: flex">
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="media-body">
                                    <input name="pick-off-location"  class="reservation-info" disabled value="{{ str_replace('%20', ' ', ucfirst($car_filter->pick_off_location)) }}">
                                </div>
                            </div>
                            <div class="button">
                                <button href="#" class="btn btn-block btn-theme" data-toggle="modal"
                                        data-target="#updateReservation">{{ __('Update Reservation') }}</button>
                            </div>
                        </div>
                    </div>
                    <!-- /widget detail reservation -->
                    <!-- widget testimonials -->
                    <div class="widget shadow">
                        <div class="widget-title">{{ __('Testimonials') }}</div>
                        <div class="testimonials-carousel">
                            <div class="owl-carousel" id="testimonials">
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">
                                                It was excellent working with Fillip and renting a car from him in the beautiful Montenegro,
                                                especially that it was my husband’s and my first time traveling from the US to there. We had so much fun and comfort with
                                                the very nice and extremely-fuel-efficient car that he gave us. Communication with Philip was easy and
                                                the points he made before signing the contract were very helpful. We highly recommend him.
                                            </div>
                                            <div class="testimonial-name">FAMILY MODIRI <span class="testimonial-position">USA</span></div>
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
                                            <div class="testimonial-name">JOHN VUKMANOVIC <span class="testimonial-position">USA</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">Everything works very cool! They quickly found a car, even drove to the apartment for free,
                                                thanks to Philip for this! Quickly drawn up and quickly took the car!
                                                I really enjoyed a good relationship! I advise everyone these guys they are great.</div>
                                            <div class="testimonial-name">ИЛЬЯ ЛЕТОДИАНИ<span class="testimonial-position">RUSSIA</span></div>
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
                            <p>Don't hesitate to reach out to us via Email if you have any questions or concerns - we're here to help!</p>
                            <p><a href="mailto:support@supportcenter.com">abeonarentacar@gmail.com</a></p>
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
    <!-- Modal -->
    <div class="modal fade" id="updateReservation" tabindex="-1" role="dialog" aria-labelledby="updateReservation" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="display: flex;align-items: flex-end;justify-content: space-between;border-bottom: 0px">
                    <h4 class="modal-title" id="exampleModalLabel">{{ __('Update Reservation Details') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="div-table">
                            <div class="div-cell">
                                <div class="caption-content">
                                    <!-- Search form -->
                                    <div class="form-search light">
                                        <form id="find-car" action="#">
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="car_id" id="car_id" value="{{ $car->id }}">

                                            <div class="row row-inputs">
                                                <div class="container-fluid">
                                                    <div class="col-sm-12">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="pick-up">{{ __('Pick Up Location') }}</label>
                                                            <select name="update-pick-up-location" id="update-pick-up" class="form-control"
                                                                    title="Pick up location is required" data-toggle="tooltip" >
                                                                <option {{ $car_filter->pick_up_location == 'tivat aerodrom' ? "selected" : "" }}  value="tivat aerodrom">Tivat Aerodrom</option>
                                                                <option {{ $car_filter->pick_up_location == 'tivat' ? "selected" : "" }}  value="tivat">Tivat</option>
                                                                <option {{ $car_filter->pick_up_location == 'podgorica aerodrom' ? "selected" : "" }}  value="podgorica aerodrom">Podgorica Aerodrom</option>
                                                                <option {{ $car_filter->pick_up_location == 'podgorica' ? "selected" : "" }}  value="podgorica">Podgorica</option>
                                                                <option {{ $car_filter->pick_up_location == 'cetinje' ? "selected" : "" }}  value="cetinje">Cetinje</option>
                                                                <option {{ $car_filter->pick_up_location == 'bar' ? "selected" : "" }}  value="bar">Bar</option>
                                                                <option {{ $car_filter->pick_up_location == 'ulcinj' ? "selected" : "" }}  value="ulcinj">Ulcinj</option>
                                                                <option {{ $car_filter->pick_up_location == 'petrovac' ? "selected" : "" }}  value="petrovac">Petrovac</option>
                                                                <option {{ $car_filter->pick_up_location == 'budva' ? "selected" : "" }}  value="budva">Budva</option>
                                                                <option {{ $car_filter->pick_up_location == 'herceg novi' ? "selected" : "" }}  value="herceg novi">Herceg Novi</option>
                                                                <option {{ $car_filter->pick_up_location == 'niksic' ? "selected" : "" }}  value="niksic">Niksic</option>

                                                            </select>
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-location-arrow"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="update-pick-off-location">{{ __('Pick Off Location') }}</label>
                                                            <select name="update-pick-off-location" id="update-pick-off-location"
                                                                    class="form-control" title="Pick off location is required" data-toggle="tooltip" >

                                                                <option {{ $car_filter->pick_off_location == 'tivat aerodrom' ? "selected" : "" }}  value="tivat aerodrom">Tivat Aerodrom</option>
                                                                <option {{ $car_filter->pick_off_location == 'tivat' ? "selected" : "" }}  value="tivat">Tivat</option>
                                                                <option {{ $car_filter->pick_off_location == 'podgorica aerodrom' ? "selected" : "" }}  value="podgorica aerodrom">Podgorica Aerodrom</option>
                                                                <option {{ $car_filter->pick_off_location == 'podgorica' ? "selected" : "" }}  value="podgorica">Podgorica</option>
                                                                <option {{ $car_filter->pick_off_location == 'cetinje' ? "selected" : "" }}  value="cetinje">Cetinje</option>
                                                                <option {{ $car_filter->pick_off_location == 'bar' ? "selected" : "" }}  value="bar">Bar</option>
                                                                <option {{ $car_filter->pick_off_location == 'ulcinj' ? "selected" : "" }}  value="ulcinj">Ulcinj</option>
                                                                <option {{ $car_filter->pick_off_location == 'petrovac' ? "selected" : "" }}  value="petrovac">Petrovac</option>
                                                                <option {{ $car_filter->pick_off_location == 'budva' ? "selected" : "" }}  value="budva">Budva</option>
                                                                <option {{ $car_filter->pick_off_location == 'kotor' ? "selected" : "" }}  value="kotor">Kotor</option>
                                                                <option {{ $car_filter->pick_off_location == 'herceg novi' ? "selected" : "" }}  value="herceg novi">Herceg Novi</option>
                                                                <option {{ $car_filter->pick_off_location == 'niksic' ? "selected" : "" }}  value="niksic">Niksic</option>
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
                                                            <label for="update-pick-up-date">{{ __('Pick Up Date') }}</label>
                                                            <input type="text" class="form-control datepicker-update"
                                                                   name="update-pick-up-date"
                                                                   id="update-pick-up-date"
                                                                   title="Pick up date is required" data-toggle="tooltip"
                                                                   value="{{ $car_filter->pick_up_date }}"
                                                                   placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="update-pick-up-time">{{ __('Pick Up Time') }}</label>
                                                            <div class='input-group date' id='update-pick-up-time'>
                                                                <input type='text'
                                                                       value="{{ $car_filter->pick_up_time }}"
                                                                       title="Pick up time is required" data-toggle="tooltip"
                                                                       name="update-pick-up-time" class="form-control" />
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
                                                            <label for="update-pick-off-date">{{ __('Pick Off Date') }}</label>
                                                            <input type="text" class="form-control datepicker-update"
                                                                   name="update-pick-off-date"
                                                                   title="Pick off date is required" data-toggle="tooltip"
                                                                   value="{{ $car_filter->pick_off_date }}"
                                                                   id="update-pick-off-date" placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label for="update-pick-off-time">{{ __('Pick Off Time') }}</label>
                                                            <div class='input-group date' id='update-pick-off-time'>
                                                                <input type='text'
                                                                       value="{{ $car_filter->pick_off_time }}"
                                                                       title="Pick off time is required" data-toggle="tooltip"
                                                                       name="update-pick-off-time" class="form-control" />
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
                                                    <button data-id="{{ $car->id }}" id="update-reservation-details" type="submit" class="btn btn-submit btn-theme pull-right" style="margin-bottom: 5px">
                                                        {{ __('Update') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Search form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: none">
                    <div style="display: flex; align-items: baseline; flex-wrap: wrap;padding: 0px 20px;">
                        <div>
                            <h3 style="margin-top: 10px">Volkswagen Golf</h3>
                        </div>

                        <div class="price" style="padding-left: 20px">
                            <strong style="font-size: 22px">{{ $car->totalPrice }}</strong> <span>{{ __('$/for number of day(s)', ['number' => $car->totalDays]) }}</span>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -30px">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="display: flex; flex-wrap: wrap; justify-content: space-around; margin-bottom: 20px">
                        <div style="border: 1px solid lightgray;padding: 20px;border-radius: 10px;">
                            <h5 class="widget-title-sub">{{ __('Pick Up Location') }}</h5>
                            <div class="media" style="display: flex">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="" style="width: fit-content;display: flex;flex-direction: column;">
                                    <input name="pick-up-date" class="reservation-info" disabled value="{{ $car_filter->pick_up_date }}">
                                    <input name="pick-up-time" class="reservation-info"  disabled value="{{ $car_filter->pick_up_time }}">
                                </div>
                            </div>
                            <div class="media" style="display:flex;" >
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="" style="width: fit-content;">
                                    <input name="pick-up-location" class="reservation-info" disabled value="{{ str_replace('%20', ' ', ucfirst($car_filter->pick_up_location)) }}">
                                </div>
                            </div>
                        </div>
                        <div style="border: 1px solid lightgray;padding: 20px;border-radius: 10px;">
                            <h5 class="widget-title-sub">{{ __('Pick Off Location') }}</h5>
                            <div class="media" style="display:flex;">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="" style="width: fit-content;display: flex;flex-direction: column;">
                                    <input name="pick-off-date" class="reservation-info" disabled value="{{ $car_filter->pick_off_date }}">
                                    <input name="pick-off-time" class="reservation-info"  disabled value="{{ $car_filter->pick_off_time }}">
                                </div>
                            </div>
                            <div class="media" style="display: flex">
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="" style="width: fit-content;">
                                    <input name="pick-off-location"  class="reservation-info" disabled value="{{ str_replace('%20', ' ', ucfirst($car_filter->pick_off_location)) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h5 class="widget-title-sub">{{ __('Additional Equipment') }}</h5>
                        <div class="list">
                            <ul class="append" style="padding-top:10px">
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <div class="total-price">
                            <h4>{{ __('Total') }}</h4>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button id="confirm-booking" data-id="{{ $car->id }}" class="btn btn-theme pull-right btn-reservation-now">{{ __('Confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        $( document ).ready(function() {
            $('#update-reservation-details').click(function(e) {
                e.preventDefault();

                let pickUpLocation = $("select[name='update-pick-up-location']");
                let pickOffLocation = $("select[name='update-pick-off-location']");
                let pickUpDate = $("input[name='update-pick-up-date']");
                let pickOffDate = $("input[name='update-pick-off-date']");
                let pickUpTime = $("input[name='update-pick-up-time']");
                let pickOffTime = $("input[name='update-pick-off-time']");
                const car =  $(this).data('id');

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

                window.location.href = '/{{ app()->getLocale() }}/cars/' + car + '/book?' + $.param({
                    car_id: car,
                    pick_up_location: pickUpLocation.val(),
                    pick_off_location: pickOffLocation.val(),
                    pick_up_date: pickUpDate.val(),
                    pick_off_date: pickOffDate.val(),
                    pick_up_time: pickUpTime.val(),
                    pick_off_time: pickOffTime.val()
                });
            })

            $('#confirm-booking').click(function(e) {
                e.preventDefault();

                const car =  $(this).data('id');
                const second_driver = ($('#second-driver').is(':checked')) ? 1 : 0;
                const unlimited_mileage = ($('#unlimited-mileage').is(':checked')) ? 1 : 0;
                const border_crossing = $('#border-crossing').val();
                const baby_seat_small = ($('#baby-seat-small').is(':checked')) ? 1 : 0;
                const baby_seat_big = ($('#baby-seat-big').is(':checked')) ? 1 : 0;
                const baby_seat_booster = ($('#baby-seat-booster').is(':checked')) ? 1 : 0;
                const basic_insurance = $('#basic-insurance').val();
                const full_insurance = $('#full-insurance').val();
                const deposit = $('#deposit').val();
                const damage_participation = $('#damage-participation').val();

                const first_name = $('#first-name').val();
                const last_name = $('#last-name').val();
                const email = $('#email').val();
                const phone_number = $('#phone-number').val();
                const additional_information = $('#additional-info').val()


                const pick_up_location = $("input[name='pick-up-location']").val()
                const pick_up_time = $("input[name='pick-up-time']").val()
                const pick_up_date = $("input[name='pick-up-date']").val()
                const pick_off_location = $("input[name='pick-off-location']").val()
                const pick_off_date = $("input[name='pick-off-date']").val()
                const pick_off_time = $("input[name='pick-off-time']").val()

                const total = $('#total-amount').val()

                const dataString = 'car_id=' + car + '&second_driver=' + second_driver + '&unlimited_mileage=' + unlimited_mileage
                    + '&border_crossing=' + border_crossing + '&baby_seat_small=' + baby_seat_small
                    + '&baby_seat_big=' + baby_seat_big + '&baby_seat_booster=' + baby_seat_booster
                    + '&basic_insurance=' + basic_insurance + '&full_insurance=' + full_insurance
                    + '&damage_participation=' + damage_participation + '&deposit=' + deposit
                    + '&first_name=' + first_name + '&last_name=' + last_name
                    + '&email=' + email + '&phone_number=' + phone_number + '&additional_information=' + additional_information
                    + '&pick_up_location=' + pick_up_location + '&pick_up_time=' + pick_up_time + '&pick_up_date=' + pick_up_date
                    + '&pick_off_location=' + pick_off_location + '&pick_off_date=' + pick_off_date + '&pick_off_time=' + pick_off_time
                    + '&total=' + total;

                 $.ajax({
                     type:"POST",
                     url:"/bookings",
                     data: dataString,
                     enctype: 'multipart/form-data',
                     beforeSend: function(){
                         $('#reservationModal').modal('hide');
                     },
                     success:function () {
                         $.alert({
                             title: 'Thank you for your reservation!',
                             content: 'We appreciate your interest and will get back to you shortly!',
                             autoClose: 'close|5000',
                             buttons: {
                                 close: function () {
                                     clear();
                                 }
                             }
                         });
                     },
                     error:function () {
                         $.alert({
                             title: '',
                             content: 'Something went wrong. Please try again later.',
                             autoClose: 'close|5000',
                             type: 'red',
                             buttons: {
                                 close: function () {
                                     clear();
                                 }
                             }
                         });
                     }
                 });
            })



            $('#reservation-btn').on('click', function (event) {
                clear();
                let customerInfo = {};
                let carExtras = {};
                let reservationInfo = {};

                let total = parseInt($('#car-total-price').val()) // car price
                let numOfDays = parseInt($('#car-total-days').val())

                $('.car-extras:checkbox:checked').not(":disabled").map(function() {
                    if( $(this).attr("name") === 'full_insurance') {
                        console.log(this.value)
                        console.log(numOfDays)
                        carExtras[$(this).attr("name")] = this.value === 'on' ? 'Free' : this.value * numOfDays + "&euro;"
                    } else {
                        carExtras[$(this).attr("name")] = this.value === 'on' ? 'Free' : this.value + "&euro;"
                    }

                });

                $.each(carExtras, function(index, value) {
                    let feeName = index.replace(/_+/g, ' ').toLowerCase().replace(/\b[a-z]/g, function(letter) {
                        return letter.toUpperCase();
                    });

                    if($.isNumeric(parseFloat(value))) {
                        total += parseFloat(value)
                    }

                    $(".append").append(
                        '<li class="fee-list">' +
                           '<p>'+ feeName + '</p> <span>' + value + '</span>' +
                        '</li>');

                });

                $(".total-price").append(
                    '<input type="hidden" id="total-amount" value="'+total+'"> <span class="total">Total: ' + total + '&euro; </span>'
                    );

                $('input.customer-info').map(function() {
                    customerInfo[$(this).attr("name")] = this.value
                });

                customerInfo[$('textarea.customer-info').attr("name")] = $('textarea.customer-info').val()

                $('input.reservation-info').map(function() {
                    reservationInfo[$(this).attr("name")] = this.value
                });

                const firstName = $(".form-delivery input#first-name");
                if (firstName.val() === "" || firstName.val() === "First Name:*" ) {
                    firstName.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    firstName.focus();
                    clear();
                    return false;
                }

                const lastName = $(".form-delivery input#last-name");
                if (lastName.val() === "" || lastName.val() === "Last Name:*" ) {
                    lastName.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    lastName.focus();
                    clear();
                    return false;
                }

                const email = $(".form-delivery input#email");
                if (email.val() === "" || email.val() === "Your Email Address:*" ) {
                    email.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    email.focus();
                    clear();
                    return false;
                }

                const phone = $(".form-delivery input#phone-number");
                if (phone.val() === "" || phone.val() === "Phone Number:*" ) {
                    phone.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    phone.focus();
                    clear();
                    return false;
                }


                if ($('.insurance-check').filter(':checked').length < 1 || $('.insurance-check').filter(':checked').length > 1){
                    $('#full-insurance').tooltip({placement: 'right', trigger: 'manual'}).tooltip('show');
                    $('#full-insurance').focus();
                    clear();
                    return false;
                }

                if ($('#accept').filter(':checked').length < 1){
                    $('#accept').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    $('#accept').focus();
                    clear();
                    return false;
                }


                $('#reservationModal').modal('show')
            })

            $('#reservationModal').on('hidden.bs.modal', function () {
                clear();
            })

            $('#reservationModal').on('shown.bs.modal', function () {
            })
        });

        $(document).ready(function(){
            $('#home').click(function () {
                $('[data-toggle="tooltip"]').tooltip("hide");
            });

            $('#basic-insurance').change(function () {
                $('.conditional-display').fadeToggle();

                if( this.checked ) {
                    $('#full-insurance').prop('checked', false);
                } else {
                    $('#full-insurance').prop('checked', true);
                }
            });

            $('#full-insurance').change(function () {
                console.log(this.checked)
                if( this.checked ) {
                    $('.conditional-display').fadeToggle();
                    $('#basic-insurance').prop('checked', false);
                } else {
                    $('#basic-insurance').prop('checked', true);
                    $(".conditional-display").show( "slow" );
                }
            });

        });

        function clear() {
            $('.fee-list').remove();
            $(".total-price").empty();
        }
    </script>

@endsection
