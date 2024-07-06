@extends('frontend.layouts.app')
@section('title', 'Message')
@section('content')
    <section class="team-details">
        <div class="container">
            <div class="team-details__inner">
                <div class="row">
                    <div class="col-md-5 pe-3 pe-md-0">
                        <div class="team-details__image  wow fadeInLeft" data-wow-delay='500ms'>
                            <img src="{{asset('assets/frontend/images/team/message.jpg')}}" alt="team-details__image">
                        </div><!-- /.team-details__image -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-md-7">
                        <div class="team-details__content">
                            <h6 class="team-details__content__subtitle  wow fadeInUp" data-wow-delay='500ms'>Chief Executive Officer</h6>
                            <h3 class="team-details__content__title  wow fadeInUp" data-wow-delay='500ms'>MOHAMMED KAOSAR</h3>
                            <!-- /.team-details__title -->
                            <p class="team-details__content__text text-justify wow fadeInUp" data-wow-delay='500ms'>Coxs View International (CVI) incorporated as a Private Limited Company established in 2012, we were well-positioned for Student Recruitment, Migration, and Tours & travels. I am honored to have the opportunity to lead a team of dedicated employees who are committed to making this company a top performing company in Malaysia & Bangladesh.</p>
                            <!-- /.team-details__content__text -->
                            <!-- /.team-details__designation -->
                            <div class="team-details__content__highlight  wow fadeInUp" data-wow-delay='500ms'>
                                <span class="team-details__content__highlight__text">CVI name is synonymous with the relentless pursuit of achievement </span>
                                <div class="team-details__content__highlight__shape">
                                    <svg width="315" height="38" viewBox="0 0 315 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M267 0L0 38H315V18L267 0Z" fill="#2C2C31" />
                                    </svg>
                                </div><!-- /.team-details__content__highlight__shape -->
                            </div><!-- /.team-details__content__highlight -->
                            <p class="team-details__content__text text-justify wow fadeInUp" data-wow-delay='500ms'>Because I strongly believe in the quality of our people and our services and products, I have made a substantial personal investment in this company. Throughout my career, I have always invested my own capital in the company believing there is no better place to devote one’s resources then in employees, services, and products. Consequential, fulfilling the goal and satisfaction from customer endorsement.</p>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">

                                </div>
                            </div>
                            <ul class="list-unstyled team-details__list  wow fadeInUp" data-wow-delay='500ms'>
                                <li class="team-details__list__item"> <i class="fas fa-briefcase"></i> <span
                                        class="team-details__list__item__name">Experience:</span> 13 Years</li>
                                <li class="team-details__list__item"> <i class="icon-envelope"></i> <span
                                        class="team-details__list__item__name">Email:</span> <a
                                        href="mailto:info@cviedu.my"> info@cviedu.my</a></li>
                                <li class="team-details__list__item"> <i class="icon-telephone-call-1"></i> <span
                                        class="team-details__list__item__name">Phone:</span> <a
                                        href="tel:+60102664265">+(60) 102664265</a></li>
                            </ul><!-- /.list-unstyled team-details__list -->

                            <div class="team-details__social  wow fadeInUp" data-wow-delay='500ms'>
                                <!-- social link-->
                                <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a href="#0"><i class="icon-twitter" aria-hidden="true"></i></a>
                                <a href="#0"><i class="icon-pinterest" aria-hidden="true"></i></a>
                                <a href="#0"><i class="icon-Instagram" aria-hidden="true"></i></a>
                            </div><!-- /.team-details__social -->

                        </div><!-- /.team-details__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.team-details__inner -->
        </div><!-- /.container -->
    </section><!-- /.team-details -->
@endsection
