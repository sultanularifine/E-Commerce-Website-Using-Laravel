@extends('frontend.layouts.app')
@section('title', 'Company Profile')
@section('content')
<section class="experience-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="experience-one__left">
                    <div class="sec-title  text-start wow fadeInUp" data-wow-duration='300ms'>

                        <h6 class="sec-title__tagline">
                            <i class="icon-left-arrow sec-title__img"></i>
                            Compnay Profile
                            <i class="icon-right-arrow sec-title__img"></i>
                        </h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">COXS VIEW INTERNATIONAL SDN.BHD.</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="experience-one__left__content  count-box">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-unstyled team-details__list  wow fadeInUp" data-wow-delay='500ms'>
                                    <li class="team-details__list__item"> 
                                        <i class="fas fa-snowflake"></i> 
                                        <span class="team-details__list__item__name">Company Registration no:</span> 1008157-H
                                    </li>
                                    <li class="team-details__list__item"> 
                                        <i class="fas fa-snowflake"></i> 
                                        <span class="team-details__list__item__name">Registration Date:</span> 29-06-2012
                                    </li>
                                    <li class="team-details__list__item"> 
                                        <i class="fas fa-snowflake"></i> 
                                        <span class="team-details__list__item__name">Type of Company:</span> Private Limited (Limited by Shares)
                                    </li>
                                </ul><!-- /.list-unstyled team-details__list -->
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.experience-one__left__content -->
                </div><!-- /.experience-one__left -->
            </div><!-- /.col-12 -->
            <div class="col-lg-6">
                <div class="faq-page__accordion drivschol-accrodion  wow fadeInUp" data-wow-delay='500ms' data-grp-name="drivschol-accrodion">
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4 class="accrodion-title__text">Our Mission<span class="accrodion-title__icon"></span></h4>
                        </div><!-- /.accordian-title -->
                        <div class="accrodion-content">
                            <div class="inner">
                                <p class="accrodion-content__text">statement to build long term relationships with our customers and clients and provide exceptional customer services by pursuing business through innovation and advanced technology.
                                </p>
                            </div><!-- /.accordian-content -->
                        </div>
                    </div><!-- /.accordian-item -->

                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <h4 class="accrodion-title__text">Our Vision<span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon --></h4>
                        </div><!-- /.accordian-title -->
                        <div class="accrodion-content">
                            <div class="inner">
                                <p class="accrodion-content__text">To provide quality services that exceed the expectations of our esteemed customers.</p>
                            </div><!-- /.accordian-content -->
                        </div>
                    </div><!-- /.accordian-item -->

                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4 class="accrodion-title__text">Core values<span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon --></h4>
                        </div><!-- /.accordian-title -->
                        <div class="accrodion-content">
                            <div class="inner">
                                <p class="accrodion-content__text">We believe in treating our customers with respect and faith. We grow through creativity, invention and innovation. We integrate honesty, integrity and business ethics into all aspects of our business functioning.</p>
                            </div><!-- /.accordian-content -->
                        </div>
                    </div><!-- /.accordian-item -->

                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4 class="accrodion-title__text">Goals<span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon --></h4>
                        </div><!-- /.accordian-title -->
                        <div class="accrodion-content">
                            <div class="inner">
                                <p class="accrodion-content__text">A goal of the modern investment firm is to make information available to all those who need it, employees, consultants and clients alike, so that better decisions are made, productivity is increased and benefits are derived.</p>
                            </div><!-- /.accordian-content -->
                        </div>
                    </div><!-- /.accordian-item -->

                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.experience-one -->
@endsection