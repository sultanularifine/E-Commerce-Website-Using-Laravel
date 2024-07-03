@extends('backend.layouts.app')
@section('title', 'Home Why Us')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Home Why Us</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Home Why Us</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('home_why_us.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="title"> Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Enter Title" value="{{ $home_why_us?->title}}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="link">Sub Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="sub_title" id="link"
                                        placeholder="Enter Subtitle" value="{{ $home_why_us?->sub_title}}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="details">Content<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="content" id="link"
                                        placeholder="Enter Icon Class" value="{{ $home_why_us?->content }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Card Title 1<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_title_1" id="title"
                                        placeholder="Enter Title" value="{{ $home_why_us?->card_title_1 }}" required>
                                </div>
                               
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Card Icon 1<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_icon_class_1" id="link"
                                        placeholder="Enter Icon Class" value="{{ $home_why_us?->card_icon_class_1 }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Card Title 2<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_title_2" id="title"
                                        placeholder="Enter Title" value="{{ $home_why_us?->card_title_2 }}" required>
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Card Icon 2<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_icon_class_2" id="link"
                                        placeholder="Enter Icon Class" value="{{ $home_why_us?->card_icon_class_2 }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Card Title 3<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_title_3" id="title"
                                        placeholder="Enter Title" value="{{ $home_why_us?->card_title_3 }}" required>
                                </div>
                               
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Card Icon 3<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_icon_class_3" id="link"
                                        placeholder="Enter Icon Class" value="{{ $home_why_us?->card_icon_class_3 }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="title">Card Title 4<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_title_4" id="title"
                                        placeholder="Enter Title" value="{{ $home_why_us?->card_title_4 }}" required>
                                </div>
                               
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="details">Card Icon 4<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_icon_class_4" id="link"
                                        placeholder="Enter Icon Class" value="{{ $home_why_us?->card_icon_class_4 }}">
                                </div>
                            </div>    
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create Home Why Us</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush
