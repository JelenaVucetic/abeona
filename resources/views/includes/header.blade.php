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
        <p><img style="width: 20px;" src="assets/img/montenegro.png"></p>
        <p style="margin-left: 10px"><img style="width: 20px;" src="assets/img/united-states-of-america.png"></p>
    </div>
</nav>
<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img style="width: 200px;" src="assets/img/abeona.png" alt="Rent It"/></a>
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
                            <li class="active">
                                <a href="{{ route('welcome') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('fleet') }}">Fleet</a>
                            </li>
                            <li>
                                <a href="{{ route('about-us') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
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
