<section class="contact-area pt-110 pb-110">
    <div class="container">
        <div class="container-inner-wrap">
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-lg-6 col-md-8 order-2 order-lg-0">
                    <div class="contact-title mb-20">
                        <h5 class="sub-title">Contact Us</h5>
                        <h2 class="title">Let's Talk Question<span>.</span></h2>
                    </div>
                    <div class="contact-wrap-content">
                        <p>The domestic dog is a doiated dendant of the wolf. The dog derived from an ancient, extinct
                            wolf, and the modern grey.</p>
                        <form class="contact-form">
                            <div class="form-grp">
                                <label htmlFor="name">Your Name <span>*</span></label>
                                <input type="text" id="name" placeholder="Jon Deo..." />
                            </div>
                            <div class="form-grp">
                                <label htmlFor="email">Your Email <span>*</span></label>
                                <input type="text" id="email" placeholder="info.example@.com" />
                            </div>
                            <div class="form-grp">
                                <label htmlFor="message">Your Message <span>*</span></label>
                                <textarea name="message" id="message" placeholder="Opinion..." defaultValue=""></textarea>
                            </div>
                            <div class="form-grp checkbox-grp">
                                <input type="checkbox" id="checkbox" />
                                <label htmlFor="checkbox">Don’t show your email address</label>
                            </div>
                            <button type="button" class="btn rounded-btn">Send Now</button>
                        </form>
                    </div>
                </div>

                @include('parts.contact.contact-address')

            </div>
        </div>
    </div>
</section>
