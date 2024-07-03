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
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('applicants.index') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Applications (Malaysia)</h4>
                                </div>
                                <div class="card-body">
                                    {{ $applicants }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('applicants.pending') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Pending (Malaysia)</h4>
                                </div>
                                <div class="card-body">
                                    {{ $pendingApplicants }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('arrival-info.index') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-clipboard"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Arrival Info</h4>
                                </div>
                                <div class="card-body">
                                    {{ $arrivals }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
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
        });
    </script>
@endpush
