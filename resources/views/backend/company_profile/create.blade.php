@extends('backend.layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profiles</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Profiles Information</h5>
                    </div>
                    <!-- form start -->
                   
                    <form action="{{ route('company_profiles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title" value="{{ $profile?->title }}" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="title">Sub Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="sub_title" id="title"
                                        placeholder="Enter Sub Title" value="{{ $profile?->sub_title }}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="title">Registration No<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="registration_no" id="registration_no"
                                        placeholder="Enter Registration No" value="{{ $profile?->registration_no }}" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="title">Registration Date<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control datepicker" name="registration_date"
                                        id="registration_date" placeholder="Enter Registration Date"
                                        value="{{ $profile?->registration_date }}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="title">Company Type<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control " name="company_type" id="company_type"
                                        placeholder="Enter Company Type" value="{{ $profile?->company_type }}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Mission<span class="text-danger">*</span></label>
                                    <textarea name="mission" class="form-control summernote" data-height="100" required>{{ $profile?->mission }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Vision<span class="text-danger">*</span></label>
                                    <textarea name="vision" class="form-control summernote" data-height="100" required>{{ $profile?->vision }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Valu<span class="text-danger">*</span></label>
                                    <textarea name="value" class="form-control summernote" data-height="100" required>{{ $profile?->value }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Goal<span class="text-danger">*</span></label>
                                    <textarea name="goal" class="form-control summernote" data-height="100" required>{{ $profile?->goal }}</textarea>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create profile</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
@endpush

