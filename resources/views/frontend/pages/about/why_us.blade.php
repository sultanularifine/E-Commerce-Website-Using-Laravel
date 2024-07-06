@extends('frontend.layouts.app')
@section('title', 'Why US')
@section('content')
<section class="service-details">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-md-12 col-lg-4">
                <div class="service-sidebar">
                    <div class="service-sidebar__single  wow fadeInUp" data-wow-delay='500ms'>
                        <div class="service-sidebar__contact">
                            <h3 class="service-sidebar__contact-title">Get a Quick Solution of Your Queries</h3><!-- /.service-sidebar__contact__title -->
                            <div class="service-sidebar__contact-btn">
                                <a href="{{ route('contact') }}" class="drivschol-btn drivschol-btn--base2">Contact</a>
                            </div><!-- /.service-sidebar__contact__icon -->
                            <div class="service-sidebar__contact-image">
                                <img src="{{asset('assets/frontend/images/service/why_us.jpg')}}" alt>
                            </div>
                            <div class="service-sidebar__contact-angle">
                                <svg width="370" height="210" viewBox="0 0 370 210" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M259.647 0L0 210H370L259.647 0Z" fill="#EC2526" />
                                </svg>
                            </div>
                        </div><!-- /.service-sidebar__contact -->
                    </div>
                </div><!-- /.sidebar -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-8">
                <div class="service-details__content">
                    <div class="service-details__single text-justify">
                        <h3 class="service-details__title wow fadeInUp" data-wow-delay='300ms'>Why CVIEM?</h3><!-- /.service-details__title -->

                        <p class="service-details__text wow fadeInUp" data-wow-delay='350ms'>Brainstorm as many ideas as possible to bring awareness in peoples regarding higher education in abroad, focusing specialized courses which is match with their profile. To select cost effective study route or career path that best suites candidate’s profile, consequently leading to dreamed goal. 
                            To make aware any inquirer by giving complete information about any institute, especially if CVICS found that the inquirer’s chosen institute is substandard, deceptive and/or not comply with inquirer’s goal.
                        </p>
                        <p class="service-details__text wow fadeInUp" data-wow-delay='350ms'>
                            To give latest and reliable information about selected institution or country i.e., language requirements, accommodation and living condition, part time job opportunities, and even hardships or obstacles that one may be confronted with, so he/she will adapt in that new domain easily and quickly.

                            To emphasize “education for all”, search for merit and need based scholarships in different countries, and to encourage talented and/or poor students who dreams to study abroad but cannot be due to scarce financial resources.
                        </p>
                    </div><!-- /.service-details__single-->

                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->
        </div><!-- /.row -->
        <div class="text-justify">
            <p class="service-details__text wow fadeInUp" data-wow-delay='350ms'>
                To improve future prospects of our skilled youth and professionals through work permits and immigration schemes. Capacity building of our clients, groom their personality, takeaway hesitation in presentation, by arranging group discussion sessions, English conversation classes, improving presentation skills and other trainings, enabling them to face upcoming challenges with courage.

                To organize free workshops, seminars and extra curriculum activities in diverse disciplines that add to participant’s intellectual skills, give awareness about education, health etc., bring positive change in their minds i.e., reduce frustration and increase optimism.
                
                We render end to end services in visa assistance, travel assistance and admission according to their needs. Our expert team continuously support to find out the best place to study & subject for your future goals. We will advise even tutorial services for IELTS/PTE and also accommodation during your study period. CVICS is become one stop service centre for study abroad & Migration.                            
            </p>

            <h3 class="service-details__sub-title wow fadeInUp" data-wow-delay='300ms'>IMMIGRATION</h3><!-- /.service-details__title -->
            <!-- /.service-details__text -->
            <p class="service-details__text wow fadeInUp" data-wow-delay='350ms'>Besides education abroad, CVICS welcomes highly skilled professionals for immigration to Malaysia, Australia, Canada, and Europe. First, CVICS make an internal assessment by our experts and then on the basis of that assessment, CVICS chooses and encourages only qualified individuals in order to give high quality, efficient and personalized migration services. The success of our cases entirely dependent on our ability to identify the right migration strategy and visa options in the fastest possible time. CVICS’s professionals always keep themselves updated with the latest immigration procedures and policies and up-to-date amendments. Our strength is in our team. Their hard work, dedication and special interest in their work always lead us to success and help in promotion of CVICS</p><!-- /.service-details__text -->
        </div>
    </div><!-- /.container -->
</section><!-- /.service-details -->
@endsection