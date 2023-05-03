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
                                @include('includes.car')
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
