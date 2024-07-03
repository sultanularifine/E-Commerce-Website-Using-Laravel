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
                        <h5 class="card-title">Create A New Blog</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter title">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="link">category</label>
                                    <input type="text" class="form-control" name="category" id="link"
                                        placeholder="Enter category">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="details">Description<span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control summernote" data-height="100" required></textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Recommended height for header images: 100px</small>
                                </div>
                            </div>

                           
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create Blog</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')

@endpush