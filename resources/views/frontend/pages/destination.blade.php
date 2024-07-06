@extends('frontend.layouts.app')
@section('title', $countryInfo->country)
@section('content')
    <section class="product-details">
        <div class="container">
            <!-- /.product-details -->
            
            <div class="row">
                <div class="col-lg-6 col-xl-6 wow fadeInLeft" data-wow-delay="200ms">
                    @if (!empty($countryInfo->image))
                        <div class="product-details__img">
                            <img src="{{ asset('assets/frontend/images/destination/' . $countryInfo->image) }}"
                                alt="product-details__img">
                            <div class="product-details__img-search">
                                <a class="img-popup"
                                    href="{{ asset('assets/frontend/images/destination/' . $countryInfo->image) }}"><span
                                        class="icon-magnifying-glass"></span></a>
                            </div><!-- /.product-image -->
                        </div>
                    @else
                        <div class="product-details__img">
                            <img src="{{ asset('assets/frontend/images/products/comon.jpg') }}" alt="product-details__img">
                            <div class="product-details__img-search">
                                <a class="img-popup" href="{{ asset('assets/frontend/images/products/comon.jpg') }}"><span
                                        class="icon-magnifying-glass"></span></a>
                            </div><!-- /.product-image -->
                        </div>
                    @endif
                </div><!-- /.column -->
                <div class="col-lg-6 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="product-details__top">
                        <h3 class="product-details__title">Study in {{ $countryInfo->country }}</h3><!-- /.product-title -->
                    </div>
                    <div class="product-details__content">
                        <div class="product-details__excerpt">
                            <p class="product-details__excerpt-text1">{!! $countryInfo->about !!} </p>
                        </div><!-- /.excerp-text -->
                    </div>
                </div>
            </div>
            <!-- /.product-details -->

            <!-- /.product-description -->
            <div class="product-details__description wow fadeInUp" data-wow-delay="300ms">
                <div class="contact-location__inner tabs-box wow fadeInUp" data-wow-delay='300ms'>
                    <div class="contact-location__inner__filter">
                        <button data-tab="#why_study"
                            class="contact-location__inner__filter__btn drivschol-btn tab-btn active-btn">Why Study in
                            {{ $countryInfo->country }}</button><!-- /.contact-location__inner__filter__btn -->
                        <button data-tab="#required_docs"
                            class="contact-location__inner__filter__btn drivschol-btn tab-btn">Required
                            Documents</button><!-- /.contact-location__inner__filter__btn -->
                        <button data-tab="#process"
                            class="contact-location__inner__filter__btn drivschol-btn tab-btn">Application
                            Process</button><!-- /.contact-location__inner__filter__btn -->
                        <button data-tab="#universities"
                            class="contact-location__inner__filter__btn drivschol-btn tab-btn">Universities We
                            Represent</button><!-- /.contact-location__inner__filter__btn -->
                    </div><!-- /.contact-location__inner__filter -->
                    <div class="tabs-content destination">
                        <div class="contact-location__inner__item fadeInUp animated tab active-tab" id="why_study">
                            {!! $countryInfo->why_study !!}
                        </div><!-- /.contact-location__inner__item -->

                        <div class="contact-location__inner__item fadeInUp animated tab" id="required_docs">
                            {!! $countryInfo->required_docs !!}
                        </div><!-- /.contact-location__inner__item -->

                        <div class="contact-location__inner__item fadeInUp animated tab" id="process">
                            {!! $countryInfo->process !!}
                        </div><!-- /.contact-location__inner__item -->

                        <div class="contact-location__inner__item fadeInUp animated tab" id="universities">
                            {!! $countryInfo->universities !!}
                        </div><!-- /.contact-location__inner__item -->
                    </div><!-- /tabs-content -->
                </div><!-- /.contact-location__inner -->
            </div>
            <!-- /.product-description -->
        </div>
    </section>
    <!-- Products End -->
@endsection
