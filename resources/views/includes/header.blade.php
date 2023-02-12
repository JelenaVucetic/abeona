<nav class=" navbar-light bg-light" style="display: flex; justify-content: space-between; flex-wrap: wrap; margin-top: 0px">
    <div class="contact-header">
        <div>
            <p class="name">DANKO</p>
            <p class="telephone">+382 69 414 413</p>
        </div>
        <div>
            <p class="name">BRANKO</p>
            <p class="telephone">+382 67 544 058</p>
        </div>
        <div>
            <p class="name">FILIP</p>
            <p class="telephone">+382 67 974 281</p>
        </div>

    </div>
    <div style="display:flex; margin: 0px 10px">
        <p><img style="width: 20px;" src="{{ asset('assets/img/montenegro.png') }}"></p>
        <p style="margin-left: 10px"><img style="width: 20px;" src="{{ asset('assets/img/united-states-of-america.png') }}"></p>
    </div>
</nav>
<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('welcome') }}"><img style="width: 200px;" src="{{ asset('assets/img/abeona.png') }}" alt="Rent It"/></a>
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
                                    <a href="{{ route('profile.edit') }}">Profile</a>
                                </li>

                                <li class="{{ Route::currentRouteName() == 'cars.index' ? 'active' : '' }}">
                                    <a href="{{ route('cars.index') }}">Cars</a>
                                </li>

                               {{-- <li class="{{ (strpos(Route::currentRouteName(), 'car-images.index') == 0) ? 'active' : '' }}">
                                    <a href="{{ route('car-images.index') }}">Car Images</a>
                                </li>--}}

                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" style="padding: 27px 10px;">
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
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'fleet' ? 'active' : '' }}">
                                    <a href="{{ route('fleet') }}">Fleet</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'about-us' ? 'active' : '' }}">
                                    <a href="{{ route('about-us') }}">About Us</a>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                                    <a href="{{route('contact')}}">Contact</a>
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
