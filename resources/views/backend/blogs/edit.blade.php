@extends('backend.layouts.app')
@section('title', 'Blogs Management')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Blogs Management</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Edit blog</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter title" value="{{ $blog->title }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">Category</label>
                                    <input type="text" class="form-control" name="category" id="link"
                                        placeholder="Enter category" value="{{ $blog->category }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Description<span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control summernote" data-height="100" required>{{ $blog->description }}</textarea>
                                </div>
                            </div>
                         

                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 100px</small>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <img src="{{ asset('storage/blogs/' .$blog->image) }}" alt="" width="100%">
                                </div>
                            </div>

                         
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update blog</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
@endpush
