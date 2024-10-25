<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="{{ __('Description') }}" />
    <link rel="apple-touch-icon" href="/favicon.png" />

    <!-- Primary Meta Tags -->
    <title>{{ config('app.name', __('Title')) }}</title>

    <meta name="title" content="{{ __('Title') }}" />
    <meta name="description" content="{{ __('Description') }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://1453sokakhayvanlari.com/" />
    <meta property="og:title" content="{{ __('Title') }}" />
    <meta property="og:description" content="{{ __('Description') }}" />
    <meta property="og:image" content="{{ url('/img/meta-tags-2.jpg') }}" />
    <meta name="robots" content="max-image-preview:large">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="250">
    <meta property="og:image:height" content="250">
    <meta property="og:type" content="website">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://1453sokakhayvanlari.com/" />
    <meta property="twitter:title" content="{{ __('Title') }}" />
    <meta property="twitter:description" content="{{ __('Description') }}" />
    <meta property="twitter:image" content="{{ url('/img/meta-tags-2.jpg') }}" />

    <!-- Meta Tags Generated with https://1453sokakhayvanları.com -->



    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <!-- <link rel="manifest" href="%PUBLIC_URL%/manifest.json" /> -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <!-- Preloader -->
    <div id="preloader">
        <img src="{{ asset('assets/img/preloader.gif') }}" alt="">
    </div>
    <!-- Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    @include('parts.header')

    <main>
        @yield('content')
    </main>
    @include('parts.footer')


    <!-- <script src="js/vendor/jquery-3.6.0.min.js"></script> -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        const handleActive = (e) => {
            document.querySelectorAll(".main-menu ul li").forEach((el) => {
                el.classList.remove("active");
            });
            e.target.parentNode.classList += " active";
        };
        const subActive = (e) => {
            document.querySelectorAll(".main-menu ul li").forEach((el) => {
                el.classList.remove("active");
            });
            e.target.parentNode.parentNode.parentNode.classList += " active";
        };
    </script>
    <script>
        //SubMenu Dropdown Toggle
        /* if ($('.menu-area li. ul').length) {
            $('.menu-area .navigation li.').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

        } */

        $(".navbar-toggle").on("click", function() {
            $(".navbar-nav").addClass("mobile_menu");
        });
        $(".navbar-nav li a").on("click", function() {
            $(".navbar-collapse").removeClass("show");
        });



        $(".search-close").on("click", function() {
            $(".search-popup-wrap").slideUp(500);
        });
    </script>
    <script>
        $(function() {
            console.log("ready!");
            $('#preloader').delay(0).fadeOut();
        });
    </script>
    @stack('scripts')
</body>

</html>
