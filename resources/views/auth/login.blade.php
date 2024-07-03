@php
    $staticAds = App\Models\Advertise::where([['status', 1], ['is_featured', 1]])
        ->orderBy('id', 'DESC')
        ->get();
    $headerAds = App\Models\Advertise::where([['status', 1], ['is_header', 1]])
        ->orderBy('id', 'DESC')
        ->get();
    $sliderAds = App\Models\Advertise::where([['status', 1], ['is_slider', 1]])
        ->orderBy('id', 'DESC')
        ->get();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; {{ @config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/backend/img/logo.png') }}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/backend/library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/backend/library/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.css"
        integrity="sha512-LEetX42b+K0TTmnfCNxYOrVTLlg36s06bJ8cutF3BpQT3VnpzdeqoYfn+FW2KBi/imYk2RpfQzlyzY7CrRW4CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/backend/library/chocolat/dist/css/chocolat.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/components.css') }}">
    <style>
        ::-webkit-scrollbar {
            width: 0px;
        }
    </style>
</head>

<body>
    <div id="id">
        <div class="login-bg" style="background-image: url({{ asset('assets/backend/img/login-bg.jpg') }})">

            <div class="col-lg-3 col-md-3 col-sm-12 index-2 position-relative hide-mobile">
                @if (!empty($staticAds[0]))
                    <div class="advertise gallery text-white top-advertise">
                        <div class="gallery-item" data-image="{{ asset('storage/advertise/' . $staticAds[0]?->image) }}"
                            data-toggle="tooltip" data-placement="top" title="Click to View"
                            data-title="{{ $staticAds[0]?->title }}">
                        </div>
                        @if (!empty($staticAds[0]->details))
                            {{ implode(' ', array_slice(explode(' ', $staticAds[0]->details), 0, 4)) }}
                            <a href="#0" data="{{ json_encode($staticAds[0]) }}"
                                header="{{ $staticAds[0]->title }}" class="text-info show-details">...More</a>
                        @endif
                    </div>
                @endif
                @if (!empty($staticAds[1]))
                    <div class="advertise gallery text-white bottom-advertise">
                        <div class="gallery-item"
                            data-image="{{ asset('storage/advertise/' . $staticAds[1]?->image) }}"
                            data-toggle="tooltip" data-placement="top" title="Click to View"
                            data-title="{{ $staticAds[1]?->title }}">
                        </div>
                        @if (!empty($staticAds[1]->details))
                            {{ implode(' ', array_slice(explode(' ', $staticAds[1]->details), 0, 4)) }}
                            <a href="#0" data="{{ json_encode($staticAds[1]) }}"
                                header="{{ $staticAds[1]->title }}" class="text-info show-details">...More</a>
                        @endif
                    </div>
                @endif
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 index-2 position-relative">
                @if (!empty($headerAds[0]))
                    <div class="advertise-header text-center mb-3 center-top-advertise hide-mobile">
                        <a href="{{ !empty($headerAds[0]?->link) ? $headerAds[0]?->link : '#' }}" target="_blank"
                            class="text-white"><img src="{{ asset('storage/advertise/' . $headerAds[0]?->image) }}"
                                alt=""></a>
                    </div>
                @endif
                <div class="card custom-card center-bottom-advertise index-2">
                    <div class="card-body align-middle text-white">
                        <div class="text-center">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/backend/img/logo.png') }}" alt="logo" width="15%"
                                    class="mb-2 mt-2">
                            </a>
                            <h6 class="my-2">Welcome to {{ @config('app.name') }}</h6>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('login') }}" class="needs-validation">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control login-form @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        tabindex="1" autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password"
                                        class="form-control login-form @error('password') is-invalid @enderror"
                                        name="password" required tabindex="2" autocomplete="current-password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    @enderror
                                </div>

                                <div class="">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="checkbox">
                                        <label class="custom-control-label" for="checkbox">Show Password</label>
                                    </div>

                                    {{-- <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="remember"
                                            tabindex="3" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div> --}}
                                </div>

                                <div class="form-group text-right">
                                    @if (Route::has('password.request'))
                                        <a class="float-left mt-3" href="{{ route('password.request') }}">
                                            Forgot Password?
                                        </a>
                                    @endif
                                    <button type="submit" class="btn btn-info btn-sm px-4 btn-icon icon-right"
                                        tabindex="4">
                                        Login
                                    </button>
                                </div>
                                <p class="text-center my-2">Don't have an account? <a class="text-primary2"
                                        href="#">Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 index-2 position-relative hide-mobile">
                @if (!empty($sliderAds[0]))
                    <div class="advertise top-advertise">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner gallery">
                                @foreach ($sliderAds as $ad)
                                    <div class="text-white carousel-item {{ $loop->first ? 'active' : '' }}">
                                        {{-- <a href="{{ !empty($ad?->link) ? $ad?->link : '#' }}" target="_blank"><img
                                            src="{{ asset('storage/advertise/' . $ad?->image) }}" alt=""></a> --}}
                                        <div class="gallery-item"
                                            data-image="{{ asset('storage/advertise/' . $ad?->image) }}"
                                            data-toggle="tooltip" data-placement="top" title="Click to View"
                                            data-title="{{ $ad?->title }}">
                                        </div>
                                        @if (!empty($ad->details))
                                            {{ implode(' ', array_slice(explode(' ', $ad->details), 0, 4)) }}
                                            <a href="#0" data="{{ json_encode($ad) }}"
                                                header="{{ $ad->title }}"
                                                class="text-info show-details">...More</a>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                @endif
                @if (!empty($staticAds[2]))
                    <div class="advertise gallery bottom-advertise text-white">
                        <div class="gallery-item"
                            data-image="{{ asset('storage/advertise/' . $staticAds[2]?->image) }}"
                            data-toggle="tooltip" data-placement="top" title="Click to View"
                            data-title="{{ $staticAds[2]?->title }}">
                        </div>
                        @if (!empty($staticAds[1]->details))
                            {{ implode(' ', array_slice(explode(' ', $staticAds[2]->details), 0, 4)) }}
                            <a href="#0" data="{{ json_encode($staticAds[2]) }}"
                                header="{{ $staticAds[2]->title }}" class="text-info show-details">...More</a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
        @include('backend.advertisements.popup')
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/backend/library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('assets/backend/library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('assets/backend/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/stisla.js') }}"></script>
    <!-- JS Libraies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"
        integrity="sha512-pi7w4/MYBJ/7/NFGQ1OCInentlT3CCVVKU2udjNRWhxIOY5K2vxSPKYEa6EKbEZvHkgyEB8SMlSU8E84Ig81Og=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('#checkbox').on('change', function() {
                $('#password').attr('type', $('#checkbox').prop('checked') == true ? "text" : "password");
            });

            $(".show-details").on('click', function() {
                let data = $(this).attr("data")
                let header = $(this).attr("header")
                data = JSON.parse(data)
                let link = (data.link) ? data.link : '#'

                $('#popup').find('.header').html(header)
                $('#popup').find('.data').html(data.details)
                $('#popup').find('.web-link').html('<a href="' + link +
                    '" target="_blank">**Click To Visit Website**</a>')
                $('#popup').modal('toggle')
            })
        });
    </script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        @if (Session::has('success'))

            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/backend/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom.js') }}"></script>
</body>

</html>
