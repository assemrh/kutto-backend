<section className="slider-area">
    <div className="slide slider-active" >
        <div>
            <div className="single-slider slider-bg d-flex align-items-center"
                style="background-image: url('/img/slider/1453webcltuo-05.jpg')">
                <div className="container-xl custom-container">
                    <div className="row">
                        <div className="col-xl-7 col-lg-7 col-md-10">
                            <div className="slider-content">
                                <div className="slider-title">
                                    <h2 className="title" data-animation="fadeInUpBig" data-delay=".2s"
                                        data-duration="1.2s">
                                        Every animal needs <span>love</span>, and every person needs a
                                        <span>friend</span>.
                                    </h2>
                                </div>
                                <div className="slider-desc">
                                    <p className="desc" data-animation="fadeInUpBig" data-delay=".4s"
                                        data-duration="1.2s">
                                        You can make a big difference in the life of a stray animal by giving them a
                                        home.<br /> Share your love, gain a new friend, and create unforgettable
                                        memories together.




                                    </p>
                                </div>
                                <Link to="/doglist" className="btn" data-animation="fadeInUpBig" data-delay=".6s"
                                    data-duration="1.2s">View More <img src="img/icon/w_pawprint.png" alt="" />
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@push('scripts')

    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider-area').slick({
                autoplay: false,
                autoplaySpeed: 10000,
                dots: false,
                fade: true,
                arrows: true,

                responsive: [{
                    breakpoint: 767,
                    settings: {
                        dots: false,
                        arrows: false
                    }
                }],
            });
        });
    </script>
@endpush
