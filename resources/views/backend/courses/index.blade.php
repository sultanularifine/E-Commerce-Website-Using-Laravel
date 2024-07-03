@extends('backend.layouts.app')
@section('title', 'Course Management')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/chocolat/dist/css/chocolat.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Course Management</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    @role('Super Admin|Staff')
                    <div class="card-header row">
                        <div class="col-md-12"><a href="{{ route('courses.create') }}" class="btn btn-info">Create
                                New Course</a></div>
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
                                        <th>Thumbnail</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        @role('Super Admin')
                                        <th>Action</th>
                                        @endrole
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td class="gallery">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/courses/' . $course?->thumbnail) }}"
                                                    data-toggle="tooltip" data-placement="top" title="Click to View"
                                                    data-title="{{ $course->name }}"></div>
                                            </td>
                                            <td>
                                                @if (!empty($course->link))
                                                    <a href="{{ $course->link }}"
                                                        target="_blank">{{ $course->name }}</a>
                                                @else
                                                    {{ $course->name }}
                                                @endif
                                            </td>
                                            <td>{{ $course->price }}</td>
                                            <td class="text-center">
                                                @if (!empty($course->description))
                                                    {{ implode(' ', array_slice(explode(' ', $course->description), 0, 1)) }}
                                                    <a href="#" data="{{ json_encode($course) }}"
                                                        class="text-primary2 show-description">...More</a>
                                                @endif
                                            </td>
                                            @role('Super Admin')
                                            <td class="row">
                                                <a href="{{ route('courses.edit', $course->id) }}"
                                                    class="btn btn-sm btn-info mr-1"><i class="fas fa-edit"></i></a>
                                                <a href="#">
                                                    <form method="POST" action="{{ route('courses.destroy', $course->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
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
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        @include('backend.courses.description_modal')
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

            $(".show-description").on('click', function() {
                let data = $(this).attr("data")
                data = JSON.parse(data)
                $('#modalDescription').find('.description').html(data.description)
                $('#modalDescription').modal('toggle');
            })
        })
    </script>
@endpush
