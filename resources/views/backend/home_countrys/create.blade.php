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
                        <h5 class="card-title">Create A New Home Country</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('home_countrys.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="link"
                                    placeholder="Enter Title">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Sub Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="sub_title" id="link"
                                    placeholder="Enter Sub Title">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Link</label>
                                    <input type="link" class="form-control" name="link" id="link"
                                        placeholder="Enter Link">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="image">Image<span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create Home Country</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush