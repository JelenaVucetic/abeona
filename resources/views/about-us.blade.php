@extends('layouts.app')

@section('content')

    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">

            <p class="text-left lead"><strong>Abeona</strong>
                is a car rental service which offers you a wide variety of vehicles to fit your every need,
                whether you're planning a road trip or just need a car for a few days. We pride ourselves on providing reliable, well-maintained vehicles and
                exceptional customer service to make your rental experience as smooth and enjoyable as possible.</p>
            <p class="text-left lead">
                Abeona's name comes from the Latin verb abeo, "to depart, go away, or go forth". She was believed to especially guard
                children as they took their first steps away from home to explore the world, an anxious time for parents,
                perhaps reflected in the fact that abeo carries the added meaning of "to die, disappear, or be changed".
                Abeona watched over any "first steps", whether literal or metaphoric. With Her associate Adiona, Abeona was believed to
                teach toddlers to walk. And when that child grew up and left home—whether due to marriage, college,
                or to make his or her way in the world—Abeona was there to ease the fears of the parents and guard their son or daughter.
            </p>
            <hr class="page-divider"/>

            <div class="swiper swiper--offers-best">
                <div class="swiper-container">

                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($cars as $car)
                            <div class="swiper-slide">
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
                                                <td><img style="width: 15px" src="assets/img/door.jpg" alt=""> {{ $car->doors }}</td>
                                                <td><i class="fa fa-users"></i> {{ $car->passenger }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

                <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

            </div>
        </div>
    </section>
    <!-- /PAGE -->

@endsection
