<header>
    <div class="header-top-area d-none">
        <div class="container custom-container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="header-top-left">
                        <ul>
                            <li>Call us: 747-800-9880</li>
                            <li>
                                <i class="far fa-clock"></i>
                                Opening Hours: 7:00 am - 9:00 pm (Mon - Sun)
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="header-top-right">
                        <ul class="header-top-social">
                            <li class="follow">Follow :</li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="menu-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('assets/img/logo/1453sokakhayvanlar-logo-16.png') }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li @class([
                                        'active' => request()->routeIs('home'),
                                    ])>
                                        <a href="/{{app()->getLocale()}}">{!! __("Home") !!} </a>
                                    </li>
                                    <li @class([
                                        'active' => request()->routeIs('about-us'),
                                    ])>
                                        <a href="{{ Route('about-us', app()->getLocale()) }}" onclick="(e) => handleActive(e)">
                                            {!! __("About us") !!}

                                        </a>
                                    </li>
                                    <li @class([
                                        'active' => request()->routeIs('pets.*'),
                                    ])>
                                        <a href="{{ Route('pets.index', app()->getLocale()) }}" onclick="(e) => handleActive(e)">
                                            {!! __("Dog List") !!}

                                        </a>
                                    </li>
                                    <li @class([
                                        'active' => request()->routeIs('donatation'),
                                    ])>
                                        <a href="{{ Route('donatation', app()->getLocale()) }}" onclick="(e) => handleActive(e)">
                                            {!! __("Donations And Sponsorships") !!}

                                        </a>
                                    </li>
                                    <li @class([
                                        'active' => request()->routeIs('posts.*'),
                                    ])>
                                        <a href="{{ Route('posts.index', app()->getLocale()) }}" onclick="(e) => handleActive(e)">
                                            {!! __("Blog") !!}

                                        </a>
                                    </li>
                                    <li @class([
                                        'active' => request()->routeIs('contact'),
                                    ])>
                                        <a href="{{ Route('contact', app()->getLocale()) }}" onclick="(e) => handleActive(e)">
                                            {!! __("Contact") !!}

                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-search">
                                        <a href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>

                                    <li class="header-btn">
                                        <a href="#" class="btn">
                                            {!! __("Adopt Here") !!}

                                            <img src="{{ asset('assets/img/icon/w_pawprint.png') }}" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="nav-logo">
                                <a href="/">
                                    <img src="{{ asset('assets/img/logo/1453sokakhayvanlar-logo-16.png') }}"
                                        alt="" title="true">
                                </a>
                            </div>
                            <div class="menu-outer"></div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fab fa-facebook-square"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fab fa-pinterest-p"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fab fa-instagram"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                </div>
            </div>
        </div>
        <div class="header-shape d-none" style=" background-image:url('assets/img/bg/header_shape.png')"></div>
    </div>

    <div class="search-popup-wrap" tabIndex="-1" role="dialog" aria-hidden="true">
        <div class="search-close">
            <span>
                <i class="fas fa-times"></i>
            </span>
        </div>
        <div class="search-wrap text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">{!! __("... Search Here ...") !!}</h2>
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Type keywords here">
                                <button class="search-btn" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
