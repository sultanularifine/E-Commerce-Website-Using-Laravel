@extends('backend.layouts.app')
@section('title', 'Files')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/bootstrap-daterangepicker/daterangepicker.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Files</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    @role('Super Admin')
                        <div class="card-header row">
                            <div class="col-md-6">
                                <button class="btn btn-info" data-toggle="modal" data-target="#uploadFile">Upload File
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
                                        <th>File Name</th>
                                        <th>Uploaded At</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($files as $file)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $file->name }}</td>
                                            <td>{{ $file->date }}</td>
                                            <td class="row">
                                                <a class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top"
                                                    title="Download" href="{{ asset('storage/files/' . $file->file) }}"
                                                    download="{{ $file->name }}">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                                @role('Super Admin')
                                                    <a href="#">
                                                        <form method="POST" action="{{ route('files.destroy', $file->id) }}">
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
        @include('backend.files.add_modal')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
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
