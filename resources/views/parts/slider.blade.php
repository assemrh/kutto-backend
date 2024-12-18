<section class="slider-area">
    <div class="slider slider-active">
        <div class="slide">
            <div class="single-slider slider-bg d-flex align-items-md-center align-items-start p-5 p-md-0">
                <div class="container-xl custom-container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-10">
                            <div class="slider-content">
                                <div class="slider-title">
                                    <h2 class="title" data-animation="fadeInUpBig" data-delay=".2s"
                                        data-duration="1.2s">
                                        {!! __('slider-title') !!}

                                    </h2>
                                </div>
                                <div class="slider-desc">
                                    <p class="desc" data-animation="fadeInUpBig" data-delay=".4s"
                                        data-duration="1.2s">
                                        {!! __('slider-desc') !!}
                                    </p>
                                </div>
                                <a href="/doglist" class="btn" data-animation="fadeInUpBig" data-delay=".6s"
                                    data-duration="1.2s">{!! __('slider-desc') !!} <img
                                        src="{{ asset('assets/img/icon/w_pawprint.png') }}" alt="" />
                                </a>
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
            $('.slider').slick({
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
