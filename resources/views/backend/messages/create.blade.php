@extends('backend.layouts.app')
@section('title', 'message')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Messages</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Messages Information</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('messages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title" value="{{ $message?->title }}" required>
                                </div>                           
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Description 1<span class="text-danger">*</span></label>
                                    <textarea name="description1" class="form-control summernote" data-height="100" required>{{ $message?->description1 }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Highlighter Text<span class="text-danger">*</span></label>
                                    <textarea name="highlighter_text" class="form-control summernote" data-height="100" required>{{ $message?->highlighter_text }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Description 2<span class="text-danger">*</span></label>
                                    <textarea name="description2" class="form-control summernote" data-height="100" required>{{ $message?->description2 }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 1mb</small>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <img src="{{ asset('storage/messages/' . $message?->image) }}" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create message</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
@endpush
