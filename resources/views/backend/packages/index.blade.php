@extends('backend.layouts.app')
@section('title', 'Special Promotion')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/chocolat/dist/css/chocolat.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Special Promotion</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    @role('Super Admin')
                        <div class="card-header row">
                            <div class="col-md-6">
                                <button class="btn btn-info" data-toggle="modal" data-target="#createPackage">New Package
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
                                        <th>Package</th>
                                        <th>Package Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $package)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td class="gallery">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/packages/' . $package->file) }}"
                                                    data-toggle="tooltip" data-placement="top" title="Click to View"
                                                    data-title="{{ $package->name }}"></div>
                                            </td>
                                            <td>{{ $package->name }} </td>
                                            <td class="row">
                                                <a class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top"
                                                    title="Download" href="{{ asset('storage/packages/' . $package->file) }}" download="{{ $package->name }}">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                                @role('Super Admin')
                                                    <a href="#">
                                                        <form method="POST"
                                                            action="{{ route('packages.destroy', $package->id) }}">
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
        @include('backend.packages.add_modal')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
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
