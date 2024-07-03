@extends('backend.layouts.app')
@section('title', 'Home Country Information')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Home Country Information</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Edit Home Country</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('home_countrys.update', $home_country->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf        
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="link"
                                    placeholder="Enter Title" value="{{ $home_country->title }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Sub Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="sub_title" id="link"
                                    placeholder="Enter Sub Title" value="{{ $home_country->sub_title }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Link</label>
                                    <input type="link" class="form-control" name="link" id="link"
                                        placeholder="Enter Link" value="{{ $home_country->link }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="image">Image<span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="form-control">
                                    <div>
                                        <img src="{{ asset('storage/home_countrys/' . $home_country->image) }}" width="70px" height="70px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">update Home Country</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush