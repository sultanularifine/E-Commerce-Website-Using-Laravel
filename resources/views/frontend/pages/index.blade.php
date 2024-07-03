@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
    <section class="head-section">
        <div class=" pb-3 container">
            <div class="row  align-items-center">
                <div class="col-md-6 px-5">
                    <h1 id="text-style">Buy the Sweaters</h1>
                    <h1 class="text-style2">for Winter</h1>
                    <p>
                        Winter Fashion is back with latest styles for this winter. Find
                        the sweaters and jacket of your choice and get with 25%
                        discount. Offer valid just for 5 days.
                    </p>
                    <button type="button" class="btn penguin-btn">
                        <i class="fa fa-shopping-cart"></i> BUY NOW
                    </button>
                </div>
                <div class="col-md-6 how-img px-5">
                    <img src="{{ asset('assets/frontend/images/bannar-profile.png')}}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!--Woman collection section-->
    <section id="products" class="container mt-5">
        <h1>Woman Jacket</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <div class="col">
                <div class="card h-100 penguin-card-border shadow rounded">
                    <img src="{{ asset('assets/frontend/images/woman/woman-jak1.png')}}" class="card-img-top penguin-card-img w-75" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Yellow Coat Jacket</h5>
                        <p class="card-text">
                            Stylish yellow coat for young and beautiful ladies.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                        <div>
                            <h3 class="price-text-style">3200Rs</h3>
                        </div>
                        <div>
                            <button type="button" class="btn penguin-btn">
                                <i class="fa fa-shopping-cart"></i> BUY NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 penguin-card-border shadow rounded">
                    <img src="{{ asset('assets/frontend/images/woman/woman-jak2.png')}}" class="card-img-top penguin-card-img w-75" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Ladies Jacket</h5>
                        <p class="card-text">
                            Jackets for casual wear in best prices and diffrent color
                            patterns.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                        <div>
                            <h3 class="price-text-style">2500Rs</h3>
                        </div>
                        <div>
                            <button type="button" class="btn penguin-btn">
                                <i class="fa fa-shopping-cart"></i> BUY NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 penguin-card-border shadow rounded">
                    <img src="{{ asset('assets/frontend/images/woman/woman-jak3.png')}}" class="card-img-top penguin-card-img w-75" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Woman Leather Jacket</h5>
                        <p class="card-text">
                            Leather jackets of premium quality.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                        <div>
                            <h3 class="price-text-style">5000Rs</h3>
                        </div>
                        <div>
                            <button type="button" class="btn penguin-btn">
                                <i class="fa fa-shopping-cart"></i> BUY NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Men collection section-->
    <section class="container mt-5">
        <h1 class="penguin-catagory">Man Jacket</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <div class="col">
                <div class="card h-100 penguin-card-border shadow rounded">
                    <img src="{{ asset('assets/frontend/images/man/man-jak1.png')}}" class="card-img-top penguin-card-img w-75" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Snowboard Jacket Mens</h5>
                        <p class="card-text">
                            Snowboard jacket are ferfect match for people in moutain areas
                            or for tourist.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                        <div>
                            <h3 class="price-text-style">3500Rs</h3>
                        </div>
                        <div>
                            <button type="button" class="btn penguin-btn">
                                <i class="fa fa-shopping-cart"></i> BUY NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 penguin-card-border shadow rounded">
                    <img src="{{ asset('assets/frontend/images/man/man-jak3.png')}}" class="card-img-top penguin-card-img w-75" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Man Leather Jackets</h5>
                        <p class="card-text">
                            Perfect bike riding jacket available with different color and
                            sizes.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                        <div>
                            <h3 class="price-text-style">4500Rs</h3>
                        </div>
                        <div>
                            <button type="button" class="btn penguin-btn">
                                <i class="fa fa-shopping-cart"></i> BUY NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 penguin-card-border shadow rounded">
                    <img src="{{ asset('assets/frontend/images/man/man-jak2.png')}}" class="card-img-top penguin-card-img w-75" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Man Casual Jackets</h5>
                        <p class="card-text">
                            Matte Black Jacket with all sizes available.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center penguin-card-footer">
                        <div>
                            <h3 class="price-text-style">3000Rs</h3>
                        </div>
                        <div>
                            <button type="button" class="btn penguin-btn">
                                <i class="fa fa-shopping-cart"></i> BUY NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Some information section-->
    <section class="container mt-5 pt-5">
        <div class="pt-2 pb-5 container">
            <div class="row d-flex align-items-center flex-column-reverse flex-lg-row">
                <div class="col-md-6 px-3">
                    <div class="card mb-3 penguin-card-border shadow" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/frontend/icon/image 12.png')}}" class="w-50 penguin-info" alt="..." />
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">Find the Perfect Fit</h5>
                                    <p class="card-text">
                                        Everybody is different, which is why we offer styles for
                                        every body.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 penguin-card-border shadow" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/frontend/icon/image 13.png')}}" class="w-50 penguin-info" alt="..." />
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">Free Exchanges</h5>
                                    <p class="card-text">
                                        One of the many reasons you can shop with peace of mind.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 penguin-card-border shadow" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/frontend/icon/image 14.png')}}" class="w-50 penguin-info" alt="..." />
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">Contact Our Seller</h5>
                                    <p class="card-text">
                                        They are here to help you. That's quite literally what
                                        we pay them for.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 how-img px-5">
                    <img src="{{ asset('assets/frontend/icon/XMLID 1.png')}}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    </main>

    <!--Footer section-->
    <section class="footer-section">
        <div class="container pb-5">
            <div class="row">
                <div id="about-us" class="col-sm pe-5 mb-3 pt-3">
                    <img src="{{ asset('assets/frontend/images/logo.png')}}" alt="" class="penguin-logo img-fluid" />
                    <hr />
                    <p>
                        Changing the way you dress will change the way you feel. When you
                        are well dressed and look good you will automatically feel better.
                        When you feel good about yourself, you are more likely to feel
                        good inside, treat others better, and have more energy.
                    </p>
                </div>
                <div id="contact-us" class="col-sm pe-5 pt-3">
                    <h5>Contact us:</h5>
                    <hr />
                    <p>
                        <i class="fa fa-map-marker fa-1x"> </i>Shradha Park, B-37/39
                        Hingna - Wadi Link Road, Nagpur - 440016.
                    </p>
                    <p>
                        <i class="fa fa-envelope-open"></i>
                        vaibhav.mathane.cse@ghrietn.raisoni.net
                    </p>
                    <p><i class="fa fa-phone"></i> +911234567891</p>
                </div>
                <div class="col-sm pe-5 pt-3">
                    <div>
                        <h5>Get in Touch</h5>
                        <hr />
                        <i class="fa fa-facebook-square fa-2x pe-3"> </i>
                        <i class="fa fa-twitter-square fa-2x pe-3"></i>
                        <i class="fa fa-linkedin fa-2x pe-3"></i>
                    </div>
                    <div class="pt-5">
                        <h5>Pay with</h5>
                        <hr />
                        <img src="{{ asset('assets/frontend/icon/pay.png')}}" class="w-75" alt="" />
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection
