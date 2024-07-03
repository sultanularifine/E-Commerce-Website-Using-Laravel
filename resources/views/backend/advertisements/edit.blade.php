@extends('backend.layouts.app')
@section('title', 'Advertisements Management')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advertisements Management</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Edit Advertise</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('advertisements.update', $advertise->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter title" value="{{ $advertise->title }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Link</label>
                                    <input type="link" class="form-control" name="link" id="link"
                                        placeholder="Enter website link" value="{{ $advertise->link }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Details</label>
                                    <textarea name="details" class="form-control" data-height="100">{{ $advertise->details }}</textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 100px</small>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <img src="{{ asset('storage/advertise/' .$advertise->image) }}" alt="" width="100%">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" name="is_featured" type="checkbox"
                                            id="checkbox1" {{ ($advertise->is_featured == 1)? 'checked' : '' }}>
                                        <label class="custom-control-label" for="checkbox1">Set as featured</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" name="is_slider" type="checkbox" id="checkbox2" {{ ($advertise->is_slider == 1)? 'checked' : '' }}>
                                        <label class="custom-control-label" for="checkbox2">Set as slider</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" name="is_header" type="checkbox" id="checkbox3" {{ ($advertise->is_header == 1)? 'checked' : '' }}>
                                        <label class="custom-control-label" for="checkbox3">Set as header advertise</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Advertise</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
@endpush
