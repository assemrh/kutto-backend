@php
    $pets = [
        ['img' => '/img/images/pets/1453web-06.jpg'],
        ['img' => '/img/images/pets/1453web-07.jpg'],
        ['img' => '/img/images/pets/1453web-08.jpg'],
        ['img' => '/img/images/pets/1453web-09.jpg'],
        ['img' => '/img/images/pets/1453web-10.jpg'],
        ['img' => '/img/images/pets/1453web-11.jpg'],
    ];
@endphp
<section class="adoption-shop-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="section-title text-center mb-65">
                    <div class="section-icon">
                        <img src="{{ asset('assets/img/icon/pawprint.png') }}" alt="" >
                    </div>
                    <h5 class="sub-title">Meet the animals</h5>
                    <h2 class="title">
                        Our Friends Waiting for Adoption or Sponsorship
                    </h2>
                    <p>
                        These animals are waiting for a loving family and a safe home.
                        Each of them is eager for a chance to start anew in their lives.
                        By adopting or sponsoring them, you can seize the opportunity to
                        change their lives. Take the first step to gain a new friend or
                        bring hope to an animal!
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($pets as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="adoption-shop-item">
                        <div class="adoption-shop-thumb">
                            <img src="{{ $item['img'] }}" alt="" >
                            <a href="/shop-details" class="btn">
                                Adoption <img src="{{ asset('assets/img/icon/w_pawprint.png') }}" alt="" >
                            </a>
                        </div>
                        <div class="adoption-shop-content">
                            <h4 class="title">
                                <a href="/shop-details">Mister Tartosh</a>
                            </h4>
                            <div class="adoption-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-cog" ></i>
                                        <a href="#">Siberian Husky</a>
                                    </li>
                                    <li>
                                        <i class="far fa-calendar-alt" ></i> Birth : 2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
