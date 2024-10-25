<footer>
    <div class="footer-top-area footer-bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-3">
                    <div class="footer-widget">
                        <div class="f-logo">
                            <a href="/">
                                <img src="{{ asset('assets/img/logo/1453sokakhayvanlar-logo-16.png') }}" alt=""
                                    style=" width: 256px ">
                            </a>
                        </div>
                        <div class="footer-text"></div>
                        <div class="footer-contact">
                            <div class="icon">
                                <i class="fas fa-headphones"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="tel:0987654321">747-800-9880</a>
                                </h4>
                                <span>Call Now</span>
                            </div>
                        </div>
                        <div class="footer-social">
                            <ul>
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
                                        <i class="fab fa-youtube"></i>
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
                <div class="col-2">
                    <div class="footer-widget">
                        <h4 class="fw-title">{{ __('Quick Menu') }}</h4>
                        <div class="fw-link">
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="{{ Route('about-us') }}">
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ Route('pets.index') }}">
                                        Dog List
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ Route('donatation') }}">
                                        Donations And Sponsorships
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ Route('posts.index') }}">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ Route('contact') }}">
                                        Contact
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-widget">
                        <h4 class="fw-title">Our Services</h4>
                        <div class="fw-link">
                            <ul>
                                <li>
                                    <a href="#">Our Breeder</a>
                                </li>
                                <li>
                                    <a href="#">Our Adoption</a>
                                </li>
                                <li>
                                    <a href="#">Editorial Policy</a>
                                </li>
                                <li>
                                    <a href="#">Return Policy</a>
                                </li>
                                <li>
                                    <a href="#">Grievance Policy</a>
                                </li>
                                <li>
                                    <a href="#">Redressal Policy</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="footer-widget">
                        <h4 class="fw-title">Instagram</h4>
                        <div class="fw-insta">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/images/insta_img01.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/images/insta_img02.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/images/insta_img03.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/images/insta_img04.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/images/insta_img05.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/images/insta_img06.png') }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-shape">
            <img src="{{ asset('assets/img/images/footer_shape01.png') }}" alt="">
        </div>
        <div class="footer-shape shape-two">
            <img src="{{ asset('assets/img/images/footer_shape02.png') }}" alt="">
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright-text">
                        <p>Copyright © {{ date('Y') }} <a class="text-white" href="https://apex8.io/"
                                target="_blank">Apex8</a> . All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <div class="footer-lang">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('assets/img/icon/united-states.png') }}" alt=""> English
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="/">
                                    <img src="{{ asset('assets/img/icon/united-states.png') }}" alt="">
                                    English
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
