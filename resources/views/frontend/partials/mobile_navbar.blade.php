<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{ route('home') }}" aria-label="logo image"><img src="{{ asset('assets/backend/img/logo.png') }}" width="150" alt="CVIEM"></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <div class="row mt-3">
            <div class="col-md-6">
                <a href="#" target="_blank" class="btn btn-sm btn-danger rounded-0"> Arrival
                    Info </a>
                <a href="#" target="_blank" class="btn btn-sm btn-danger rounded-0">
                    Admission </a>
                <a href="#" target="_blank" class="btn btn-sm btn-danger rounded-0">
                    Result </a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <a href="#" target="_blank" class="btn btn-sm btn-danger rounded-0">Apply Now</a>
                <a href="#" target="_blank" class="btn btn-sm btn-danger rounded-0">Check Status</a>
            </div>
        </div>

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@cviedu.my">info@cviedu.my</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                +60102664265 &nbsp;|&nbsp; +8801753199518
            </li>
        </ul><!-- /.mobile-nav__contact -->
        {{-- <div class="mobile-nav__social">
            <!-- social link-->
            <a href="https://facebook.com"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
            <a href="https://twitter.com"><i class="icon-twitter" aria-hidden="true"></i></a>
            <a href="https://pinterest.com"><i class="icon-pinterest" aria-hidden="true"></i></a>
            <a href="https://instagram.com"><i class="icon-Instagram" aria-hidden="true"></i></a>
        </div><!-- /.mobile-nav__social --> --}}
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="{{ route('login') }}" target="_blank" class="btn btn-sm btn-danger rounded-0">Login</a>
                <a href="#" target="_blank" class="btn btn-sm btn-danger rounded-0">Register</a>
            </div>
        </div>
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->