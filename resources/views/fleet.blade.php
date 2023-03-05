@extends('layouts.app')

@section('content')
    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">

            <p class="text-left lead">With flexible rental options and affordable pricing, renting a car has never been easier or more accessible.
                <br>
                Our online reservation system makes it easy to book your rental car in just a few clicks, so you can focus on planning your trip.</p>
            <hr class="page-divider"/>
                <div class="container">
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
                                            <div class="caption-text">Start from 39$/per a day</div>
                                            <div class="buttons">
                                                <a class="btn btn-theme" href="#">Rent It</a>
                                            </div>
                                            <table class="table">
                                                <tr>
                                                    <td><i class="fa fa-dashboard"></i> {{ $car->motor }}</td>
                                                    <td><i class="fa fa-cog"></i> {{ $car->transmission }}</td>
                                                    <td><img style="width: 15px" src="assets/img/car.png" alt=""> {{ $car->doors }}</td>
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
