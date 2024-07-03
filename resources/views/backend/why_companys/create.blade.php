@extends('backend.layouts.app')
@section('title', 'Why Company')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Why Company</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Why Company Information</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('why-companys.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title"  value="{{ $why_company?->title }}" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="text">Sub Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="sub_title" id="link"
                                        placeholder="Enter Sub Title" value="{{ $why_company?->sub_title }}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Short Description<span class="text-danger">*</span></label>
                                    <textarea name="short_description" class="form-control summernote" data-height="100" required>{{ $why_company?->short_description }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Description<span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control summernote" data-height="100" required>{{ $why_company?->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 1mb</small>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <img src="{{ asset('storage/why_companys/' .$why_company?->image) }}" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create why_company</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush