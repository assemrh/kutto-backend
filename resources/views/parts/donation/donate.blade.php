<section class=" px-1 px-md-3 px-lg-5 py-md-5 py-5 my-0 " style="background-image: url('/assets/img/bg/counter_bg.jpg')">

    <div class="container text-center my-md-2">
        <div class="row align-items-stretch gap-1">
            <div class="col-md-7 col-12 mt-4 mt-md-0">
                <div class="card border-0 glassy-card ">
                    <img src="{{ asset('assets/img/images/woman-holding-adorable-dog-shelter.webp') }}"
                        class="card-img-top" alt="...">

                    <div class="card-body py-5 my-2">
                        <h2 class="title">You Can Make a Difference in the Lives of Dogs<span
                                class="text-danger">!</span></h2>

                        {{-- <h5 class="card-title">You Can Make a Difference in the Lives of Dogs</h5> --}}
                        <p class="card-text">Every day, stray dogs face hunger, fear, and uncertainty. But with your
                            help,
                            we can change that. By donating, you provide food, medical care, and a safe place for these
                            dogs
                            to heal and find loving homes.
                        </p>
                        <p class="card-text">Your kindness transforms lives. With every donation, you give a dog a
                            second
                            chance at happiness. You have the power to make a real difference—help a stray dog today and
                            be
                            the reason their tail wags again.
                        </p>


                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12 mt-4 mt-md-0">
                <div class="card glassy-card rounded-0 h-100">
                    @include('parts.donation.donation-navs')
                </div>
            </div>

        </div>
    </div>

</section>
<section>
    @include('parts.donation.bank-accounts')

</section>
