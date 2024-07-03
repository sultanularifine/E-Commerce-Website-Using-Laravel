@extends('backend.layouts.app')
@section('title', 'Site Settings')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Site Settings</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Site Information</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('site_settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Site Title<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="site_title" id="title"
                                            placeholder="Enter Site Title" value="{{ $site_settings?->site_title }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Site Tageline</label>
                                    <input type="text" class="form-control" name="site_tagline" id="link"
                                        placeholder="Enter Site Tageline"
                                        value="{{ $site_settings?->site_tagline }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="image">Logo<span class="text-danger">*</span></label>
                                    <input type="file" name="logo" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="image">Fav Icon</label>
                                    <input type="file" name="fav_icon" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="email">Primary Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="primary_email" id="link"
                                        placeholder="Enter Primary Email"
                                        value="{{ $site_settings?->primary_email }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Facebook</label>
                                        <input type="link" class="form-control" name="facebook" id="title"
                                            placeholder="Enter Facebook"
                                            value="{{ $site_settings?->facebook }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Linkedin</label>
                                        <input type="link" class="form-control" name="linkedin" id="title"
                                            placeholder="Enter Linkedin"
                                            value="{{ $site_settings?->linkedin }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Twitter</label>
                                    <input type="link" class="form-control" name="twitter" id="link"
                                        placeholder="Enter Twitter"
                                        value="{{ $site_settings?->twitter }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Instagram</label>
                                        <input type="link" class="form-control" name="instagram" id="title"
                                            placeholder="Enter Instagram"
                                            value="{{ $site_settings?->instagram }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Whatsapp</label>
                                    <input type="link" class="form-control" name="whatsapp" id="link"
                                        placeholder="Enter Whatsapp"
                                        value="{{ $site_settings?->whatsapp }}">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create Site Information</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush