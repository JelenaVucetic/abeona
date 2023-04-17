@extends('layouts.app')

@section('content')

    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">

            <p class="text-left lead"><strong>Abeona</strong>
                {{ __('about-us-intro-1') }}
            </p>
            <p class="text-left lead">
                {{ __('about-us-intro-2') }}
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
                                      {{--  <a class="media-link" data-gal="prettyPhoto"
                                           href="/storage/{{collect(($car->images)->where('type', 'main')->first())['path']}}">
                                            --}}{{-- <img src="{{ asset('storage/' . $car->images[0]["path"]) }}" alt=""/> --}}{{--
                                            <img src="/storage/{{collect(($car->images)->where('type', 'main')->first())['path']}}" alt=""/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>--}}
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="#">{{ $car->name }}</a></h4>
                                        <div class="caption-text">{{ __('Start from price a day', ['price' => $car->pricePerDay ]) }}</div>
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

                </div>

                <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

            </div>
        </div>
    </section>
    <!-- /PAGE -->

@endsection
