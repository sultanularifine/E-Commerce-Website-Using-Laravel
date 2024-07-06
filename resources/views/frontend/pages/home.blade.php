@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
    <!-- slider -->
    <section class="main-slider-one">
        <div class="main-slider-one__carousel drivschol-owl__carousel owl-carousel"
            data-owl-options='{
                "loop": true,
                "animateOut": "fadeOut",
                "animateIn": "fadeInRightBig",
                "items": 1,
                "autoplay": true,
                "autoplayTimeout": 7000,
                "smartSpeed": 1000,
                "nav": false,
                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                "dots": true,
                "dotsData": true,
                "margin": 0
                }'>
            <div class="item" data-dot="<button>01</button>">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('assets/frontend/images/backgrounds/malaysia_bg.png') }});">
                    </div>
                    <div class="main-slider-one__shape-one">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-1.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-two">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-2.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-border">
                        <span class="main-slider-one__shape-border__one"></span>
                        <span class="main-slider-one__shape-border__two"></span>
                    </div>
                    <div class="container">
                        <div class="main-slider-one__content">
                            <h2 class="main-slider-one__title">
                                <span class="main-slider-one__title__anim">Study</span>
                                <span class="main-slider-one__title__anim">In MALAYSIA</span>
                                <span class="main-slider-one__title__image"><img
                                        src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-3.png') }}"
                                        alt="drivschol"></span>
                            </h2><!-- slider-title -->
                            <div class="main-slider-one__btn">
                                <a href="#" class="drivschol-btn drivschol-btn--base"><span>Get
                                        Started</span></a>
                            </div><!-- slider-btn -->
                        </div>
                    </div>
                    <div class="main-slider-one__layer">
                        <img src="{{ asset('assets/frontend/images/backgrounds/malaysia.png') }}" alt="drivschol">
                    </div>
                </div>
            </div>
            <div class="item" data-dot="<button>02</button>">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('assets/frontend/images/backgrounds/canada_bg.png') }});">
                    </div>
                    <div class="main-slider-one__shape-one">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-1.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-two">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-2.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-border">
                        <span class="main-slider-one__shape-border__one"></span>
                        <span class="main-slider-one__shape-border__two"></span>
                    </div>
                    <div class="container">
                        <div class="main-slider-one__content">
                            <h2 class="main-slider-one__title">
                                <span class="main-slider-one__title__anim">Study</span>
                                <span class="main-slider-one__title__anim">In CANADA</span>
                                <span class="main-slider-one__title__image"><img
                                        src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-3.png') }}"
                                        alt="drivschol"></span>
                            </h2><!-- slider-title -->
                            <div class="main-slider-one__btn">
                                <a href="#" class="drivschol-btn drivschol-btn--base"><span>Get
                                        Started</span></a>
                            </div><!-- slider-btn -->
                        </div>
                    </div>
                    <div class="main-slider-one__layer">
                        <img src="{{ asset('assets/frontend/images/backgrounds/canada.png') }}" alt="drivschol">
                    </div>
                </div>
            </div>
            <div class="item" data-dot="<button>03</button>">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('assets/frontend/images/backgrounds/usa_bg.png') }});">
                    </div>
                    <div class="main-slider-one__shape-one">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-1.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-two">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-2.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-border">
                        <span class="main-slider-one__shape-border__one"></span>
                        <span class="main-slider-one__shape-border__two"></span>
                    </div>
                    <div class="container">
                        <div class="main-slider-one__content">
                            <h2 class="main-slider-one__title">
                                <span class="main-slider-one__title__anim">Study</span>
                                <span class="main-slider-one__title__anim">In USA</span>
                                <span class="main-slider-one__title__image"><img
                                        src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-3.png') }}"
                                        alt="drivschol"></span>
                            </h2><!-- slider-title -->
                            <div class="main-slider-one__btn">
                                <a href="#" class="drivschol-btn drivschol-btn--base"><span>Get
                                        Started</span></a>
                            </div><!-- slider-btn -->
                        </div>
                    </div>
                    <div class="main-slider-one__layer">
                        <img src="{{ asset('assets/frontend/images/backgrounds/usa.png') }}" alt="drivschol">
                    </div>
                </div>
            </div>
            <div class="item" data-dot="<button>04</button>">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('assets/frontend/images/backgrounds/Hungary_bg.png') }});">
                    </div>
                    <div class="main-slider-one__shape-one">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-1.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-two">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-2.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-border">
                        <span class="main-slider-one__shape-border__one"></span>
                        <span class="main-slider-one__shape-border__two"></span>
                    </div>
                    <div class="container">
                        <div class="main-slider-one__content">
                            <h2 class="main-slider-one__title">
                                <span class="main-slider-one__title__anim">Study</span>
                                <span class="main-slider-one__title__anim">In Hungary</span>
                                <span class="main-slider-one__title__image"><img
                                        src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-3.png') }}"
                                        alt="drivschol"></span>
                            </h2><!-- slider-title -->
                            <div class="main-slider-one__btn">
                                <a href="#" class="drivschol-btn drivschol-btn--base"><span>Get
                                        Started</span></a>
                            </div><!-- slider-btn -->
                        </div>
                    </div>
                    <div class="main-slider-one__layer">
                        <img src="{{ asset('assets/frontend/images/backgrounds/Hungary.png') }}" alt="drivschol">
                    </div>
                </div>
            </div>
            <div class="item" data-dot="<button>05</button>">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('assets/frontend/images/backgrounds/Australia_bg.png') }});">
                    </div>
                    <div class="main-slider-one__shape-one">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-1.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-two">
                        <img src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-2.png') }}" alt="drivschol">
                    </div>
                    <div class="main-slider-one__shape-border">
                        <span class="main-slider-one__shape-border__one"></span>
                        <span class="main-slider-one__shape-border__two"></span>
                    </div>
                    <div class="container">
                        <div class="main-slider-one__content">
                            <h2 class="main-slider-one__title">
                                <span class="main-slider-one__title__anim">Study</span>
                                <span class="main-slider-one__title__anim">In Australia</span>
                                <span class="main-slider-one__title__image"><img
                                        src="{{ asset('assets/frontend/images/backgrounds/slider-1-shape-3.png') }}"
                                        alt="drivschol"></span>
                            </h2><!-- slider-title -->
                            <div class="main-slider-one__btn">
                                <a href="#" class="drivschol-btn drivschol-btn--base"><span>Get
                                        Started</span></a>
                            </div><!-- slider-btn -->
                        </div>
                    </div>
                    <div class="main-slider-one__layer">
                        <img src="{{ asset('assets/frontend/images/backgrounds/Australia.png') }}" alt="drivschol">
                    </div>
                </div>
            </div>
        </div>
        <a href="#aboutOne" class="main-slider-one__trigger"><span class="icon-video"></span></a>
    </section>

    <!-- service -->
    <section class="service-three service-three__home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-three__item  wow fadeInUp" data-wow-delay='500ms'>
                        <div class="service-three__item__bg"
                            style="background-image: url({{ asset('assets/frontend/images/service/SCHOLARSHIP.jpg') }});">
                        </div>
                        <div class="service-three__item__icon">
                            <i class="service-three__item__icon__item icon-Instructor"></i>
                        </div><!-- /.service-three__item__icon -->
                        <div class="service-three__item__content">
                            <h2 class="service-three__item__title">SCHOLARSHIP <br> PROGRAM</h2>
                            <!-- /.service-three__item__title -->
                            <p class="service-three__item__text">Scholarships and grants can be a great help in paying for
                                your education and should be considered as a first funding source to study abroad</p>
                            <!-- /.service-three__item__title -->
                        </div><!-- /.service-three__item__content -->
                    </div>
                </div><!-- /.com-lg-4 col-md-6 -->

                <div class="col-lg-3 col-md-6">
                    <div class="service-three__item  wow fadeInUp" data-wow-delay='700ms'>
                        <div class="service-three__item__bg"
                            style="background-image: url({{ asset('assets/frontend/images/service/LANGUAGE.jpg') }});">
                        </div>
                        <div class="service-three__item__icon">
                            <i class="service-three__item__icon__item icon-certificate-1"></i>
                        </div><!-- /.service-three__item__icon -->
                        <div class="service-three__item__content">
                            <h2 class="service-three__item__title">LANGUAGE <br> TESTING</h2>
                            <!-- /.service-three__item__title -->
                            <p class="service-three__item__text">It is very difficult to study in any foreign nation if you
                                are not comfortable with the formal spoken language of the host country.</p>
                            <!-- /.service-three__item__title -->
                        </div><!-- /.service-three__item__content -->
                    </div>
                </div><!-- /.com-lg-4 col-md-6 -->

                <div class="col-lg-3 col-md-6">
                    <div class="service-three__item  wow fadeInUp" data-wow-delay='900ms'>
                        <div class="service-three__item__bg"
                            style="background-image: url({{ asset('assets/frontend/images/service/VISA.jpg') }});">
                        </div>
                        <div class="service-three__item__icon">
                            <i class="service-three__item__icon__item icon-safety"></i>
                        </div><!-- /.service-three__item__icon -->
                        <div class="service-three__item__content">
                            <h2 class="service-three__item__title">VISA <br> PROCESSING</h2>
                            <!-- /.service-three__item__title -->
                            <p class="service-three__item__text">We have long experiences in assisting students for
                                applying for visa. Our expertise in advising for “Student Visa” is among the best in the
                                country.</p><!-- /.service-three__item__title -->
                        </div><!-- /.service-three__item__content -->
                    </div>
                </div><!-- /.com-lg-4 col-md-6 -->

                <div class="col-lg-3 col-md-6">
                    <div class="service-three__item  wow fadeInUp" data-wow-delay='1200ms'>
                        <div class="service-three__item__bg"
                            style="background-image: url({{ asset('assets/frontend/images/service/ADMISSION.jpg') }});">
                        </div>
                        <div class="service-three__item__icon">
                            <i class="service-three__item__icon__item icon-license-1"></i>
                        </div><!-- /.service-three__item__icon -->
                        <div class="service-three__item__content">
                            <h2 class="service-three__item__title">ADMISSION<br> PROCEDURE</h2>
                            <!-- /.service-three__item__title -->
                            <p class="service-three__item__text">Our tours and travels package is a special service which
                                includes all the basic costs during the travel period in different countries .</p>
                            <!-- /.service-three__item__title -->
                        </div><!-- /.service-three__item__content -->
                    </div>
                </div><!-- /.com-lg-4 col-md-6 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-three__item  wow fadeInUp" data-wow-delay='500ms'>
                        <div class="service-three__item__bg"
                            style="background-image: url({{ asset('assets/frontend/images/service/CAREER.jpg') }});">
                        </div>
                        <div class="service-three__item__icon">
                            <i class="service-three__item__icon__item icon-Instructor"></i>
                        </div><!-- /.service-three__item__icon -->
                        <div class="service-three__item__content">
                            <h2 class="service-three__item__title">CAREER <br> ADVICE</h2>
                            <!-- /.service-three__item__title -->
                            <p class="service-three__item__text">Here we believe in understating and assessing students
                                personal requirements hence provide students with one–one session’s and guide accordingly.
                            </p><!-- /.service-three__item__title -->
                        </div><!-- /.service-three__item__content -->
                    </div>
                </div><!-- /.com-lg-4 col-md-6 -->

                <div class="col-lg-3 col-md-6">
                    <div class="service-three__item  wow fadeInUp" data-wow-delay='700ms'>
                        <div class="service-three__item__bg"
                            style="background-image: url({{ asset('assets/frontend/images/service/COUNTRY.jpg') }});">
                        </div>
                        <div class="service-three__item__icon">
                            <i class="service-three__item__icon__item icon-certificate-1"></i>
                        </div><!-- /.service-three__item__icon -->
                        <div class="service-three__item__content">
                            <h2 class="service-three__item__title">COUNTRY <br> SELECTION</h2>
                            <!-- /.service-three__item__title -->
                            <p class="service-three__item__text">How do you choose when there are different countries
                                offering world-class education? How do you determine which country is right or wrong.</p>
                            <!-- /.service-three__item__title -->
                        </div><!-- /.service-three__item__content -->
                    </div>
                </div><!-- /.com-lg-4 col-md-6 -->

                <div class="col-lg-3 col-md-6">
                    <div class="service-three__item  wow fadeInUp" data-wow-delay='900ms'>
                        <div class="service-three__item__bg"
                            style="background-image: url({{ asset('assets/frontend/images/service/UNIVERSITY.jpg') }});">
                        </div>
                        <div class="service-three__item__icon">
                            <i class="service-three__item__icon__item icon-safety"></i>
                        </div><!-- /.service-three__item__icon -->
                        <div class="service-three__item__content">
                            <h2 class="service-three__item__title">UNIVERSITY <br> SELECTION</h2>
                            <!-- /.service-three__item__title -->
                            <p class="service-three__item__text">All of us can help you look for a program depending on
                                your own educational skills, check ratings, particular pursuits as well as needs.</p>
                            <!-- /.service-three__item__title -->
                        </div><!-- /.service-three__item__content -->
                    </div>
                </div><!-- /.com-lg-4 col-md-6 -->

                <div class="col-lg-3 col-md-6">
                    <div class="service-three__item  wow fadeInUp" data-wow-delay='1200ms'>
                        <div class="service-three__item__bg"
                            style="background-image: url({{ asset('assets/frontend/images/service/OTHERS.jpg') }});">
                        </div>
                        <div class="service-three__item__icon">
                            <i class="service-three__item__icon__item icon-license-1"></i>
                        </div><!-- /.service-three__item__icon -->
                        <div class="service-three__item__content">
                            <h2 class="service-three__item__title">OTHERS<br> ASSISTANCE</h2>
                            <!-- /.service-three__item__title -->
                            <p class="service-three__item__text">We also provide other assistances like receiving students
                                from airport, arranging residence and guiding students.</p>
                            <!-- /.service-three__item__title -->
                        </div><!-- /.service-three__item__content -->
                    </div>
                </div><!-- /.com-lg-4 col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- about -->
    <section class="about-one" id="aboutOne">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-one__item">
                        <div class="about-one__item__left">
                            <div class="about-one__item__left__img  wow fadeInUp" data-wow-delay="500ms">
                                <img src="{{ asset('assets/frontend/images/resources/about_cvim.jpg') }}" alt>
                                <div class="about-one__item__left__img__shape wow fadeInDown" data-wow-delay="1000ms">
                                    <img src="{{ asset('assets/frontend/images/resources/about__shape-1-1.png') }}" alt>
                                </div>
                                <div class="about-one__item__left__img__sub_img">
                                    <img src="{{ asset('assets/frontend/images/resources/about_cvim_small.jpg') }}" alt>
                                    <svg viewBox="0 0 208 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 169V1H208" stroke="#EC2526" stroke-width="2" />
                                        <path d="M17 169V17H208" stroke="#EC2526" stroke-width="2" />
                                    </svg>
                                </div>
                            </div>

                            <div class="about-one__item__left__contact wow fadeInLeft" data-wow-delay="500ms">
                                <a class="about-one__item__left__contact__link" href="tel:303-555-0105">
                                    <div class="about-one__item__left__contact__link__icon">
                                        <i class="icon-chat2"></i>
                                    </div>
                                    <div class="about-one__item__left__contact__link__call">
                                        <span class="about-one__item__left__contact__link__subtext">Mail to
                                            Questions</span>
                                        <h6 class="about-one__item__left__contact__link__text">info@cviedu.my</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="300ms">
                    <div class="about-one__item about-one__item__one">

                        <div class="about-one__item__head text-justify">
                            <div class="sec-title text-start wow fadeInUp" data-wow-duration='300ms'>

                                <h6 class="sec-title__tagline">
                                    <i class="icon-left-arrow sec-title__img"></i>
                                    GROWING WITH OUR CLIENTS
                                    <i class="icon-right-arrow sec-title__img"></i>
                                </h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">About CVIEM
                                </h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="about-one__item__text  wow fadeInUp" data-wow-delay='500ms'>Coxs View International
                                (CVI) Consultancy Services is a Private Limited Company established in 2012. it’s one of the
                                leading consultancy service providers and run full-services company based in Peninsular
                                Malaysia and Bangladesh. This is was few years ago when education opportunities were limited
                                and</p>
                            <p class="about-one__item__text  wow fadeInUp" data-wow-delay='500ms'>information centers did
                                not have adequate resources to advise parents and students on further education
                                opportunities for both high achieving and low achieving students. CVICS was founded on this
                                philosophy to provide a service for student and adults looking for continuing education
                                pathways with an academic as well as for those with a vocational direction.</p>
                            <!-- /.about-one__item__text -->
                        </div><!-- /.about-one__item__head -->

                        {{-- <div class="about-one__item__block-contents wow fadeInUp" data-wow-delay="500ms">
                            <h3 class="about-one__item__block-contents__text">The generated Lorem Ipsum is
                                therefore always free from repetition, injected humour, or </h3>
                        </div> --}}

                        <div class="about-one__item__elememt">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="about-one__item__elememt__single wow fadeInUp" data-wow-delay="500ms">
                                        <div class="about-one__item__elememt__single__icon">
                                            <div class="icon">
                                                <i class="icon-steering-wheel-1"></i>
                                            </div>
                                        </div>
                                        <h3 class="about-one__item__elememt__single__text">Consistency
                                        </h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="about-one__item__elememt__single wow fadeInUp" data-wow-delay="700ms">
                                        <div class="about-one__item__elememt__single__icon">
                                            <div class="icon">
                                                <i class="icon-Instructor"></i>
                                            </div>
                                        </div>
                                        <h3 class="about-one__item__elememt__single__text">Improvement</h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="about-one__item__elememt__single wow fadeInUp" data-wow-delay="700ms">
                                        <div class="about-one__item__elememt__single__icon">
                                            <div class="icon">
                                                <i class="icon-Instructor"></i>
                                            </div>
                                        </div>
                                        <h3 class="about-one__item__elememt__single__text">Branching</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="drivschol-btn drivschol-btn--black  wow fadeInUp"
                            data-wow-delay='500ms'><span>Discover More</span></a>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="about-one__element">
            <img src="{{ asset('assets/frontend/images/shapes/about-cercle-1-5.png') }}" alt>
        </div>
    </section>

    <!-- why-choose-us -->
    <section class="why-choose-one">
        <div class="why-choose-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            style="background-image: url({{ asset('assets/frontend/images/backgrounds/why_we.jpg') }});"></div>
        <!-- /.why-choose-one__bg -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="sec-title   wow fadeInUp" data-wow-duration='300ms'>

                        <h6 class="sec-title__tagline">
                            <i class="icon-left-arrow sec-title__img"></i>
                            Why Choose Us
                            <i class="icon-right-arrow sec-title__img"></i>
                        </h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Why You Should Choose Our <br> CVIEM? </h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <p class="why-choose-one__head__text  wow fadeInUp" data-wow-delay='700ms'>Get in touch with the experienced counsellor to get guidance for your study abroad.</p><!-- /.why-choose-one__head__text -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="why-choose-one__inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="why-choose-one__single__item  wow fadeInUp" data-wow-delay='500ms'>
                            <div class="why-choose-one__single__item__icon">
                                <i class="icon-Instructor"></i>
                            </div><!-- /.why-choose-one__single__item__icon -->
                            <h3 class="why-choose-one__single__item__text"><a href="service-d-driving.html">Quality
                                    Service</a></h3>
                            <!-- /.why-choose-one__single__item__text -->
                        </div><!-- /.why-choose-one__single__item -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="why-choose-one__single__item  wow fadeInUp" data-wow-delay='600ms'>
                            <div class="why-choose-one__single__item__icon">
                                <i class="icon-Student"></i>
                            </div><!-- /.why-choose-one__single__item__icon -->
                            <h3 class="why-choose-one__single__item__text"><a href="team-details.html"> Experienced
                                    Teacher</a></h3><!-- /.why-choose-one__single__item__text -->
                        </div><!-- /.why-choose-one__single__item -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="why-choose-one__single__item  wow fadeInUp" data-wow-delay='700ms'>
                            <div class="why-choose-one__single__item__icon">
                                <i class="icon-trust-1"></i>
                            </div><!-- /.why-choose-one__single__item__icon -->
                            <h3 class="why-choose-one__single__item__text"><a href="team-details.html">Trusted
                                    Platform</a></h3><!-- /.why-choose-one__single__item__text -->
                        </div><!-- /.why-choose-one__single__item -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="why-choose-one__single__item  wow fadeInUp" data-wow-delay='900ms'>
                            <div class="why-choose-one__single__item__icon">
                                <i class="icon-certificate-1"></i>
                            </div><!-- /.why-choose-one__single__item__icon -->
                            <h3 class="why-choose-one__single__item__text"><a href="team-details.html">Provide
                                    Certificate</a></h3><!-- /.why-choose-one__single__item__text -->
                        </div><!-- /.why-choose-one__single__item -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.inner -->
        </div><!-- /.container -->
    </section>

    <!-- clients -->
    <div class="client-carousel client-carousel--base mt-5">
        <div class="container">
            <div class="client-carousel__top text-center">
                <h3 class="client-carousel__title">Our Partners</h3>
            </div>

            <div class="client-carousel__two drivschol-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
        "items": 5,
        "margin": 55,
        "smartSpeed": 700,
        "loop":true,
        "autoplay": 6000,
        "nav":false,
        "dots":false,
        "responsive":{
            "0":{
                "items":1,
                "margin": 0
            },
            "360":{
                "items":2,
                "margin": 0
            },
            "575":{
                "items":3,
                "margin": 30
            },
            "768":{
                "items":3,
                "margin": 40
            },
            "992":{
                "items": 4,
                "margin": 40
            },
            "1200":{
                "items": 5,
                "margin": 108
            }
        }
        }'>
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-1.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-2.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-3.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-4.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-5.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-6.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-7.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-8.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-9.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-10.png') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-11.jpg') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-12.jpg') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="{{ asset('assets/frontend/images/resources/brand-13.jpg') }}" alt="CVIEM">
                </div><!-- /.owl-slide-item-->
            </div><!-- /.thm-owl__slider -->
        </div><!-- /.container -->
    </div>

    <!-- countries -->
    <section class="team-one team-one--page pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title  text-center wow fadeInUp" data-wow-duration='300ms'>

                        <h6 class="sec-title__tagline">
                            <i class="icon-left-arrow sec-title__img"></i>
                            Countries
                            <i class="icon-right-arrow sec-title__img"></i>
                        </h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Study In These Countries</h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <!-- section-title -->
                </div>
            </div>
            <div class="row gutter-y-30">
                <div class="col-md-6 col-lg-4">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="team-card__image">
                            <img src="{{ asset('assets/frontend/images/team/study_in_malaysial.jpg') }}" alt="Alvert Tine">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__hover">
                                <div class="team-card__content-share-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                            </div><!-- /.team-card__hover -->
                            <h3 class="team-card__title"><a href="team-details.html">Malaysia</a></h3>
                            <!-- /.team-card__title -->
                            <h6 class="team-card__designation">Study In Malaysia</h6><!-- /.team-card__designation -->
                            <div class="team-card__content-shape">
                                <svg width="60" height="90" viewBox="0 0 60 90" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M63 0L0 90H63V0Z" fill="" />
                                </svg>
                            </div>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                        <div class="team-card__image">
                            <img src="{{ asset('assets/frontend/images/team/Study In Romania.jpg') }}" alt="Sara Liner">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__hover">
                                <div class="team-card__content-share-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                            </div><!-- /.team-card__hover -->
                            <h3 class="team-card__title"><a href="team-details.html">Romania</a></h3>
                            <!-- /.team-card__title -->
                            <h6 class="team-card__designation">Study In Romania</h6><!-- /.team-card__designation -->
                            <div class="team-card__content-shape">
                                <svg width="60" height="90" viewBox="0 0 60 90" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M63 0L0 90H63V0Z" fill="" />
                                </svg>
                            </div>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                        <div class="team-card__image">
                            <img src="{{ asset('assets/frontend/images/team/Study In Hungary.jpg') }}" alt="Mark Wood">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__hover">
                                <div class="team-card__content-share-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                            </div><!-- /.team-card__hover -->
                            <h3 class="team-card__title"><a href="team-details.html">Hungary</a></h3>
                            <!-- /.team-card__title -->
                            <h6 class="team-card__designation">Study In Hungary</h6><!-- /.team-card__designation -->
                            <div class="team-card__content-shape">
                                <svg width="60" height="90" viewBox="0 0 60 90" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M63 0L0 90H63V0Z" fill="" />
                                </svg>
                            </div>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
            </div><!-- /.row -->

            <div class="row gutter-y-30 mt-5">
                <div class="col-md-6 col-lg-4">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="team-card__image">
                            <img src="{{ asset('assets/frontend/images/team/Study In Russia.jpg') }}" alt="Alvert Tine">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__hover">
                                <div class="team-card__content-share-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                            </div><!-- /.team-card__hover -->
                            <h3 class="team-card__title"><a href="team-details.html">Russia</a></h3>
                            <!-- /.team-card__title -->
                            <h6 class="team-card__designation">Study In Russia</h6><!-- /.team-card__designation -->
                            <div class="team-card__content-shape">
                                <svg width="60" height="90" viewBox="0 0 60 90" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M63 0L0 90H63V0Z" fill="" />
                                </svg>
                            </div>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                        <div class="team-card__image">
                            <img src="{{ asset('assets/frontend/images/team/Study In Slovakia.jpg') }}" alt="Sara Liner">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__hover">
                                <div class="team-card__content-share-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                            </div><!-- /.team-card__hover -->
                            <h3 class="team-card__title"><a href="team-details.html">Slovakia</a></h3>
                            <!-- /.team-card__title -->
                            <h6 class="team-card__designation">Study In Slovakia</h6><!-- /.team-card__designation -->
                            <div class="team-card__content-shape">
                                <svg width="60" height="90" viewBox="0 0 60 90" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M63 0L0 90H63V0Z" fill="" />
                                </svg>
                            </div>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                        <div class="team-card__image">
                            <img src="{{ asset('assets/frontend/images/team/study_in_uk.jpg') }}" alt="Mark Wood">
                        </div><!-- /.team-card__image -->
                        <div class="team-card__content">
                            <div class="team-card__hover">
                                <div class="team-card__content-share-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                            </div><!-- /.team-card__hover -->
                            <h3 class="team-card__title"><a href="team-details.html">UK</a></h3>
                            <!-- /.team-card__title -->
                            <h6 class="team-card__designation">Study In UK</h6><!-- /.team-card__designation -->
                            <div class="team-card__content-shape">
                                <svg width="60" height="90" viewBox="0 0 60 90" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M63 0L0 90H63V0Z" fill="" />
                                </svg>
                            </div>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- counter  -->
    <section class="funfact-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="funfact-three__item count-box  wow fadeInUp" data-wow-delay='500ms'>
                        <div class="funfact-three__item__icon">
                            <i class="funfact-three__icon icon-rating-1"></i><!-- /.funfact-three__icon -->
                        </div><!-- /.funfact-three__item__icon -->

                        <div class="funfact-three__item__content">
                            <h3 class="funfact-three__item__content__number funfact-one__count">
                                <span class="count-text" data-stop="30" data-speed="1500"></span>
                                <span>+</span>
                            </h3><!-- /.funfact__item__content__number -->
                            <p class="funfact-three__item__content__text">Years of Experience</p>
                            <!-- /.funfact-three__text -->
                        </div><!-- /.funfact-three__content -->
                    </div><!-- /.funfact-three__item -->
                </div><!-- /.col-md-3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="funfact-three__item count-box  wow fadeInUp" data-wow-delay='700ms'>
                        <div class="funfact-three__item__icon">
                            <i class="funfact-three__icon icon-Student"></i><!-- /.funfact-three__icon -->
                        </div><!-- /.funfact-three__item__icon -->

                        <div class="funfact-three__item__content">
                            <h3 class="funfact-three__item__content__number funfact-one__count">
                                <span class="count-text" data-stop="500" data-speed="1500"></span>
                                <span>+</span>
                            </h3><!-- /.funfact__item__content__number -->
                            <p class="funfact-three__item__content__text">Business advices given</p>
                            <!-- /.funfact-three__text -->
                        </div><!-- /.funfact-three__content -->
                    </div><!-- /.funfact-three__item -->
                </div><!-- /.col-md-3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="funfact-three__item count-box  wow fadeInUp" data-wow-delay='900ms'>
                        <div class="funfact-three__item__icon">
                            <i class="funfact-three__icon icon-instructor-1"></i><!-- /.funfact-three__icon -->
                        </div><!-- /.funfact-three__item__icon -->

                        <div class="funfact-three__item__content">
                            <h3 class="funfact-three__item__content__number funfact-one__count">
                                <span class="count-text" data-stop="170" data-speed="1500"></span>
                                <span>+</span>
                            </h3><!-- /.funfact__item__content__number -->
                            <p class="funfact-three__item__content__text">Businesses guided</p><!-- /.funfact-three__text -->
                        </div><!-- /.funfact-three__content -->
                    </div><!-- /.funfact-three__item -->
                </div><!-- /.col-md-3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="funfact-three__item count-box  wow fadeInUp" data-wow-delay='1100ms'>
                        <div class="funfact-three__item__icon">
                            <i class="funfact-three__icon icon-online-learning"></i><!-- /.funfact-three__icon -->
                        </div><!-- /.funfact-three__item__icon -->

                        <div class="funfact-three__item__content">
                            <h3 class="funfact-three__item__content__number funfact-one__count">
                                <span class="count-text" data-stop="30" data-speed="1500"></span>
                                <span>+</span>
                            </h3><!-- /.funfact__item__content__number -->
                            <p class="funfact-three__item__content__text">Business Excellence awards</p><!-- /.funfact-three__text -->
                        </div><!-- /.funfact-three__content -->
                    </div><!-- /.funfact-three__item -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.funfact-three -->

    <!-- blogs-->
    <section class="blog-one blog-one__home">
        <div class="container">
            <div class="sec-title  text-center wow fadeInUp" data-wow-duration='300ms'>

                <h6 class="sec-title__tagline">
                    <i class="icon-left-arrow sec-title__img"></i>
                    OUR ANNOUNCEMENTS
                    <i class="icon-right-arrow sec-title__img"></i>
                </h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">News and Events</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="blog-one__carousel drivschol-owl__carousel drivschol-owl__carousel--with-shadow drivschol-owl__carousel--basic-nav owl-carousel owl-theme"
                data-owl-options='{
                    "items": 1,
                    "margin": 0,
                    "loop": false,
                    "smartSpeed": 700,
                    "nav": true,
                    "navText": ["<i class=\"fa fa-angle-left\"></i>" , "<i class=\"fa fa-angle-right\"></i>"],
                    "dots": false,
                    "autoplay": false,
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "775": {
                            "items": 2,
                            "margin": 30
                        },
                        "992": {
                            "items": 3,
                            "margin": 30
                        }
                    }
                }'>
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                        <div class="blog-card__image">
                            <div class="blog-card__image-item">
                                <img src="{{ asset('assets/frontend/images/blog/management_project.jpg') }}"
                                    alt="Management Project">
                            </div>
                            <a href="#0" class="blog-card__image-link"><span class="sr-only">Management Project</span></a>
                            <div class="blog-card__date">
                                <h2 class="blog-card__date__month">11</h2>
                                <span class="blog-card__date__year">November</span>
                                <img class="date__shape" src="{{ asset('assets/frontend/images/shapes/date.png') }}" alt>
                            </div>
                        </div><!-- /.blog-card__image -->

                        <div class="blog-card__content">
                            <a href="blog-details-right.html" class="blog-card__meta">
                                <div class="blog-card__content-thumb">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/frontend/images/blog/blog-author-1-1.png') }}" alt>
                                    </div>
                                </div>
                                <div class="blog-card__content-author">
                                    <h6 class="author-name">PROJECTS</h6>
                                    <span class="author-title">News</span>
                                </div>
                            </a>
                            <h3 class="blog-card__title"><a href="blog-details-right.html">Management Project</a></h3>
                            <p class="text-justify">
                                Proactively fabricate one-to-one materials via effective e-business. Completely synergize scalable e-commerce rather than high standards in e-services. Assertively iterate resource maximizing products after leading-edge intellectual capital.
                            </p>
                            <a href="#0" class="blog-card__link"> Read more</a>
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="blog-card__image">
                            <div class="blog-card__image-item">
                                <img src="{{ asset('assets/frontend/images/blog/latest_client.jpg') }}"
                                    alt="Latest Client">
                            </div>
                            <a href="#0" class="blog-card__image-link"><span class="sr-only">Latest Client</span></a>
                            <div class="blog-card__date">
                                <h2 class="blog-card__date__month">11</h2>
                                <span class="blog-card__date__year">November</span>
                                <img class="date__shape" src="{{ asset('assets/frontend/images/shapes/date.png') }}"
                                    alt>
                            </div>
                        </div><!-- /.blog-card__image -->

                        <div class="blog-card__content">
                            <a href="blog-details-right.html" class="blog-card__meta">
                                <div class="blog-card__content-thumb">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/frontend/images/blog/blog-author-1-2.png') }}" alt>
                                    </div>
                                </div>
                                <div class="blog-card__content-author">
                                    <h6 class="author-name">ANNOUNCEMENTS </h6>
                                    <span class="author-title">News</span>
                                </div>
                            </a>
                            <h3 class="blog-card__title"><a href="blog-details-right.html">Latest Client</a></h3>
                            <p class="text-justify">
                                Progressively maintain extensive infomediaries via extensible niches. Dramatically disseminate standardized metrics after resource-leveling processes. Objectively pursue diverse catalysts for change for interoperable meta-services.
                            </p>
                            <a href="#0" class="blog-card__link"> Read more</a>
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                        <div class="blog-card__image">
                            <div class="blog-card__image-item">
                                <img src="{{ asset('assets/frontend/images/blog/consulting_project.jpg') }}"
                                    alt="Consulting Project">
                            </div>
                            <a href="#0" class="blog-card__image-link"><span class="sr-only">Consulting Project</span></a>
                            <div class="blog-card__date">
                                <h2 class="blog-card__date__month">11</h2>
                                <span class="blog-card__date__year">November</span>
                                <img class="date__shape" src="{{ asset('assets/frontend/images/shapes/date.png') }}"
                                    alt>
                            </div>
                        </div><!-- /.blog-card__image -->

                        <div class="blog-card__content">
                            <a href="#0" class="blog-card__meta">
                                <div class="blog-card__content-thumb">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/frontend/images/blog/blog-author-1-3.png') }}" alt>
                                    </div>
                                </div>
                                <div class="blog-card__content-author">
                                    <h6 class="author-name">PROJECTS</h6>
                                    <span class="author-title">News</span>
                                </div>
                            </a>
                            <h3 class="blog-card__title"><a href="blog-details-right.html">Consulting Project</a></h3>
                            <p class="text-justify">
                                Dynamically target high-payoff intellectual capital for customized technologies. Objectively integrate emerging core competencies before process-centric communities. Dramatically evisculate holistic innovation rather than client-centric.
                            </p>
                            <a href="#0" class="blog-card__link"> Read more</a>
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection
