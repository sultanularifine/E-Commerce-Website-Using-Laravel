@extends('backend.layouts.app')
@section('title', 'Universities')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/chocolat/dist/css/chocolat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/select2/dist/css/select2.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Universities</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    @role('Super Admin')
                        <div class="card-header row">
                            <div class="col-md-6">
                                <button class="btn btn-info" data-toggle="modal" data-target="#createUniversity">New University
                                </button>
                            </div>
                        </div>
                    @endrole
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            {{-- @include('backend.partials.message') --}}
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Country</th>
                                        @role('Super Admin')
                                            <th>Action</th>
                                        @endrole
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($universities as $university)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                @if (!empty($university->website))
                                                    <a href="{{ $university->website }}"
                                                        target="_blank">{{ $university->name }}</a>
                                                @else
                                                    {{ $university->name }}
                                                @endif
                                            </td>
                                            <td>
                                                @if (!empty($university->image))
                                                    <div class="gallery">
                                                        <div class="gallery-item"
                                                            data-image="{{ asset('storage/universities/' . $university->image) }}"
                                                            data-title="{{ $university->name }}">
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>{{ $university->country }}</td>
                                            @role('Super Admin')
                                                <td class="row">
                                                    <a data="{{ json_encode($university) }}"
                                                        class="btn btn-sm btn-info edit-btn mr-1"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#">
                                                        <form method="POST"
                                                            action="{{ route('universities.destroy', $university->id) }}">
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
        @include('backend.universities.add_modal')
        @include('backend.universities.edit_modal')
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
                $('#editUniversity').find('form').attr('action', '/admin/universities/' + data.id)
                $('#editUniversity').find('input[name="name"]').val(data.name)
                $('#editUniversity').find('input[name="website"]').val(data.website)
                $('#editUniversity').find('select[name="country"]').val(data.country)
                $('#editUniversity').modal('toggle');
            })
        })
    </script>
@endpush
