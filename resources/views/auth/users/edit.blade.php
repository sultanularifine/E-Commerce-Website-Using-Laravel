@extends('backend.layouts.app')
@section('title', 'Users Management')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Users Management</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Edit User</h5>
                    </div>
                    {{-- @include('backend.partials.message') --}}
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="name">Name</label>
                                    <input value="{{ $user->name }}" type="text" class="form-control" name="name"
                                        id="name" placeholder="Enter your  Name">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="email">Email</label>
                                    <input value="{{ $user->email }}" type="email" class="form-control" name="email"
                                        id="email" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Enter your password">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        id="password_confirmation" placeholder="Enter the password again">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="checkbox">
                                        <label class="custom-control-label" for="checkbox">Show Password</label>
                                    </div>
                                </div>
                            </div>

                            @foreach ($roles as $role)
                                @if ($user->hasRole($role->name))
                                    <input type="hidden" name="old_role" value="{{ $role->name }}">
                                @endif
                            @endforeach

                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="roles">Assign Roles</label>
                                    <select name="role" id="roles" class="form-control">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}"
                                                {{ $user->hasRole($role->name) ? 'selected' : '' }}> {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#checkbox').on('change', function() {
                $('#password').attr('type', $('#checkbox').prop('checked') == true ? "text" : "password");
                $('#password_confirmation').attr('type', $('#checkbox').prop('checked') == true ? "text" : "password");
            });
        });
    </script>
@endpush