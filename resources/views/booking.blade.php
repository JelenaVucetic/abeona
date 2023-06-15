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
                                        <a style="pointer-events: none"
                                           href="{{ getImagePath(collect(($car->images)->where('type', 'main')->first())['path']) }}"
                                           data-gal="prettyPhoto">
                                            <img class="img-responsive"
                                                 src="{{ getImagePath(collect(($car->images)->where('type', 'main')->first())['path']) }}"
                                                 alt=""/>
                                        </a>
                                    </div>
                                    @foreach($car->images as $image)
                                        @if( $image->type != 'main')
                                            <div class="item">
                                                <a style="pointer-events: none"
                                                   href="{{ getImagePath($image["path"]) }}"
                                                   data-gal="prettyPhoto">
                                                    <img class="img-responsive"
                                                         src="{{ getImagePath($image["path"]) }}"
                                                         alt=""/>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="row car-thumbnails">
                                    <div class="col-xs-2 col-sm-2 col-md-2">
                                        <a href="#"
                                           onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [0,300]);">
                                            <img style="width: 100%;"
                                                 src="{{ getImagePath(collect(($car->images)->where('type', 'main')->first())['path']) }}"
                                                 alt=""/>
                                        </a>
                                    </div>
                                    @foreach($car->images as $key => $image)
                                        @if( $image->type != 'main')
                                            <div class="col-xs-2 col-sm-2 col-md-2">
                                                <a href="#"
                                                   onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [{{$key + 1}},300]);">
                                                    <img style="width: 100%;"
                                                         src="{{ getImagePath($image["path"] ) }}"
                                                         alt=""/>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="car-details">
                                    <div class="price">
                                        <input type="hidden" id="car-total-price" value="{{ $car->totalPrice }}">
                                        <input type="hidden" id="car-total-days" value="{{ $car->totalDays }}">
                                        <strong>{{ $car->totalPrice }}</strong>
                                        <span>{{ __('$/for number day(s)', ['number' => $car->totalDays ]) }}</span>
                                    </div>

                                    <div class="list">
                                        <ul>
                                            <li class="title">
                                                <h2>{{ $car->name }}</h2>
                                            </li>
                                            <li>Fuel {{ $car->motor }}</li>
                                            <li>Transmission {{ $car->transmission }}</li>
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
                                        <input id="second-driver" name="second_driver" type="checkbox"
                                               class="car-extras">
                                        <label for="second_driver">{{ __('Second Driver') }}<span
                                                class="pull-right">0 &euro; /{{ __('Total') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="unlimited-mileage" name="unlimited_mileage" type="checkbox"
                                               class="car-extras">
                                        <label for="unlimited_mileage">{{ __('Unlimited Mileage') }}<span
                                                class="pull-right">0 &euro; /{{ __('Total') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="baby-seat-small" name="baby_seat_small" type="checkbox"
                                               class="car-extras">
                                        <label for="baby_seat_small">{{ __('Child seat (up to 1 years old)') }}<span
                                                class="pull-right">0 &euro; /{{ __('Total') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="baby-seat-big" name="baby_seat_big" type="checkbox"
                                               class="car-extras">
                                        <label for="baby_seat_big">{{ __('Child seat') }} <span
                                                class="pull-right">0 &euro; /{{ __('Total') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="baby-seat-booster" name="baby_seat_booster" type="checkbox"
                                               class="car-extras">
                                        <label for="baby_seat_booster">{{ __('Child seat - booster') }} <span
                                                class="pull-right">0 &euro; /{{ __('Total') }}</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="border-crossing" name="border_crossing" type="checkbox"
                                               class="car-extras" value="20">
                                        <label for="border_crossing">{{ __('Border Crossing') }}<span
                                                class="pull-right">20 &euro; /{{ __('Total') }}</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="right">
                                    <div class="checkbox checkbox-danger">
                                        <input id="basic-insurance"
                                               name="basic_insurance"
                                               value="{{ 12 + 12 }}"
                                               type="checkbox" checked=""
                                               class="car-extras insurance-check">
                                        <label for="basic_insurance">{{ __('Basic Insurance') }} <span
                                                class="pull-right">Included</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger conditional-display">
                                        <input type="hidden" id="participation-damage-value"
                                               value="{{ $car->participation_damage }}">
                                        <input id="damage-participation" name="damage_participation" type="checkbox"
                                               checked="" disabled="disabled" class="car-extras">
                                        <label for="damage_participation">{{ __('Damage responsibility') }}<span
                                                class="pull-right">{{ __('Up to') . ' ' . $car->participation_damage }} &euro;</span></label>
                                    </div>
                                    <div class="checkbox checkbox-danger conditional-display">
                                        <input type="hidden" id="deposit-value" value="{{ $car->deposit }}">
                                        <input id="deposit" name="deposit" type="checkbox" checked="" class="car-extras"
                                               disabled="disabled">
                                        <label for="deposit">{{ __('Deposit') }}
                                            <i class="fa fa-info-circle deposit-info" style="padding-left: 5px"
                                               data-toggle="tooltip"
                                               title="We only accept deposits in cash, in all currencies."></i>
                                            <span
                                                class="pull-right">{{ $car->deposit }} &euro; /{{ __('Total') }}</span>
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-danger">
                                        <input type="hidden" id="full-insurance-value"
                                               value="{{ $car->full_insurance }}">
                                        <input id="full-insurance"
                                               name="full_insurance"
                                               title="{{ __("You have to choose one insurance") }}"
                                               data-toggle="tooltip"
                                               type="checkbox"
                                               class="car-extras insurance-check">
                                        <label for="full_insurance">{{ __('Full Insurance') }}
                                            <i class="fa fa-info-circle deposit-info" style="padding-left: 5px"
                                               data-toggle="tooltip" title="Deposit is included"></i>
                                            <span class="pull-right">
                                                {{ $car->totalDays < 15 ? $car->full_insurance : $car->full_insurance + 5 }} &euro; /for a day
                                            </span>
                                        </label>
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
                                    <input name="first-name" id="first-name" title="{{__('First Name is required')}}"
                                           data-toggle="tooltip"
                                           class="form-control alt customer-info" type="text"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = '{{ __("First Name:*") }}'"
                                           placeholder="{{ __("First Name:*") }}" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="last-name" id="last-name" title="{{ __('Last Name is required') }}"
                                           data-toggle="tooltip"
                                           class="form-control alt customer-info" type="text"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = '{{ __("Last Name:*") }}'"
                                           placeholder="{{ __('Last Name:*') }}" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" id="email" title="{{ __("Email is required") }}"
                                           data-toggle="tooltip"
                                           class="form-control alt customer-info" type="text"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = '{{ __("Your Email Address:*") }}'"
                                           placeholder="{{ __('Your Email Address:*') }}" required>
                                    <span class="error">This field is required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" name="phone-number" id="phone-number"
                                           title="{{ __("Phone Number is required") }}" data-toggle="tooltip"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = '{{ __("Phone Number:*") }}'"
                                           class="form-control alt customer-info"
                                           placeholder="{{ __('Phone Number:*') }}" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                           required>
                                    <span class="phone-error">{{ __('Phone number format is not valid') }}</span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>{{ __('Additional Information') }}</h3>
                    <form action="#" class="form-additional">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <textarea name="additional-info" id="additional-info"
                                                  onfocus="this.placeholder = ''"
                                                  onblur="this.placeholder = '{{ __("Additional Information") }}'"
                                                  title="{{ __('Additional Information') }}" data-toggle="tooltip"
                                                  class="form-control alt customer-info"
                                                  placeholder="{{ __('Message') }}" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="overflowed reservation-now">
                        {{-- <div class="checkbox pull-right">
                             <input id="accept" type="checkbox"  title="{{ __("You have to accept terms and conditions") }}" data-toggle="tooltip">
                             <label for="accept">{{ __('I accept terms and conditions') }}</label>
                         </div>--}}
                        <button id="reservation-btn"
                                class="btn btn-theme btn-reservation-now">{{ __('Make a Reservation') }}</button>
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
                                <div class="media-body">
                                    <input name="pick-up-date" class="reservation-info" disabled
                                           value="{{ $car_filter->pick_up_date }}">
                                    <input name="pick-up-time" class="reservation-info" disabled
                                           value="{{ $car_filter->pick_up_time }}">
                                </div>
                            </div>
                            <div class="media" style="display:flex;">
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="media-body">
                                    <input name="pick-up-location" class="reservation-info" disabled
                                           value="{{ str_replace('%20', ' ', ucfirst($car_filter->pick_up_location)) }}">
                                </div>
                            </div>
                            <h5 class="widget-title-sub">{{ __('Drop Off Location') }}</h5>
                            <div class="media" style="display:flex;">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="media-body">
                                    <input name="pick-off-date" class="reservation-info" disabled
                                           value="{{ $car_filter->pick_off_date }}">
                                    <input name="pick-off-time" class="reservation-info" disabled
                                           value="{{ $car_filter->pick_off_time }}">
                                </div>
                            </div>
                            <div class="media" style="display: flex">
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="media-body">
                                    <input name="pick-off-location" class="reservation-info" disabled
                                           value="{{ str_replace('%20', ' ', ucfirst($car_filter->pick_off_location)) }}">
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
                                                I would definitely be renting my cars from Filip of Abeona from now on.
                                                He's very
                                                reasonable and offers full service.. hassle free and clean cars with no
                                                hidden fees.
                                                Had a blast with this convertible beetle!
                                            </div>
                                            <div class="testimonial-name">Mona
                                                O {{--<span class="testimonial-position">USA</span>--}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">
                                                It was excellent working with Fillip and renting a car from him in the
                                                beautiful Montenegro,
                                                especially that it was my husband’s and my first time traveling from the
                                                US to there. We had so much fun and comfort with
                                                the very nice and extremely-fuel-efficient car that he gave us.
                                                Communication with Philip was easy and
                                                the points he made before signing the contract were very helpful. We
                                                highly recommend him.
                                            </div>
                                            <div class="testimonial-name">FAMILY
                                                MODIRI {{--<span class="testimonial-position">USA</span>--}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">
                                                Abeona was a great rental car experience. We drove three of it cars
                                                during our trip and all three were excellent.
                                                Filip’s service was first class. I highly recommend Abeona to anyone
                                                traveling to Montenegro.
                                            </div>
                                            <div class="testimonial-name">JOHN
                                                VUKMANOVIC{{--<span class="testimonial-position">RUSSIA</span>--}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">
                                                Great experience from start to finish Filip was quick to respond on
                                                emails and we
                                                were met at the Airport. Rented the convertible A3 to drive around
                                                Montenegro (would
                                                definitely recommend!). Car was clean and in a good condition. Will
                                                certainly use
                                                again. Thanks all!
                                            </div>
                                            <div class="testimonial-name">Michael
                                                Dowsett{{--<span class="testimonial-position">RUSSIA</span>--}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">
                                                Absolutely best experience I ever had with car rental. The owner is
                                                really helpful,
                                                friendly and will go extra mile for his customers. We didn’t book in
                                                advance so we
                                                had to wait for a car few hours. Meanwhile he dropped us in the city ,
                                                gave us some
                                                recommendations on places to visit, few hours later brought us the car .
                                                Owner is
                                                very flexible and will find the best solution for your needs. Highly
                                                recommended!!
                                                Thank you very much once again!
                                            </div>
                                            <div class="testimonial-name">Ieva
                                                Vainauskaitė{{--<span class="testimonial-position">RUSSIA</span>--}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">
                                                Very professional , easy and nice car to rental, we drove Montenegro,
                                                Croatia and
                                                Bosnia, picked up car in Tivat airport and delivered in Sarajevo
                                                airport. Nice and
                                                fast reply on what’s app with Abeona rental. Strongly recommended. I’ll
                                                chose them
                                                again.
                                            </div>
                                            <div class="testimonial-name">Dani Olav
                                                Nilsen{{--<span class="testimonial-position">RUSSIA</span>--}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">
                                                Absolutely friendly and nice persons are working here. It was a great
                                                and lovely
                                                experience. Car was nice and fresh. Filip and Nikola were amazing and
                                                kindly. Highly
                                                recommended.
                                            </div>
                                            <div class="testimonial-name">Кирилл
                                                Шульга{{--<span class="testimonial-position">RUSSIA</span>--}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="testimonial-text">
                                                Filip is beyond great! Highly communicative. Always ready and willing to
                                                help. Cars
                                                are clean and in great condition. Would definitely rent again when back
                                                in
                                                Montenegro
                                            </div>
                                            <div class="testimonial-name">Ben
                                                Shalom{{--<span class="testimonial-position">RUSSIA</span>--}}</div>
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
                            <p>Don't hesitate to reach out to us via Email if you have any questions or concerns - we're
                                here to help!</p>
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
    <div class="modal fade" id="updateReservation" tabindex="-1" role="dialog" aria-labelledby="updateReservation"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"
                     style="display: flex;align-items: flex-end;justify-content: space-between;border-bottom: 0px">
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
                                                            <select name="update-pick-up-location" id="update-pick-up"
                                                                    class="form-control"
                                                                    title="Pick up location is required"
                                                                    data-toggle="tooltip">

                                                                <option
                                                                    {{ urldecode($car_filter->pick_up_location) == 'tivat ' . __("Airport") ? "selected" : "" }}  value="tivat {{ __("Airport") }}">
                                                                    Tivat {{ __("Airport") }}</option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'tivat' ? "selected" : "" }}  value="tivat">
                                                                    Tivat
                                                                </option>
                                                                <option
                                                                    {{ urldecode($car_filter->pick_up_location) == 'podgorica ' . __("Airport") ? "selected" : "" }}  value="podgorica {{ __("Airport") }}">
                                                                    Podgorica {{ __("Airport") }}</option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'podgorica' ? "selected" : "" }}  value="podgorica">
                                                                    Podgorica
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'cetinje' ? "selected" : "" }}  value="cetinje">
                                                                    Cetinje
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'bar' ? "selected" : "" }}  value="bar">
                                                                    Bar
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'ulcinj' ? "selected" : "" }}  value="ulcinj">
                                                                    Ulcinj
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'petrovac' ? "selected" : "" }}  value="petrovac">
                                                                    Petrovac
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'budva' ? "selected" : "" }}  value="budva">
                                                                    Budva
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'kotor' ? "selected" : "" }} value="kotor">
                                                                    Kotor
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'dubrovnik' ? "selected" : "" }} value="dubrovnik">
                                                                    Dubrovnik
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'cetinje' ? "selected" : "" }}  value="cetinje">
                                                                    Cetinje
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'niksic' ? "selected" : "" }}  value="niksic">
                                                                    Nikšic
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'pljevlja' ? "selected" : "" }}  value="pljevlja">
                                                                    Pljevlja
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'berane' ? "selected" : "" }} value="berane">
                                                                    Berane
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'bijelo polje' ? "selected" : "" }}  value="bijelo polje">
                                                                    Bijelo Polje
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'kolasin' ? "selected" : "" }} value="kolasin">
                                                                    Kolašin
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'mojkovac' ? "selected" : "" }}  value="mojkovac">
                                                                    Mojkovac
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_up_location == 'zabljak' ? "selected" : "" }}  value="zabljak">
                                                                    Žabljak
                                                                </option>

                                                            </select>
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-location-arrow"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group has-icon has-label">
                                                            <label
                                                                for="update-pick-off-location">{{ __('Drop Off Location') }}</label>
                                                            <select name="update-pick-off-location"
                                                                    id="update-pick-off-location"
                                                                    class="form-control"
                                                                    title="{{ __('Drop off location is required') }}"
                                                                    data-toggle="tooltip">

                                                                <option
                                                                    {{ urldecode($car_filter->pick_off_location) == 'tivat ' . __("Airport") ? "selected" : "" }}  value="tivat {{ __("Airport") }}">
                                                                    Tivat {{ __("Airport") }}</option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'tivat' ? "selected" : "" }}  value="tivat">
                                                                    Tivat
                                                                </option>
                                                                <option
                                                                    {{ urldecode($car_filter->pick_off_location) == 'podgorica ' . __("Airport")  ? "selected" : "" }}  value="podgorica {{ __("Airport") }}">
                                                                    Podgorica {{ __("Airport") }}</option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'podgorica' ? "selected" : "" }}  value="podgorica">
                                                                    Podgorica
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'cetinje' ? "selected" : "" }}  value="cetinje">
                                                                    Cetinje
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'bar' ? "selected" : "" }}  value="bar">
                                                                    Bar
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'ulcinj' ? "selected" : "" }}  value="ulcinj">
                                                                    Ulcinj
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'petrovac' ? "selected" : "" }}  value="petrovac">
                                                                    Petrovac
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'budva' ? "selected" : "" }}  value="budva">
                                                                    Budva
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'kotor' ? "selected" : "" }}  value="kotor">
                                                                    Kotor
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'dubrovnik' ? "selected" : "" }} value="dubrovnik">
                                                                    Dubrovnik
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'cetinje' ? "selected" : "" }}  value="cetinje">
                                                                    Cetinje
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'niksic' ? "selected" : "" }}  value="niksic">
                                                                    Nikšic
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'pljevlja' ? "selected" : "" }}  value="pljevlja">
                                                                    Pljevlja
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'berane' ? "selected" : "" }} value="berane">
                                                                    Berane
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'bijelo polje' ? "selected" : "" }}  value="bijelo polje">
                                                                    Bijelo Polje
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'kolasin' ? "selected" : "" }} value="kolasin">
                                                                    Kolašin
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'mojkovac' ? "selected" : "" }}  value="mojkovac">
                                                                    Mojkovac
                                                                </option>
                                                                <option
                                                                    {{ $car_filter->pick_off_location == 'zabljak' ? "selected" : "" }}  value="zabljak">
                                                                    Žabljak
                                                                </option>

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
                                                            <label
                                                                for="update-pick-up-date">{{ __('Pick Up Date') }}</label>
                                                            <input type="text" class="form-control datepicker-update1"
                                                                   name="update-pick-up-date"
                                                                   id="update-pick-up-date"
                                                                   title="Pick up date is required"
                                                                   data-toggle="tooltip"
                                                                   value="{{ $car_filter->pick_up_date }}"
                                                                   placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-calendar update-pick-up-calendar-icon"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label
                                                                for="update-pick-up-time">{{ __('Pick Up Time') }}</label>
                                                            <div class='input-group date' id='update-pick-up-time'>
                                                                <input type='text'
                                                                       value="{{ $car_filter->pick_up_time }}"
                                                                       title="Pick up time is required"
                                                                       data-toggle="tooltip"
                                                                       name="update-pick-up-time" class="form-control"/>
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
                                                            <label
                                                                for="update-pick-off-date">{{ __('Drop Off Date') }}</label>
                                                            <input type="text" class="form-control datepicker-update2"
                                                                   name="update-pick-off-date"
                                                                   title="{{ __("Drop off date is required") }}"
                                                                   data-toggle="tooltip"
                                                                   value="{{ $car_filter->pick_off_date }}"
                                                                   id="update-pick-off-date" placeholder="dd/mm/yyyy">
                                                            <span class="form-control-icon"><i
                                                                    class="fa fa-calendar update-drop-of-calendar-icon"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group has-icon has-label">
                                                            <label
                                                                for="update-pick-off-time">{{ __('Drop Off Time') }}</label>
                                                            <div class='input-group date' id='update-pick-off-time'>
                                                                <input type='text'
                                                                       value="{{ $car_filter->pick_off_time }}"
                                                                       title="{{ __('Drop off time is required') }}"
                                                                       data-toggle="tooltip"
                                                                       name="update-pick-off-time"
                                                                       class="form-control"/>
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
                                                    <button data-id="{{ $car->id }}" id="update-reservation-details"
                                                            type="submit" class="btn btn-submit btn-theme pull-right"
                                                            style="margin-bottom: 5px">
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

    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: none">
                    <div style="display: flex; align-items: baseline; flex-wrap: wrap;padding: 0px 20px;">
                        <div>
                            <h3 style="margin-top: 10px">{{ $car->name }}</h3>
                        </div>

                        <div class="price" style="padding-left: 20px">
                            <strong style="font-size: 22px">{{ $car->totalPrice }}</strong>
                            <span>{{ __('$/for number of day(s)', ['number' => $car->totalDays]) }}</span>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin-top: -30px">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="display: flex; flex-wrap: wrap; justify-content: space-around; margin-bottom: 20px">
                        <div class="confirm-modal-box">
                            <h5 class="widget-title-sub">{{ __('Pick Up Location') }}</h5>
                            <div class="media" style="display: flex">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="" style="width: fit-content;display: flex;flex-direction: column;">
                                    <input name="pick-up-date" class="reservation-info" disabled
                                           value="{{ $car_filter->pick_up_date }}">
                                    <input name="pick-up-time" class="reservation-info" disabled
                                           value="{{ $car_filter->pick_up_time }}">
                                </div>
                            </div>
                            <div class="media" style="display:flex;">
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="" style="width: fit-content;">
                                    <input name="pick-up-location" class="reservation-info" disabled
                                           value="{{ str_replace('%20', ' ', ucfirst($car_filter->pick_up_location)) }}">
                                </div>
                            </div>
                            <div>
                                {{ __('Pick up price') }}:
                                @if( str_replace('%20', ' ',$car_filter->pick_up_location) == 'herceg novi' || $car_filter->pick_up_location == 'cetinje')
                                    <input type="hidden" id="pick-up-price" value="30">
                                    30 &euro;
                                @elseif(  $car_filter->pick_up_location == 'tivat' ||
                                            str_replace( '%20',' ',$car_filter->pick_up_location) == 'tivat aerodrom' ||
                                            str_replace( '%20',' ',$car_filter->pick_up_location) == 'tivat Airport' ||
                                            $car_filter->pick_off_location == 'podgorica' ||
                                            str_replace( '%20',' ',$car_filter->pick_up_location) == 'podgorica aerodrom' ||
                                            str_replace( '%20',' ',$car_filter->pick_up_location) == 'podgorica Airport' ||
                                            $car_filter->pick_up_location == 'budva')
                                    <input type="hidden" id="pick-up-price" value="0">
                                    0 &euro;
                                @elseif(  $car_filter->pick_up_location == 'ulcinj')
                                    <input type="hidden" id="pick-up-price" value="50">
                                    50 &euro;
                                @elseif(  $car_filter->pick_up_location == 'dubrovnik')
                                    <input type="hidden" id="pick-up-price" value="100">
                                    100 &euro;
                                @else
                                    <input type="hidden" id="pick-up-price" value="70">
                                    70 &euro;
                                @endif
                            </div>
                        </div>
                        <div class="confirm-modal-box">
                            <h5 class="widget-title-sub">{{ __('Drop Off Location') }}</h5>
                            <div class="media" style="display:flex;">
                                <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
                                <div class="" style="width: fit-content;display: flex;flex-direction: column;">
                                    <input name="pick-off-date" class="reservation-info" disabled
                                           value="{{ $car_filter->pick_off_date }}">
                                    <input name="pick-off-time" class="reservation-info" disabled
                                           value="{{ $car_filter->pick_off_time }}">
                                </div>
                            </div>
                            <div class="media" style="display: flex">
                                <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
                                <div class="" style="width: fit-content;">
                                    <input name="pick-off-location" class="reservation-info" disabled
                                           value="{{ str_replace('%20', ' ', ucfirst($car_filter->pick_off_location)) }}">
                                </div>
                            </div>
                            <div>
                                {{ __('Drop off price') }}:
                                @if( str_replace('%20', ' ',$car_filter->pick_off_location) == 'herceg novi' || $car_filter->pick_off_location == 'cetinje')
                                    <input type="hidden" id="pick-off-price" value="30">
                                    30 &euro;
                                @elseif(  $car_filter->pick_off_location == 'tivat' ||
                                            str_replace( '%20',' ',$car_filter->pick_off_location) == 'tivat aerodrom' ||
                                            str_replace( '%20',' ',$car_filter->pick_off_location) == 'tivat Airport' ||
                                            $car_filter->pick_off_location == 'podgorica' ||
                                            str_replace( '%20',' ',$car_filter->pick_off_location) == 'podgorica aerodrom' ||
                                            str_replace( '%20',' ',$car_filter->pick_off_location) == 'podgorica Airport' ||
                                            $car_filter->pick_off_location == 'budva')
                                    <input type="hidden" id="pick-off-price" value="0">
                                    0 &euro;
                                @elseif(  $car_filter->pick_off_location == 'ulcinj')
                                    <input type="hidden" id="pick-off-price" value="50">
                                    50 &euro;
                                @elseif(  $car_filter->pick_off_location == 'dubrovnik')
                                    <input type="hidden" id="pick-off-price" value="100">
                                    100 &euro;
                                @else
                                    <input type="hidden" id="pick-off-price" value="70">
                                    70 &euro;
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h5 class="widget-title-sub" style="margin-bottom: 0px">{{ __('Extras & Frees') }}</h5>
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
                    <button id="confirm-booking" data-id="{{ $car->id }}"
                            class="btn btn-theme pull-right btn-reservation-now g-recaptcha">{{ __('Confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env("RECAPTCHA_KEY") }}"></script>
    <script src="{{ asset('assets/phone-validation/js/intlTelInput-jquery.js') }}"></script>
    <script>
        $("#phone-number").intlTelInput({
            // whether or not to allow the dropdown
            allowDropdown: true,
            autoInsertDialCode: true,
            autoPlaceholder: "polite",
            customPlaceholder: null,
            dropdownContainer: null,
            excludeCountries: [],
            formatOnDisplay: true,
            geoIpLookup: null,
            hiddenInput: "",
            initialCountry: "",
            localizedCountries: null,
            nationalMode: true,
            onlyCountries: [],
            placeholderNumberType: "MOBILE",
            preferredCountries: ["fr", "gb", "de", "il", "tr"],
            separateDialCode: true,
            showFlags: true,
            utilsScript: ""
        });

        $(document).ready(function () {
            $('#update-reservation-details').click(function (e) {
                e.preventDefault();

                let pickUpLocation = $("select[name='update-pick-up-location']");
                let pickOffLocation = $("select[name='update-pick-off-location']");
                let pickUpDate = $("input[name='update-pick-up-date']");
                let pickOffDate = $("input[name='update-pick-off-date']");
                let pickUpTime = $("input[name='update-pick-up-time']");
                let pickOffTime = $("input[name='update-pick-off-time']");
                const car = $(this).data('id');

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

            $('#confirm-booking').click(function (e) {
                e.preventDefault();
                const car = $(this).data('id');
                const car_price = $('#car-total-price').val();
                const second_driver = ($('#second-driver').is(':checked')) ? 1 : 0;
                const unlimited_mileage = ($('#unlimited-mileage').is(':checked')) ? 1 : 0;
                const border_crossing = ($('#border-crossing').is(':checked')) ? 1 : 0;
                const baby_seat_small = ($('#baby-seat-small').is(':checked')) ? 1 : 0;
                const baby_seat_big = ($('#baby-seat-big').is(':checked')) ? 1 : 0;
                const baby_seat_booster = ($('#baby-seat-booster').is(':checked')) ? 1 : 0;
                const basic_insurance = ($('#basic-insurance').is(':checked')) ? 1 : 0;
                const full_insurance = ($('#full-insurance').is(':checked')) ? 1 : 0;

                const first_name = $('#first-name').val();
                const last_name = $('#last-name').val();
                const email = $('#email').val();
                const phone_number = '+' + $("#phone-number").intlTelInput("getSelectedCountryData").dialCode + $("#phone-number").val();
                const additional_information = $('#additional-info').val()


                const pick_up_location = $("input[name='pick-up-location']").val()
                const pick_up_time = $("input[name='pick-up-time']").val()
                const pick_up_date = $("input[name='pick-up-date']").val()
                const pick_off_location = $("input[name='pick-off-location']").val()
                const pick_off_date = $("input[name='pick-off-date']").val()
                const pick_off_time = $("input[name='pick-off-time']").val()

                const pick_up_price = parseInt($('#pick-up-price').val())
                const pick_off_price = parseInt($('#pick-off-price').val())

                const total = $('#total-amount').val()

                const dataString = 'car_id=' + car + '&car_price=' + car_price + '&second_driver=' + second_driver + '&unlimited_mileage=' + unlimited_mileage
                    + '&border_crossing=' + border_crossing + '&baby_seat_small=' + baby_seat_small
                    + '&baby_seat_big=' + baby_seat_big + '&baby_seat_booster=' + baby_seat_booster
                    + '&basic_insurance=' + basic_insurance + '&full_insurance=' + full_insurance
                    + '&first_name=' + first_name + '&last_name=' + last_name
                    + '&email=' + email + '&phone_number=' + phone_number + '&additional_information=' + additional_information
                    + '&pick_up_location=' + pick_up_location + '&pick_up_time=' + pick_up_time + '&pick_up_date=' + pick_up_date
                    + '&pick_off_location=' + pick_off_location + '&pick_off_date=' + pick_off_date + '&pick_off_time=' + pick_off_time
                    + '&pick_up_price=' + pick_up_price + '&pick_off_price=' + pick_off_price
                    + '&total=' + total;

                $.ajax({
                    type: "POST",
                    url: "/bookings",
                    data: dataString,
                    enctype: 'multipart/form-data',
                    beforeSend: function () {
                        $('#reservationModal').modal('hide');
                    },
                    success: function () {
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
                    error: function () {
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

                const pickUpPrice = $('#pick-up-price').val()
                const pickoffPrice = $('#pick-off-price').val()
                let deposit = '';

                let total = parseInt($('#car-total-price').val()) + parseInt(pickUpPrice) + parseInt(pickoffPrice)
                let numOfDays = parseInt($('#car-total-days').val())

                //.not(":disabled")
                $('.car-extras:checkbox:checked').not(":disabled").map(function () {
                    if ($(this).attr("name") === 'full_insurance') {
                        carExtras[$(this).attr("name")] = $('#full-insurance-value').val() * numOfDays + "&euro;"
                        total += parseInt($('#full-insurance-value').val() * numOfDays)
                    } else if ($(this).attr("name") === 'basic_insurance') {
                        carExtras[$(this).attr("name")] = ' <span class="basic-insurance-info">includes damage responsibility up to ' +
                            '<span class="fee-value"> ' + $('#participation-damage-value').val() + '&euro;</span> and deposit' +
                            ' <span class="fee-value">' + $('#deposit-value').val() + '&euro;</span> <br> Please make sure your deposit is in cash. We accept all currencies. </span>'

                        deposit = '<div>Deposit: <span class="total"> ' + $('#deposit-value').val() + '&euro;</span> </div>'
                    } else if ($(this).attr("name") === 'border_crossing') {
                        carExtras[$(this).attr("name")] = 20 + '&euro;';
                        total += parseInt(20)
                    } else {
                        carExtras[$(this).attr("name")] = '0 &euro;'
                    }

                });

                $.each(carExtras, function (index, value) {
                    let feeName = index.replace(/_+/g, ' ').toLowerCase().replace(/\b[a-z]/g, function (letter) {
                        return letter.toUpperCase();
                    });

                    // if($.isNumeric(parseFloat(value))) {
                    //     total += parseFloat(value)
                    // }

                    $(".append").append(
                        '<li class="fee-list">' + feeName + '<span  class="fee-value"> ' + value + '</span>' +
                        '</li>');

                });

                $(".total-price").append(
                    '<input type="hidden" id="total-amount" value="' + total + '">' +
                    '<div> Total: <span class="total"> ' + total + '&euro; </span> </div>' + deposit
                );

                $('input.customer-info').map(function () {
                    customerInfo[$(this).attr("name")] = this.value
                });

                customerInfo[$('textarea.customer-info').attr("name")] = $('textarea.customer-info').val()

                $('input.reservation-info').map(function () {
                    reservationInfo[$(this).attr("name")] = this.value
                });

                const firstName = $(".form-delivery input#first-name");
                if (firstName.val() === "" || firstName.val() === "First Name:*") {
                    firstName.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    firstName.focus();
                    clear();
                    return false;
                }

                const lastName = $(".form-delivery input#last-name");
                if (lastName.val() === "" || lastName.val() === "Last Name:*") {
                    lastName.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    lastName.focus();
                    clear();
                    return false;
                }

                const email = $(".form-delivery input#email");
                if (email.val() === "" || email.val() === "Your Email Address:*") {
                    email.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    email.focus();
                    clear();
                    return false;
                }

                const phone = $("#phone-number");
                const phone_number = '+' + phone.intlTelInput("getSelectedCountryData").dialCode + phone.val();

                const filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
                if (phone.val() === "" || phone.val() === "Phone Number:*") {
                    phone.tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                    phone.focus();
                    clear();
                    return false;
                }

                phone.on("focus", function () {
                    $('.phone-error').css("display", "none")
                });

                if (!filter.test(phone_number)) {
                    $('.phone-error').css("display", "block")
                    clear();
                    return false;
                }


                if ($('.insurance-check').filter(':checked').length < 1 || $('.insurance-check').filter(':checked').length > 1) {
                    $('#full-insurance').tooltip({placement: 'right', trigger: 'manual'}).tooltip('show');
                    $('#full-insurance').focus();
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

        $(document).ready(function () {
            $('#home').click(function () {
                $('[data-toggle="tooltip"]').tooltip("hide");
            });

            $('#basic-insurance').change(function () {
                $('.conditional-display').fadeToggle();

                if (this.checked) {
                    $('#full-insurance').prop('checked', false);
                } else {
                    $('#full-insurance').prop('checked', true);
                }
            });

            $('#full-insurance').change(function () {
                console.log(this.checked)
                if (this.checked) {
                    $('.conditional-display').fadeToggle();
                    $('#basic-insurance').prop('checked', false);
                } else {
                    $('#basic-insurance').prop('checked', true);
                    $(".conditional-display").show("slow");
                }
            });

        });

        function clear() {
            $('.fee-list').remove();
            $(".total-price").empty();
        }
    </script>

@endsection
