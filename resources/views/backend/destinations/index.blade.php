@extends('backend.layouts.app')
@section('title', 'Destinations Management')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/chocolat/dist/css/chocolat.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Destinations Management</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-12"><a href="{{ route('destinations.create') }}" class="btn btn-info">Create
                                New destination</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            {{-- @include('backend.partials.message') --}}
                            <table id="table-1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>category</th>
                                        <th>country</th>
                                        <th>Image</th>
                                        <th></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($destinations as $destination)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $destination->category }}</td>
                                            <td>{{ $destination->country }}</td>
                                            <td class="gallery">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/destinations/' . $destination->image) }}"
                                                    data-toggle="tooltip" data-placement="top" title="Click to View"
                                                    data-title="{{ $destination->title }}"></div>
                                            </td>
                                            <td></td>
                                            <td class="row">
                                                <a href="{{ route('destinations.edit', $destination->id) }}"
                                                    class="btn btn-sm btn-info mr-1"><i class="fas fa-edit"></i></a>
                                                <a href="#">
                                                    <form method="POST"
                                                        action="{{ route('destinations.destroy', $destination->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script>
        $(function() {
            $("#table-1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true
            });
        });
    </script>
@endpush
