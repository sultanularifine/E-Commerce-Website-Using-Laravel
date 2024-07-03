@extends('backend.layouts.app')
@section('title', 'Course Management')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Course Management</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Edit Course</h5>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="name">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter course name" value="{{ $course->name }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" id="price"
                                        placeholder="Enter course price" value="{{ $course->price }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" name="link" id="link"
                                        placeholder="Enter course link" value="{{ $course->link }}">
                                </div>
                                <div class="form-group col-md-6 col-12 custom-file">
                                    <label>Thumbnail</label>
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="description">Short Description</label>
                                    <textarea name="description" class="form-control" data-height="100">{{ $course->description }}</textarea>
                                </div>
                            </div>

                            @if (!empty($course->thumbnail))
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <img src="{{ asset('storage/courses/' . $course?->thumbnail) }}">
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Course</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
@endpush
