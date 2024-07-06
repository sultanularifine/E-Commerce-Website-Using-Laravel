@extends('frontend.layouts.app')
@section('title', 'Partner Universities')
@section('content')
    <section class="service-two">
        {{-- <div class="service-two__bg" style="background-image: url(assets/frontend/images/backgrounds/service-bg-2-1.jpg);"></div> --}}
        <!-- /.service-two__bg -->
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="https://www.nye.hu" target="_blank">
                        <img src="{{ asset('assets/frontend/images/resources/brand-1.png') }}" alt="" width="100%">
                    </a>
                </div>
                {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="service-two__single  wow fadeInUp" data-wow-delay='300ms'>
                    <a href="https://www.nye.hu" target="_blank" class="service-two__single__image">
                        <img src="{{ asset('assets/frontend/images/resources/brand-1.png') }}" alt="Nyíregyházi Egyetem">
                    </a><!-- /.service-two__single__image -->
                    <div class="service-two__single__icon">
                        <i class="icon-Expert"></i>
                    </div><!-- /.service-two__single__image__icon -->
                    <div class="service-two__single__content">
                        <h4 class="service-two__single__content__title">
                            <a href="https://www.nye.hu" target="_blank">Nyíregyházi Egyetem</a>
                        </h4>
                        <!--<p class="service-two__single__content__text"> </p> /.service-two__single__text -->
                    </div><!-- /.service-two__single__content -->
                </div><!-- /.service-two__single -->
            </div><!-- /.col-lg-3 col-md-6 col-sm-12 --> --}}
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-two -->
@endsection
