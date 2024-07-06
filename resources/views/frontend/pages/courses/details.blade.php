@extends('frontend.layouts.app')
@section('title', 'Courses')
@section('content')
    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">
                @if (!empty($courses))
                    <div class="col-md-12 col-lg-4">
                        <div class="service-sidebar">
                            <div class="service-sidebar__single  wow fadeInUp" data-wow-delay='500ms'>
                                <h3 class="service-sidebar__title background-black-2">More Courses</h3>
                                <!-- /.service-sidebar__title -->
                                <ul class="list-unstyled service-sidebar__nav">
                                    @foreach ($courses as $course)
                                        <li><a
                                                href="{{ route('courses.details', ['id' => $course->id, 'name' => $course->name]) }}">{{ $course->name }}</a>
                                        </li>
                                    @endforeach
                                </ul><!-- /.list-unstyled service-sidebar__nav -->
                            </div><!-- /.service-sidebar__single -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                @endif
                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">
                        <div class="service-details__single">
                            <div class="service-details__thumbnail wow fadeInUp" data-wow-delay='300ms'>
                                <img src="{{ asset('storage/courses/' . $course?->thumbnail) }}" alt="Safety Instruction">
                            </div><!-- /.service-details__thumbnail -->

                            <h3 class="service-details__title wow fadeInUp" data-wow-delay='300ms'>{{ $course->name }}</h3>
                            <!-- /.service-details__title -->

                            <p class="service-details__text wow fadeInUp" data-wow-delay='350ms'>{{ $course->description }} </p>
                        </div><!-- /.service-details__single-->

                    </div><!-- /.service-details__content -->
                </div><!-- /.col-md-12 col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-details -->

@endsection
