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
                <h1>Staff Permissions</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6">
                            <button class="btn btn-info" data-toggle="modal" data-target="#assignStaff">Assign New
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Staff</th>
                                        <th>Universities</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userUniversityData as $assignee)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $assignee['user']->name }} </td>
                                            <td>
                                                @foreach ($assignee['universities'] as $uni)
                                                    {{ $uni->name }}
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td class="row">
                                                @role('Super Admin')
                                                    <a href="{{ route('staffs.edit', $assignee['user']->id) }}"
                                                        class="btn btn-sm btn-info edit-btn mr-1"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#">
                                                        <form method="POST"
                                                            action="{{ route('staffs.destroy', $assignee['user']->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger mx-1"
                                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </form>
                                                    </a>
                                                @endrole
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div><!-- /.container-fluid -->
        </section>
        @include('backend.staff_universities.add_modal')
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
                "autoWidth": true
            });
        })
    </script>
@endpush
