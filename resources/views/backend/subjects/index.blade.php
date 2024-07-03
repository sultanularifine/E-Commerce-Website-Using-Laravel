@extends('backend.layouts.app')
@section('title', 'Subjects')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/chocolat/dist/css/chocolat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/select2/dist/css/select2.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Subjects</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header row">
                        @role('Super Admin')
                            <div class="col-md-6">
                                <button class="btn btn-info" data-toggle="modal" data-target="#createSubject">New Subject
                                </button>
                            </div>
                        @endrole
                        <div class="col-md-6">
                            <form action="{{ route('subjects.index') }}" method="GET">
                                <div class="d-flex">
                                    <select class="form-control select2 rounded-0" name="country" id="inputGroupSelect05">
                                        <option selected value="">All Countries</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country }}">{{ $country }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control select2 rounded-0" name="uni_id" id="inputGroupSelect04">
                                        <option selected value="">All Universities</option>
                                        @foreach ($universities as $university)
                                            <option value="{{ $university->id }}">{{ $university->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-light rounded-0" type="submit"><i
                                                class="text-primary fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            {{-- @include('backend.partials.message') --}}
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Tuition Fee</th>
                                        <th>University</th>
                                        <th>Country</th>
                                        @role('Super Admin')
                                            <th>Comments</th>
                                            <th>Action</th>
                                        @endrole
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects as $subject)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $subject->name }}</td>
                                            <td>{{ $subject->tuition_fee }}</td>
                                            <td>
                                                @if (!empty($subject->university->website))
                                                    <a href="{{ $subject->university->website }}"
                                                        target="_blank">{{ $subject->university->name }}</a>
                                                @else
                                                    {{ $subject->university->name }}
                                                @endif
                                            </td>
                                            <td>{{ $subject->university->country }}</td>
                                            @role('Super Admin')
                                            <td>{{ $subject->comments }}</td>
                                            <td class="row">
                                                <a data="{{ json_encode($subject) }}"
                                                        class="btn btn-sm btn-info edit-btn mr-1"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#">
                                                        <form method="POST"
                                                            action="{{ route('subjects.destroy', $subject->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger mx-1"
                                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </form>
                                                    </a>
                                            </td>
                                            @endrole
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div><!-- /.container-fluid -->
        </section>
        @include('backend.subjects.add_modal')
        @include('backend.subjects.edit_modal')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/select2/dist/js/select2.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,

            });

            $(document).on('click','.edit-btn', function() {
                let data = $(this).attr("data")
                data = JSON.parse(data)
                $('#editSubject').find('form').attr('action', '/admin/subjects/' + data.id)
                $('#editSubject').find('input[name="name"]').val(data.name)
                $('#editSubject').find('input[name="tuition_fee"]').val(data.tuition_fee)
                $('#editSubject').find('input[name="comments"]').val(data.comments)
                $('#editSubject').find('select[name="university_id"]').val(data.university_id)
                $('#editSubject').modal('toggle');
            })
        })
    </script>
@endpush
