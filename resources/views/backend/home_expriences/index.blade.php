@extends('backend.layouts.app')
@section('title', 'Home Exprience Information')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Home Exprience Information</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Home Exprience Information</h5>
                    </div>
                    <!-- form start -->
                    <form action="{{ route('home_expriences.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="title">Card Title 1<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_title_1" id="title"
                                        placeholder="Enter Title" value="{{ $home_exprience?->card_title_1 }}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="link">Card Subtitle 1<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_sub_title_1" id="link"
                                        placeholder="Enter Subtitle" value="{{ $home_exprience?->card_sub_title_1 }}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="details">Card Icon 1<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_icon_class_1" id="link"
                                        placeholder="Enter Icon Class" value="{{ $home_exprience?->card_icon_class_1 }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="title">Card Title 2<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_title_2" id="title"
                                        placeholder="Enter Title" value="{{ $home_exprience?->card_title_2 }}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="link">Card Subtitle 2<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_sub_title_2" id="link"
                                        placeholder="Enter Subtitle" value="{{ $home_exprience?->card_sub_title_2 }}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="details">Card Icon 2<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_icon_class_2" id="link"
                                        placeholder="Enter Icon Class" value="{{ $home_exprience?->card_icon_class_2 }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="title">Card Title 3<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_title_3" id="title"
                                        placeholder="Enter Title" value="{{ $home_exprience?->card_title_3 }}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="link">Card Subtitle 3<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_sub_title_3" id="link"
                                        placeholder="Enter Subtitle" value="{{ $home_exprience?->card_sub_title_3 }}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="details">Card Icon 3<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_icon_class_3" id="link"
                                        placeholder="Enter Icon Class" value="{{ $home_exprience?->card_icon_class_3 }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="title">Card Title 4<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_title_4" id="title"
                                        placeholder="Enter Title" value="{{ $home_exprience?->card_title_4 }}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="link">Card Subtitle 4<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_sub_title_4" id="link"
                                        placeholder="Enter Subtitle" value="{{ $home_exprience?->card_sub_title_4 }}" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="details">Card Icon 4<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="card_icon_class_4" id="link"
                                        placeholder="Enter Icon Class" value="{{ $home_exprience?->card_icon_class_4 }}">
                                </div>
                            </div>    
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create Home Exprience</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@push('scripts')
@endpush
