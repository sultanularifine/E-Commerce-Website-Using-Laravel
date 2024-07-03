@extends('backend.layouts.app')
@section('title', 'Destination Management')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Destination Management</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Create A New Destination</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('destinations.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Category<span class="text-danger">*</span></label>
                                        <select class="form-select form-control col-md-12 order-2 order-lg-1"name="category"
                                                    required>
                                                       
                                                        <option value="Europe">Europe</option>
                                                        <option value="America">America</option>
                                                        <option value="Asia">Asia</option>
                                                        <option value="Australia">Australia</option>
                                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="text">Country<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="country" id="link"
                                        placeholder="Enter Country">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">About<span class="text-danger">*</span></label>
                                    <textarea name="about" class="form-control summernote" data-height="100"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Why Study<span class="text-danger">*</span></label>
                                    <textarea name="why_study" class="form-control summernote" data-height="100"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Required Docs<span class="text-danger">*</span></label>
                                    <textarea name="required_docs" class="form-control summernote" data-height="100"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Process<span class="text-danger">*</span></label>
                                    <textarea name="process" class="form-control summernote" data-height="100"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Universities<span class="text-danger">*</span></label>
                                    <textarea name="universities" class="form-control summernote" data-height="100"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 1mb</small>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create Destination</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')

@endpush
