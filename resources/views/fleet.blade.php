@extends('layouts.app')

@section('content')
    <!-- PAGE -->
    @isset($details)
        {{$details}}
    @endisset
    <section class="page-section color">
        {{json_encode($car_filter)}}
        <div class="container">

            <p class="text-left lead">
                {{ __('With flexible rental options and affordable pricing, renting a car has never been easier or more accessible.') }}
                <br>
                {{ __('Our online reservation system makes it easy to book your rental car in just a few clicks, so you can focus on planning your trip.') }}
            </p>
            <hr class="page-divider"/>
                <div class="container">
                    @foreach ($cars->chunk(3) as $cars_set)
                        <div class="row">
                            @foreach ($cars_set as $car)
                                <div class="col-md-4">
                                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                                        <div class="media">
                                            <a class="media-link" data-gal="prettyPhoto"
                                               href="{{ asset('assets/img/preview/cars/car-370x220x1.jpg')}} ">
                                                <img src="{{ asset('assets/img/preview/cars/car-370x220x1.jpg') }}" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title"><a href="#">{{ $car->name }}</a></h4>
                                            <div class="caption-text">{{ __('Start from price a day', ['price' => 39 ]) }}</div>
                                            <div class="buttons">
                                                <button id="rent-it" class="btn btn-theme">{{ __('Rent It') }}</button>
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
        $('#rent-it').click(function(e) {

            e.preventDefault();

            $.ajax({
                type:'GET',
                url:"/bookings",
                data:{
                    car_id: 1,
                    pick_off_location: 'test',
                    pick_up_date: '13-03-2023',
                    pick_off_date: '13-03-2023',
                    pick_up_time: '20:00',
                    pick_off_time: '20:00',
                },
                success:function(response){
                    window.location = '/bookings'
                    /*  console.log(response)
                      window.location.replace(response);*/
                }
            });
        })
    </script>
@endsection
