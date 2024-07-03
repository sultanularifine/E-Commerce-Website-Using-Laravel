@extends('backend.layouts.app')
@section('title', 'Dashboard')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
    <style>
        .fc-right {
            display: none;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Pending Tasks</h4>
                            </div>
                            <div class="card-body">
                                {{ $pendingTasks }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>To Do List</h4>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTask">
                                Add New </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tasks as $task)
                                            <tr id="task-{{ $task->id }}"
                                                class="{{ $task->status == 1 ? 'bg-light' : '' }}">
                                                <td>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="checkbox" name="todo1" id="{{ $task->id }}"
                                                            class="clickme" {{ $task->status ? 'checked' : '' }}>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span id="taskName-{{ $task->id }}"
                                                        class="{{ $task->status == 1 ? 'done' : '' }}">{{ $task->task }}</span>
                                                </td>
                                                <td>
                                                    <small class="">
                                                        {{ date('g:i a', strtotime($task->task_date)) }}</small>
                                                </td>
                                                <td>
                                                    <small class="">
                                                        {{ date('d-m-Y', strtotime($task->task_date)) }}</small>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <form method="POST"
                                                            action="{{ route('tasks.destroy', $task->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger mr-1"
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
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Calendar</h4>
                        </div>
                        <div class="card-body">
                            <div class="fc-overflow">
                                <div id="myEvent"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('backend.dashboard.admin_task_modal')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/library/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/page/modules-calendar.js') }}"></script>
    <script src="{{ asset('assets/backend/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
                "searching": false,
                "ordering": false,
                fnDrawCallback: function() {
                    $("#example1 thead").remove();
                }
            });

            $('.clickme').click(function() {
                var taskId = $(this).attr('id');
                var token = $('meta[name="csrf-token"]').attr('content');
                window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token;

                if ($(this).is(':checked')) {
                    axios.put('/api/task/status', {
                        status: 1,
                        id: taskId
                    }).then((response) => {
                        $('#taskName-' + taskId).addClass('done');
                        $('#task-' + taskId).addClass('bg-light');
                    });
                } else {
                    axios.put('/api/task/status', {
                        status: 0,
                        id: taskId
                    }).then((response) => {
                        $('#taskName-' + taskId).removeClass('done');
                        $('#task-' + taskId).removeClass('bg-light');
                    });
                }
            });
        });
    </script>
@endpush
