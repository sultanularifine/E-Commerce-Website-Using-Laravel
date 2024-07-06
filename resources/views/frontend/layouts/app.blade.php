<!DOCTYPE html>
<!-- language -->
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Education Management">
    <meta name="description" content="Education consultancy">

    <!-- ======== Page title ============ -->
    <title>@yield('title') | {{ @config('app.name') }}</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/img/logo.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/backend/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/backend/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/backend/img/logo.png') }}">
    {{-- <link rel="manifest" href="assets/images/favicons/site.webmanifest"> --}}

    <!-- ===========  All Font ================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Urbanist:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ===========  All Stylesheet ================= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/drivschol.css') }}">

    @stack('style')
</head>

<body class="custom-cursor">

    <!-- Custom Cursor -->
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- Preloader Start-->
    {{-- <div class="preloader">
        <div class="preloader__image" style="background-image: url({{ asset('assets/frontend/images/loader.png') }});">
        </div>
    </div> --}}
    <!-- Preloader End-->

    <div class="page-wrapper">

        @include('frontend.partials.header')

        @yield('content')

        @include('frontend.partials.footer')

    </div><!-- /.page-wrapper -->

    @include('frontend.partials.mobile_navbar')

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


    <!--  ALl JS Plugins =====================
    ====================================== -->
    <!--  jquery-3.7.0 js plugins -->
    <script src="{{ asset('assets/frontend/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <!--  Bootstrap js plugins -->
    <script src="{{ asset('assets/frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <!--  jarallax js plugins -->
    <script src="{{ asset('assets/frontend/vendors/jarallax/jarallax.min.js') }}"></script>
    <!--  jquery-ui js plugins -->
    <script src="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <!--  jquery-ajaxchimp js plugins -->
    <script src="{{ asset('assets/frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <!--  jquery-appear js plugins -->
    <script src="{{ asset('assets/frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <!-- jquery-circle-progress js plugins -->
    <script src="{{ asset('assets/frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <!--  magnific-popup js plugins -->
    <script src="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!--  validate js plugins -->
    <script src="{{ asset('assets/frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <!--  nouislider js plugins -->
    <script src="{{ asset('assets/frontend/vendors/nouislider/nouislider.min.js') }}"></script>
    <!--  tiny-slider js plugins -->
    <script src="{{ asset('assets/frontend/vendors/tiny-slider/tiny-slider.js') }}"></script>
    <!--  wnumb js plugins -->
    <script src="{{ asset('assets/frontend/vendors/wnumb/wNumb.min.js') }}"></script>
    <!--  owl-carousel js plugins -->
    <script src="{{ asset('assets/frontend/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <!--  Bootstrap js plugins -->
    <script src="{{ asset('assets/frontend/vendors/wow/wow.js') }}"></script>
    <!--  wow js plugins -->
    <script src="{{ asset('assets/frontend/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
    <!--  isotope js plugins -->
    <script src="{{ asset('assets/frontend/vendors/isotope/isotope.js') }}"></script>
    <!--  countdown js plugins -->
    <script src="{{ asset('assets/frontend/vendors/countdown/countdown.min.js') }}"></script>
    <!--  jquery-circleType js plugins -->
    <script src="{{ asset('assets/frontend/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"
        integrity="sha512-pi7w4/MYBJ/7/NFGQ1OCInentlT3CCVVKU2udjNRWhxIOY5K2vxSPKYEa6EKbEZvHkgyEB8SMlSU8E84Ig81Og=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- template js -->
    <script src="{{ asset('assets/frontend/js/drivschol.js') }}"></script>

    @stack('script')

    <script>
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
</body>

</html>
