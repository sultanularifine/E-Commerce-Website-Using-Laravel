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
                        <h5 class="card-title">Create A New Service</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <select name="title" id="title" class="form-control">
                                        <option value="study_abroad">Study Abroad</option>
                                        <option value="scholarship">Scholarship</option>
                                        <option value="word_placement">Work Placement</option>
                                        <option value="tours_travels">Tours & Travels</option>
                                        <option value="management_services">Management services</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8 col-sm-12">
                                    <label for="link">Subtitle<span class="text-danger">*</span></label>
                                    <input type="link" class="form-control" name="sub_title" id="link"
                                        placeholder="Enter Subtitle">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="link">Short Description<span class="text-danger">*</span></label>
                                    <input type="link" class="form-control" name="short_description" id="link"
                                        placeholder="Enter Short description">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Description</label>
                                    <textarea name="description" class="form-control summernote" data-height="100"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image<span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 1mb</small>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create Service</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush
