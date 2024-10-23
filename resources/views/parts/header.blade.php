<header>
    <div class="header-top-area">
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
                                    <img src="{{ asset('/img/logo/1453sokakhayvanlar-logo-16.png') }}" alt=""
                                        style="width: 256px; padding: 18px">
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active ">
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="(e) => handleActive(e)">
                                            Dog List
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" onclick="(e) => handleActive(e)">
                                            Shop
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="(e) => handleActive(e)">
                                            Adoption
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" onclick="(e) => handleActive(e)">
                                            Breeder
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" onclick="(e) => handleActive(e)">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="(e) => handleActive(e)">
                                            contacts
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
                                    <li class="header-shop-cart">
                                        <a href="#">
                                            <i class="flaticon-shopping-bag"></i>
                                            <span>2</span>
                                        </a>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="{{ asset('img/product/cart_p01.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4>
                                                        <a href="#">The King Charles Spaniel</a>
                                                    </h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span>
                                                            <del>$229.9</del>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="{{ asset('img/product/cart_p02.jpg') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4>
                                                        <a href="#">The Labrador Retriever</a>
                                                    </h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span>
                                                            <del>$229.9</del>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$239.9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="#">Shopping Cart</a>
                                                    <a class="black-color" href="#">
                                                        Checkout
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-btn">
                                        <a href="#" class="btn">
                                            Adopt Here
                                            <img src="{{ asset('img/icon/w_pawprint.png') }}" alt="">
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
                                    <img src="{{ asset('img/logo/logo.png') }}" alt="" title="true">
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
        <div class="header-shape d-none" style=" background-image:url('img/bg/header_shape.png')"></div>
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
                        <h2 class="title">... Search Here ...</h2>
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
