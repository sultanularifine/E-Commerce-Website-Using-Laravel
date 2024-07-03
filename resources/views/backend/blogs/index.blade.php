@extends('backend.layouts.app')
@section('title', 'Blogs Management')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/chocolat/dist/css/chocolat.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Blogs Management</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-12"><a href="{{ route('blogs.create') }}" class="btn btn-info">Create
                                New blog</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            {{-- @include('backend.partials.message') --}}
                            <table id="table-1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td class="gallery">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/blogs/' . $blog->image) }}"
                                                    data-toggle="tooltip" data-placement="top" title="Click to View"
                                                    data-title="{{ $blog->title }}"></div>
                                            </td>
                                            
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->category }}</td>
                                                <td class="">
                                                    @if (!empty($blog->description))
                                                        {{ implode(' ', array_slice(explode(' ', $blog->description), 0, 1)) }}
                                                        <a href="#" data="{{ json_encode($blog) }}"
                                                            class="text-primary2 show-description">...More</a>
                                                    @endif
                                                </td>
                                           
                                                <td class="row">
                                                    <a href="{{ route('blogs.edit', $blog->id) }}"
                                                        class="btn btn-sm btn-info mr-2"><i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#">
                                                        <form method="POST"
                                                            action="{{ route('blogs.destroy', $blog->id) }}">
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

            $(".show-description").on('click', function() {
                let data = $(this).attr("data")
                data = JSON.parse(data)
                $('#modalDescription').find('.description').html(data.description)
                $('#modalDescription').modal('toggle');
            })
        });
    </script>
@endpush
