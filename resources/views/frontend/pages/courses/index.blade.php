@extends('frontend.layouts.app')
@section('title', 'Courses')
@section('content')
    <section class="service-page">
        <div class="container">
            <div class="row gutter-y-30">
                @if (count($courses) > 0)
                    @foreach ($courses as $course)
                        <div class="col-md-6 col-lg-4">
                            <div class="service-card service-card-one  wow fadeInUp animated" data-wow-duration='1500ms'
                                data-wow-delay='000ms'>
                                <div class="service-card__image">
                                    <img src="{{ asset('storage/courses/' . $course?->thumbnail) }}"
                                        alt="{{ $course->name }}">
                                </div><!-- /.blog-card__image -->

                                <div class="service-card__content">
                                    <h3 class="service-card__title"><a href="{{ route('courses.details', ['id' => $course->id, 'name' => $course->name]) }}">{{ $course->name }}</a></h3>
                                    <p class="service-card__text">
                                        @if (!empty($course->description))
                                            {{ implode(' ', array_slice(explode(' ', $course->description), 0, 10)) }}
                                        @endif
                                    </p><!-- /.blog-card-two__text -->
                                </div><!-- /.blog-card__content -->

                                <div class="service-card__bth">
                                    <a href="{{ route('courses.details', ['id' => $course->id, 'name' => $course->name]) }}" class="drivschol-btn drivschol-btn--base2">Read More <i
                                            class="fas fa-plus"></i></a>
                                </div>

                            </div><!-- /.blog-card -->
                        </div><!-- /.col-md-6 col-lg-4 -->
                    @endforeach
                @else
                    <h2 class="text-center">No courses are available for now</h2>
                @endif
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-page -->
@endsection
