@extends('backend.layouts.app')
@section('title', 'Contacts')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Contact</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Contact Information</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title" value="{{ $contact?->title }}" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Subtitle<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="subtitle" id="link"
                                        placeholder="Enter Subtitle" value="{{ $contact?->subtitle }}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Location title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="location_title" id="link"
                                        placeholder="Enter Location title" value="{{ $contact?->location_title }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Location Content<span class="text-danger">*</span></label>
                                    <textarea name="location_content" class="form-control summernote" data-height="50" value="{{ $contact?->location_content }}"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address1 Country<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address1_country"
                                        placeholder="Enter Address1 Country" value="{{ $contact?->address1_country }}" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address1 Phone<span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" name="address1_phone"
                                        placeholder="Enter Address1 Phone" value="{{ $contact?->address1_phone }}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address1 Email<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address1_email"
                                        placeholder="Enter Address1 Email" value="{{ $contact?->address1_email }}"  required>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address1 Location<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address1_location"
                                        placeholder="Enter Address1 location" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="address1_image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 100px</small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address2 Country</label>
                                    <input type="text" class="form-control" name="address2_country"
                                        placeholder="Enter Address2 Country">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address2 Phone</label>
                                    <input type="tel" class="form-control" name="address2_phone"
                                        placeholder="Enter Address2 Country">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address2 Email</label>
                                    <input type="text" class="form-control" name="address2_email"
                                        placeholder="Enter Address2 Email">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address2 Location</label>
                                    <input type="text" class="form-control" name="address2_location"
                                        placeholder="Enter Address2 location">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="address2_image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 100px</small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address3 Country</label>
                                    <input type="text" class="form-control" name="address3_country"
                                        placeholder="Enter Address3 Country">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address3 Phone</label>
                                    <input type="tel" class="form-control" name="address3_phone"
                                        placeholder="Enter Address3 phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address3 Email</label>
                                    <input type="text" class="form-control" name="address3_email"
                                        placeholder="Enter Address3 Email">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Address3 Location</label>
                                    <input type="text" class="form-control" name="address3_location"
                                        placeholder="Enter Address3 location">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="address3_image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 100px</small>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create Contact</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush
