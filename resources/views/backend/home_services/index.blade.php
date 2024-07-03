@extends('backend.layouts.app')
@section('title', 'Home Service Information')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/chocolat/dist/css/chocolat.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Home Service Information</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-12"><a href="{{ route('home_services.create') }}" class="btn btn-info">Create
                                New Home Service</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            {{-- @include('backend.partials.message') --}}
                            <table id="table-1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Icon</th>
                                        <th>Background Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($home_services as $home_service)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $home_service->title }}</td>
                                            <td>
                                                @if (!empty($home_service->description))
                                                    {{ implode(' ', array_slice(explode(' ', $home_service->description), 0, 1)) }}
                                                    <a href="#" data="{{ json_encode($home_service) }}"
                                                        class="text-primary2 show-description">...More</a>
                                                @endif
                                            </td>
                                            <td>{{ $home_service->icon_class }}</td>
                                            <td class="gallery">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/home_services/' . $home_service->bg_image) }}"
                                                    data-toggle="tooltip" data-placement="top" title="Click to View"
                                                    data-title="{{ $home_service->title }}"></div>
                                            </td>
                                            <td>
                                                <a href="{{ route('home_services.edit', $home_service->id) }}"
                                                    class="btn btn-sm btn-info mr-1"><i class="fas fa-edit"></i></a>
                                                <a href="#">
                                                    <form method="POST"
                                                        action="{{ route('home_services.destroy', $home_service->id) }}">
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
        @include('backend.services.description_modal')

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

            $(".show-description").on('click', function() {
                let data = $(this).attr("data")
                data = JSON.parse(data)
                $('#modalDescription').find('.description').html(data.description)
                $('#modalDescription').modal('toggle');
            })
        });
    </script>
@endpush
