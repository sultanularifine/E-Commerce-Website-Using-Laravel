@extends('backend.layouts.app')
@section('title', 'Staff Permissions')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/select2/dist/css/select2.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Staff Permissions</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <form action="{{ route('staffs.update', $currentStaff) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="university" class="font-weight-bold">Staff<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control select2" name="user_id" required>
                                        @foreach ($staffs as $staff)
                                            <option {{ $staff->id == $currentStaff ? 'selected' : '' }}
                                                value="{{ $staff->id }}">{{ $staff->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="university" class="font-weight-bold">Universities<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control select2" name="university_ids[]" multiple="multiple"
                                        required>
                                        @foreach ($universities as $university)
                                            <option {{ in_array($university->id, $assignedUniversities) ? 'selected' : '' }} value="{{ $university->id }}">{{ $university->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/library/select2/dist/js/select2.min.js') }}"></script>
@endpush
