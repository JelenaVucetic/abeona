@extends('layouts.app')

@section('content')
    <!-- PAGE -->
    <section class="page-section color">

        <div class="container">

            <p class="text-left lead">
                {{ __('With flexible rental options and affordable pricing, renting a car has never been easier or more accessible.') }}
                <br>
                {{ __('Our online reservation system makes it easy to book your rental car in just a few clicks, so you can focus on planning your trip.') }}
            </p>
            <hr class="page-divider"/>
                <div class="container">
                    <input type="hidden"
                           value="{{ isset($car_filter) ? $car_filter->pick_up_location : "Tivat" }}"
                           name="pick_up_location">
                    <input type="hidden"
                           value="{{isset($car_filter) ?  $car_filter->pick_up_date : now()->format('d/m/Y')}}"
                           name="pick_up_date">
                    <input type="hidden"
                           value="{{ isset($car_filter) ? $car_filter->pick_up_time : date('H:i')  }}"
                           name="pick_up_time">
                    <input type="hidden"
                           value="{{ isset($car_filter) ? $car_filter->pick_off_location : "Tivat"}}"
                           name="pick_off_location">
                    <input type="hidden"
                           value="{{ isset($car_filter) ? $car_filter->pick_off_date : now()->format('d/m/Y')}}"
                           name="pick_off_date">
                    <input type="hidden"
                           value="{{ isset($car_filter) ?$car_filter->pick_off_time : date('H:i')}}"
                           name="pick_off_time">
                    @foreach ($cars->chunk(3) as $cars_set)
                        <div class="row">
                            @foreach ($cars_set as $car)
                                <div class="col-md-4">
                                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                                        <div class="media">
                                            <a class="media-link" data-gal="prettyPhoto"
                                               href="{{ asset('storage/' . $car->images[0]["path"]) }}">
                                                {{-- <img src="{{ asset('storage/' . $car->images[0]["path"]) }}" alt=""/> --}}
                                                <img src="{{config('image.path') . $car->images[0]["path"] }}" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title"><a href="#">{{ $car->name }}</a></h4>
                                            <div class="caption-text">{{ __('Start from price a day', ['price' => 39 ]) }}</div>
                                            <div class="buttons">
                                                <button class="rent-car btn btn-theme" data-id="{{ $car->id }}">{{ __('Rent It') }}</button>
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
        </div>
    </section>
    <!-- /PAGE -->
@endsection
@section('js')
    <script>
        $('.rent-car').click(function(e) {
            e.preventDefault();

            const car =  $(this).data('id');
            window.location.href =  '/{{ app()->getLocale() }}/cars/' + car + '/book?' + $.param({
                car_id: car,
                pick_up_location: $("input[name=pick_up_location]").val(),
                pick_off_location: $("input[name=pick_off_location]").val(),
                pick_up_date: $("input[name=pick_up_date]").val(),
                pick_off_date: $("input[name=pick_off_date]").val(),
                pick_up_time: $("input[name=pick_up_time]").val(),
                pick_off_time: $("input[name=pick_off_time]").val()
            });
        })
    </script>
@endsection
