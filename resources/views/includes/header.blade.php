<nav>
{{--    <div style="display:flex; margin: 0px 30px; justify-content: end">--}}
{{--        @foreach(config('app.available_locales') as $locale)--}}
{{--            <x-nav-link :href="route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale])"--}}
{{--                        :active="app()->getLocale() == $locale">--}}
{{--                <img style="width: 20px;margin:10px 5px" src="{{ asset('assets/img/' . $locale . '.png') }}">--}}
{{--            </x-nav-link>--}}
{{--        @endforeach--}}
{{--    </div>--}}
</nav>
<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('welcome', app()->getLocale()) }}"><img src="{{ asset('assets/img/abeona.png') }}"
                                                                          alt="Rent It"/></a>
            </div>
            <!-- /Logo -->

            <!-- Mobile menu toggle button -->
            <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
            <!-- /Mobile menu toggle button -->

            <!-- Navigation -->
            <nav class="navigation closed clearfix">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- navigation menu -->
                        <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                        <ul class="nav sf-menu">
                            @if (auth()->check())
                                <li class="{{ Route::currentRouteName() == 'dashboard'? 'active' : '' }}">
                                    <a href="{{ route('dashboard', app()->getLocale()) }}">Dashboard</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'profile.edit' ? 'active' : '' }}">
                                    <a href="{{ route('profile.edit', app()->getLocale()) }}"> {{ __('Profile') }}</a>
                                </li>

                                <li class="{{ Route::currentRouteName() == 'cars.index' ? 'active' : '' }}">
                                    <a href="{{ route('cars.index') }}">{{ __('Cars') }}</a>
                                </li>

                                 <li class="{{ (strpos(Route::currentRouteName(), 'car-images.index') == 0) ? 'active' : '' }}">
                                     <a href="{{ route('car-images.index') }}">Car Images</a>
                                 </li>

                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout', app()->getLocale()) }}"
                                          style="padding: 27px 10px;">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>

                            @else
                                <li class="{{ Route::currentRouteName() == 'welcome' ? 'active' : '' }}">
                                    <a href="{{ route('welcome', app()->getLocale()) }}">{{ __('Home') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'fleet' ? 'active' : '' }}">
                                    <a href="{{ route('fleet', app()->getLocale()) }}">{{ __('Fleet') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'about-us' ? 'active' : '' }}">
                                    <a href="{{ route('about-us', app()->getLocale()) }}">{{ __('About Us') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                                    <a href="{{route('contact', app()->getLocale())}}">{{ __('Contact') }}</a>
                                </li>
                            @endif

                            <li>
                                <ul class="social-icons">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /navigation menu -->
                    </div>
                </div>
                <!-- Add Scroll Bar -->
                <div class="swiper-scrollbar"></div>
            </nav>
            <!-- /Navigation -->

        </div>
    </div>

</header>
