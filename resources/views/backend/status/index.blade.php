@extends('backend.layouts.app')
@section('title', 'Status')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Statuses</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6">
                            <button class="btn btn-info" data-toggle="modal" data-target="#createStatus">Create Status
                            </button>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($status as $st)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $st->name }}</td>
                                            <td class="row">
                                                @if (!in_array($st->id, [1, 2, 3, 4, 5, 6, 7, 8]))
                                                    <a data="{{ json_encode($st) }}"
                                                        class="btn btn-sm btn-info edit-btn mr-1"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#">
                                                        <form method="POST"
                                                            action="{{ route('status.destroy', $st->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </form>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
        </section>
        @include('backend.status.add_modal')
        @include('backend.status.edit_modal')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true
            });
        });

        $(document).on('click','.edit-btn', function() {
            let data = $(this).attr("data")
            data = JSON.parse(data)
            $('#editStatus').find('form').attr('action', '/admin/status/' + data.id)
            $('#editStatus').find('input[name="name"]').val(data.name)
            $('#editStatus').find('select[name="type"]').val(data.type)
            $('#editStatus').modal('toggle');
        })
    </script>
@endpush
