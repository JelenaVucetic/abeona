<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('welcome') }}"><img src="{{ asset('assets/img/abeona.png') }}" alt="Rent It"/></a>
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
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'profile.edit' ? 'active' : '' }}">
                                    <a href="{{ route('profile.edit') }}"> {{ __('Profile') }}</a>
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
                                    >
                                        @csrf

                                        <a :href="route('logout')"
                                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('LOG OUT') }}
                                        </a>
                                    </form>
                                </li>
                            @else
                                <li class="{{ Route::currentRouteName() == 'welcome' ? 'active' : '' }}">
                                    <a href="{{ route('welcome') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'fleet' ? 'active' : '' }}">
                                    <a href="{{ route('fleet') }}">{{ __('Fleet') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'about-us' ? 'active' : '' }}">
                                    <a href="{{ route('about-us') }}">{{ __('About Us') }}</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                                    <a href="{{route('contact')}}">{{ __('Contact') }}</a>
                                </li>
                            @endif

                            <li style="display: flex;align-items: center">
                                <ul class="social-icons">
                                    <li><a target="_blank" href="https://www.facebook.com/abeonarentacartivat"
                                           class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/abeonarentacar/"
                                           class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li>
                                        <a style="font-weight: 600;    margin-right: 10px;
    margin-left: 5px;text-transform: uppercase; color: #f8981d"
                                           rel="alternate"
                                           hreflang="{{ Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() }}"
                                           href="{{ LaravelLocalization::getLocalizedURL(Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale(), null, [], true) }}">
                                            {{Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale()}}
                                        </a>
                                    </li>

                                    @foreach(Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if(Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() != $localeCode)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}" style="font-weight: 600;  text-transform: uppercase"
                                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{$localeCode}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                                {{--  <div class="dropdown" style="text-transform: uppercase">
                                      <a rel="alternate"
                                         hreflang="{{ Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() }}"
                                         href="{{ LaravelLocalization::getLocalizedURL(Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale(), null, [], true) }}">
                                          {{Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale()}}
                                      </a>
                                      @foreach(Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                          @if(Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() != $localeCode)
                                              <div class="dropdown-options">
                                                  <a rel="alternate" hreflang="{{ $localeCode }}"
                                                     href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                      {{$localeCode}}
                                                  </a>
                                              </div>
                                          @endif
                                      @endforeach
                                  </div>--}}
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
