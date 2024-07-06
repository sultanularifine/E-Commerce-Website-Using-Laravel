
<div class="topbar-one">
    <div class="container-fluid">
        <div class="topbar-one__inner">
            <div class="topbar-one__left">
                <div class="topbar-one__social">
                    <a href="mailto:info@cviedu.my"><i class="fas fa-envelope"></i> E.Commerce</a> </div>
                <p class="topbar-one__text">
                    <i class="fas fa-phone-alt"></i> +000000000033 &nbsp;|&nbsp; +013736926463
                </p>
            </div>
            <ul class="topbar-one__right">
                <li class="topbar-one__right-text">
                   
                </li>
                <li class="topbar-one__right-text"></li>
                <li class="topbar-one__right-text">
                    @if (auth()->check())
                        <a href="{{ route('dashboard') }}" target="_blank"> Dashboard </a>
                    @else
                        <a href="{{ route('login') }}" target="_blank"> Login </a>
                    @endif
                    <span> / </span>
                    <a href="#" target="_blank"> Register </a>
                </li>
            </ul>
        </div>
    </div>
</div>  
<!-- Header Start-->
<header class="main-header sticky-header sticky-header--normal">
        <section class="head-section">
            <header class="container">
                <nav class="navbar navbar-expand-lg navbar-light penguin-nabbar">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('assets/frontend/images/logo.png') }}" alt=""
                                class="penguin-logo img-fluid" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#products">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact-us">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </section>
        

    </div>
</header><!-- /.main-header -->
<!-- Header End-->
