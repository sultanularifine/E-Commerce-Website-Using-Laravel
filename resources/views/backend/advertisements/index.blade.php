@extends('backend.layouts.app')
@section('title', 'Advertisements Management')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/chocolat/dist/css/chocolat.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advertisements Management</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-12"><a href="{{ route('advertisements.create') }}" class="btn btn-info">Create
                                New Advertisement</a></div>
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
                                        <th>Featured</th>
                                        <th>Header</th>
                                        <th>Slider</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($advertisements as $advertisement)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td class="gallery">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/advertise/' . $advertisement->image) }}"
                                                    data-toggle="tooltip" data-placement="top" title="Click to View"
                                                    data-title="{{ $advertisement->title }}"></div>
                                            </td>
                                            @if (!empty($advertisement->link))
                                                <td><a href="{{ $advertisement->link }}"
                                                        target="_blank">{{ $advertisement->title }}</a></td>
                                            @else
                                                <td>{{ $advertisement->title }}</td>
                                            @endif
                                            <td>{{ $advertisement->is_featured == 1 ? 'Yes' : 'No' }}</td>
                                            <td>{{ $advertisement->is_header == 1 ? 'Yes' : 'No' }}</td>
                                            <td>{{ $advertisement->is_slider == 1 ? 'Yes' : 'No' }}</td>
                                            <td class="row">
                                                <a href="{{ route('advertisements.edit', $advertisement->id) }}"
                                                    class="btn btn-sm btn-info mr-1"><i class="fas fa-edit"></i></a>
                                                <a href="#">
                                                    <form method="POST"
                                                        action="{{ route('advertisements.destroy', $advertisement->id) }}">
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
