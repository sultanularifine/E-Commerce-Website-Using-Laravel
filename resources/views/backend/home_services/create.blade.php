@extends('backend.layouts.app')
@section('title', 'Home Service Information')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Home Service Information</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Create A New Home Service</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('home_services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="link"
                                    placeholder="Enter Title">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Icon Class</label>
                                    <input type="text" class="form-control" name="icon_class" id="link"
                                        placeholder="Enter Icon Class">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Description</label>
                                    <textarea name="description" class="form-control summernote" data-height="100"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="image">Background Image<span class="text-danger">*</span></label>
                                    <input type="file" name="bg_image" class="form-control">
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="is_featured" type="checkbox" id="checkbox1">
                                    <label class="custom-control-label" for="checkbox1">Set as featured</label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create Home Service</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush
