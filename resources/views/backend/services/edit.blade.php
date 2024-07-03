@extends('backend.layouts.app')
@section('title', 'Service Information')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Service Information</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Edit Services</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('services.update', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <select name="title" id="title" class="form-control">
                                        <option value="study_abroad" {{ (!empty($service->title) && ($service->title == "study_abroad"))? "selected" : "" }}>Study Abroad</option>
                                        <option value="scholarship" {{ (!empty($service->title) && ($service->title == "scholarship"))? "selected" : "" }}>Scholarship</option>
                                        <option value="word_placement" {{ (!empty($service->title) && ($service->title == "word_placement"))? "selected" : "" }}>Work Placement</option>
                                        <option value="tours_travels" {{ (!empty($service->title) && ($service->title == "tours_travels"))? "selected" : "" }}>Tours & Travels</option>
                                        <option value="management_services" {{ (!empty($service->title) && ($service->title == "management_services"))? "selected" : "" }}>Management services</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8 col-sm-12">
                                    <label for="link">Subtitle<span class="text-danger">*</span></label>
                                    <input type="link" class="form-control" name="sub_title" id="link"
                                        placeholder="Enter Subtitle" value="{{ $service->sub_title }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="link">Short Description<span class="text-danger">*</span></label>
                                    <input type="link" class="form-control" name="short_description" id="link"
                                        placeholder="Enter Short description" value="{{ $service->short_description }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Description<span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control summernote" data-height="100">{{ $service->description }}"</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div>
                                    <img src="{{ asset('storage/services/' . $service->image) }}" width="70px"
                                    height="70px" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Service</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush