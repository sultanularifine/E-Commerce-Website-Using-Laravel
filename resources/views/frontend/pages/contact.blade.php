@extends('frontend.layouts.app')
@section('title', 'Contact')
@section('content')
<section class="contact-one">
    <div class="container">
        <div class="contact-one__inner">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title  text-center wow fadeInUp" data-wow-delay='300ms'>

                        <h6 class="sec-title__tagline">
                            <i class="icon-left-arrow sec-title__img"></i>
                            Contact with Us
                            <i class="icon-right-arrow sec-title__img"></i>
                        </h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Feel Free to Write us Anytime</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->

            {{-- <form class="contact-one__form contact-form-validated form-one" method="POST" action="{{ route('contactForm') }}"> --}}
            <form class="form-one" method="POST" action="{{ route('contactForm') }}">
                @csrf
                <div class="form-one__group wow fadeInUp" data-wow-delay='300ms'>
                    <div class="contact-one__form__control">
                        <input type="text" name="name" placeholder="Your Name *" required>
                    </div><!-- /.form-one__control form-one__control__full -->

                    <div class="contact-one__form__control">
                        <input type="email" name="email" placeholder="Email Address *" required>
                    </div><!-- /.form-one__control form-one__control__full -->

                    <div class="contact-one__form__control">
                        <input type="text" name="phone" placeholder="Phone">
                    </div><!-- /.form-one__control form-one__control__full -->

                    <div class="contact-one__form__control ">
                        <input type="text" name="subject" placeholder="Subject">
                    </div><!-- /.form-one__control form-one__control__full -->

                    <div class="contact-one__form__control form-one__control__full">
                        <textarea name="message" placeholder="Write A Message"></textarea><!-- /# -->
                    </div><!-- /.form-one__control -->

                    <div class="contact-one__form__control form-one__control__full text-center">
                        <button type="submit" class="drivschol-btn drivschol-btn--base2"><span>Send a Message</span></button>
                    </div><!-- /.form-one__control -->
                </div><!-- /.row -->
            </form>
        </div><!-- /.contact-one__inner -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<section class="contact-location">
    <div class="container">
        <div class="contact-location__header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="sec-title  text-start wow fadeInUp" data-wow-delay='300ms'>

                        <h6 class="sec-title__tagline">
                            <i class="icon-left-arrow sec-title__img"></i>
                            Location
                            <i class="icon-right-arrow sec-title__img"></i>
                        </h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">See CVIEM Adresses</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                </div><!-- /.col-12 -->
                <div class="col-md-6">
                    <div class="contact-location__subheading wow fadeInUp" data-wow-delay='300ms'>
                        <p class="contact-location__subheading__text">We have two branches. One of them is in Malaysia and another one is in Bangladesh. You can reach us via any branch you prefer. Feel free to contact us.</p><!-- /.contact-location__subheading__text -->
                    </div><!-- / -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.contact-location__header -->

        <div class="contact-location__inner tabs-box wow fadeInUp" data-wow-delay='300ms'>
            <div class="contact-location__inner__filter">
                <button data-tab="#malaysia" class="contact-location__inner__filter__btn drivschol-btn tab-btn active-btn">Malaysia</button><!-- /.contact-location__inner__filter__btn -->
                <button data-tab="#bangladesh" class="contact-location__inner__filter__btn drivschol-btn tab-btn">Bangladesh</button><!-- /.contact-location__inner__filter__btn -->
            </div><!-- /.contact-location__inner__filter -->
            <div class="tabs-content">
                <div class="contact-location__inner__item fadeInUp animated tab active-tab" id="malaysia">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="contact-location__inner__item__image">
                                <img src="{{asset('assets/frontend/images/gallery/contact_for_both.jpg')}}" class="image-fluid" alt="contact-location__inner__item__image">
                            </div><!-- /.contact-location__inner__item__image -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="contact-location__inner__item__content">
                                <div class="contact-location__inner__item__content__info">
                                    <a href="tel:+60102664265" class="contact-location__inner__item__content__info__btn d-flex align-items-center">
                                        <div class="contact-location__inner__item__content__info__icon">
                                            <i class="icon-Call"></i>
                                        </div>
                                        <div class="content">
                                            <span class="contact-location__inner__item__content__info__text">Call to Questions</span>
                                            <h6 class="contact-location__inner__item__content__info__call">+ (60) 102664265</h6>
                                        </div>
                                    </a>
                                </div>

                                <div class="contact-location__inner__item__content__info">
                                    <a href="mailto:motabbirdev@gmail.com" class="contact-location__inner__item__content__info__btn d-flex align-items-center">
                                        <div class="contact-location__inner__item__content__info__icon">
                                            <i class="icon-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <span class="contact-location__inner__item__content__info__text">Send Email</span>
                                            <h6 class="contact-location__inner__item__content__info__call"> info@cviedu.my</h6>
                                        </div>
                                    </a>
                                </div>

                                <div class="contact-location__inner__item__content__info">
                                    <a href="https://www.google.com/maps" class="contact-location__inner__item__content__info__btn d-flex align-items-center">
                                        <div class="contact-location__inner__item__content__info__icon ms-2">
                                            <i class="icon-map-pin"></i>
                                        </div>
                                        <div class="content ms-3">
                                            <span class="contact-location__inner__item__content__info__text">Visit Anytime</span>
                                            <h6 class="contact-location__inner__item__content__info__call">B1-2-3A, Jalan 1/152, TMN OUG Parklane, 58200 Kuala Lumpur, Malaysia. </h6>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- /.contact-location__inner__item__content -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.contact-location__inner__item -->

                <div class="contact-location__inner__item fadeInUp animated tab" id="bangladesh">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="contact-location__inner__item__image">
                                <img src="{{asset('assets/frontend/images/gallery/contact_for_both.jpg')}}" class="image-fluid" alt="contact-location__inner__item__image">
                            </div><!-- /.contact-location__inner__item__image -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="contact-location__inner__item__content">
                                <div class="contact-location__inner__item__content__info">
                                    <a href="tel:+8801753199518" class="contact-location__inner__item__content__info__btn d-flex align-items-center">
                                        <div class="contact-location__inner__item__content__info__icon">
                                            <i class="icon-Call"></i>
                                        </div>
                                        <div class="content">
                                            <span class="contact-location__inner__item__content__info__text">Call to Questions</span>
                                            <h6 class="contact-location__inner__item__content__info__call">+ (88) 01753199518</h6>
                                        </div>
                                    </a>
                                </div>

                                <div class="contact-location__inner__item__content__info">
                                    <a href="mailto:motabbirdev@gmail.com" class="contact-location__inner__item__content__info__btn d-flex align-items-center">
                                        <div class="contact-location__inner__item__content__info__icon">
                                            <i class="icon-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <span class="contact-location__inner__item__content__info__text">Send Email</span>
                                            <h6 class="contact-location__inner__item__content__info__call"> info@cviedu.my
                                            </h6>
                                        </div>
                                    </a>
                                </div>

                                <div class="contact-location__inner__item__content__info">
                                    <a href="https://www.google.com/maps" class="contact-location__inner__item__content__info__btn d-flex align-items-center">
                                        <div class="contact-location__inner__item__content__info__icon ms-2">
                                            <i class="icon-map-pin"></i>
                                        </div>
                                        <div class="content ms-3">
                                            <span class="contact-location__inner__item__content__info__text">Visit Anytime</span>
                                            <h6 class="contact-location__inner__item__content__info__call">GA-131, Jowarder Villa, 4th Floor, Middle Badda, (Opposite Pran Center) Dhaka-1212</h6>
                                        </div>
                                    </a>
                                </div>

                                {{-- <div class="contact-location__inner__item__content__right">
                                    <div class="contact-location__inner__item__content__right__item">
                                        <span class="contact-location__inner__item__content__right__item__day">Saturday</span>
                                        <p class="contact-location__inner__item__content__right__item__time">09.00 am - 20.00 pm</p>
                                    </div><!-- /.contact-location__inner__item__content__right__item -->
                                    <div class="contact-location__inner__item__content__right__item">
                                        <span class="contact-location__inner__item__content__right__item__day">Thursday</span>
                                        <p class="contact-location__inner__item__content__right__item__time">09.00 am - 20.00 pm</p>
                                    </div><!-- /.contact-location__inner__item__content__right__item -->
                                </div><!-- Time --> --}}
                            </div><!-- /.contact-location__inner__item__content -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.contact-location__inner__item -->
            </div><!-- /tabs-content -->
        </div><!-- /.contact-location__inner -->
    </div><!-- /.container -->
</section><!-- /.contact-location -->

<div class="contact-map wow fadeInUp" data-wow-delay='300ms'>
    <div class="container-fluid">
        <div class="google-map google-map__contact">
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.100494365219!2d101.65710969999999!3d3.0678097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4ba357456dfd%3A0xd41d5fe03ade3db6!2sSoeur%20Bake!5e0!3m2!1sen!2sbd!4v1670175189891!5m2!1sen!2sbd" class="map__contact" allowfullscreen></iframe>
        </div>
        <!-- /.google-map -->
    </div><!-- /.container-fluid -->
</div><!-- /.contact-map -->
@endsection