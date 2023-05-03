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
                                    @include('includes.car')
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
