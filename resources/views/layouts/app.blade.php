<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="%PUBLIC_URL%/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="1453 Association for the Protection and Survival of Street Animals  " />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/favicon.png" />

    <!-- Primary Meta Tags -->
    <title>{{ config('app.name', '1453 Sokak Hayvanlarını Koruma ve Yaşatma Derneği') }}</title>

    <meta name="title" content="1453 Sokak Hayvanlarını Koruma ve Yaşatma Derneği" />
    <meta name="description"
        content="1453 Sokak Hayvanlarını Koruma ve Yaşatma Derneği, sokak hayvanlarının korunması, bakımı ve yaşatılmasını amaçlayan bir dernek olarak, hayvanlara daha iyi bir yaşam sağlamak için çalışmalar yürütmektedir. Bağış yaparak ve gönüllü olarak siz de destek olabilirsiniz." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://1453sokakhayvanlari.com/" />
    <meta property="og:title" content="1453 Sokak Hayvanlarını Koruma ve Yaşatma Derneği" />
    <meta property="og:description"
        content="1453 Sokak Hayvanlarını Koruma ve Yaşatma Derneği, sokak hayvanlarının korunması, bakımı ve yaşatılmasını amaçlayan bir dernek olarak, hayvanlara daha iyi bir yaşam sağlamak için çalışmalar yürütmektedir. Bağış yaparak ve gönüllü olarak siz de destek olabilirsiniz." />
    <meta property="og:image" content="https://kutto-eosin.vercel.app/img/meta-tags-2.jpg" />
    <meta name="robots" content="max-image-preview:large">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="250">
    <meta property="og:image:height" content="250">
    <meta property="og:type" content="website">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://1453sokakhayvanlari.com/" />
    <meta property="twitter:title" content="1453 Sokak Hayvanlarını Koruma ve Yaşatma Derneği" />
    <meta property="twitter:description"
        content="1453 Sokak Hayvanlarını Koruma ve Yaşatma Derneği, sokak hayvanlarının korunması, bakımı ve yaşatılmasını amaçlayan bir dernek olarak, hayvanlara daha iyi bir yaşam sağlamak için çalışmalar yürütmektedir. Bağış yaparak ve gönüllü olarak siz de destek olabilirsiniz." />
    <meta property="twitter:image" content="https://kutto-eosin.vercel.app/img/meta-tags-2.jpg" />

    <!-- Meta Tags Generated with https://1453sokakhayvanları.com -->



    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <!-- <link rel="manifest" href="%PUBLIC_URL%/manifest.json" /> -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('css/default.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

</head>

<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <!-- Preloader -->
    <div id="preloader">
        <img src="img/preloader.gif" alt="">
    </div>
    <!-- Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- <script src="js/vendor/jquery-3.6.0.min.js"></script> -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/jquery.appear.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

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
        if ($(".mobile-menu").length) {
            var mobileMenuContent = $(".menu-area .main-menu").html();
            $(".mobile-menu .menu-box .menu-outer").append(mobileMenuContent);

            //Dropdown Button
            // $('.mobile-menu li. .dropdown-btn').on('click', function () {
            // 	$(this).toggleClass('open');
            // 	$(this).prev('ul').slideToggle(500);
            // });
            //Menu Toggle Btn
            $(".mobile-nav-toggler").on("click", function () {
                $("body").addClass("mobile-menu-visible");
            });

            //Menu Toggle Btn
            $(".menu-backdrop, .mobile-menu .close-btn").on("click", function () {
                $("body").removeClass("mobile-menu-visible");
            });
        }

        $(".navbar-toggle").on("click", function () {
            $(".navbar-nav").addClass("mobile_menu");
        });
        $(".navbar-nav li a").on("click", function () {
            $(".navbar-collapse").removeClass("show");
        });

        $(".header-search > a").on("click", function () {
            $(".search-popup-wrap").slideToggle();
            return false;
        });

        $(".search-close").on("click", function () {
            $(".search-popup-wrap").slideUp(500);
        });
    </script>

    <main>
        @yield('content')
    </main>

    <!--
      This HTML file is a template.
      If you open it directly in the browser, you will see an empty page.

      You can add webfonts, meta tags, or analytics to this file.
      The build step will place the bundled scripts into the <body> tag.

      To begin the development, run `npm start` or `yarn start`.
      To create a production bundle, use `npm run build` or `yarn build`.
    -->
</body>

</html>
