@extends('landing.home_index')

@section('contents')

<!--? slider Area Start-->
<div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets_landing/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap">
                        <h2>About us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('about') }}">About</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--? About Area Start -->
<div class="categories-area section-padding30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-80">
                    <h2 style="color: orangered">About Our Company</h2>
                    {{-- <span>About Our Company</span> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    {{-- <div class="cat-icon">
                        <span class="flaticon-shipped"></span>
                    </div> --}}
                    <div class="cat-cap">
                        <h5 ><a href="services.html">Our History</a></h5>
                        <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    {{-- <div class="cat-icon">
                        <span class="flaticon-ship"></span>
                    </div> --}}
                    <div class="cat-cap">
                        <h5 ><a href="services.html">Growth Proccess</a></h5>
                        <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    {{-- <div class="cat-icon">
                        <span class="flaticon-plane"></span>
                    </div> --}}
                    <div class="cat-cap">
                        <h5 ><a href="services.html">Our Milestone</a></h5>
                        <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

{{-- Our mission strat --}}
<div class="about-low-area padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <h2>Our Mission And Values</h2>
                        <span>Mission</span>
                    </div>
                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
                    <div class="section-tittle mb-35">
                        <span>Values</span>
                    </div>
                    <p>Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
                    <a href="about.html" class="btn">More About Us</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                <div class="about-img ">
                    <div class="about-font-img">
                        <img src="assets_landing/img/gallery/about2.png" alt="">
                    </div>
                    <div class="about-back-img d-none d-lg-block">
                        <img src="assets_landing/img/gallery/about1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Our mission end --}}

<!--Team Ara Start -->
<div class="team-area section-padding30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-70">
                    <h2>Our Team Mambers</h2>
                    <span>What We Can Do For You</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-team mb-30 text-center">
                    <div class="team-img">
                        <img src="assets_landing/img/gallery/team1.png" alt="">
                        <div class="team-caption">
                            <h3><a href="#">Mancherwan Kolin</a></h3>
                            <p>Health agent</p>
                            <!-- Blog Social -->
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-team mb-30 text-center">
                    <div class="team-img">
                        <img src="assets_landing/img/gallery/team2.png" alt="">
                        <div class="team-caption">
                            <h3><a href="#">Mancherwan Kolin</a></h3>
                            <p>Health agent</p>
                            <!-- Blog Social -->
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-team mb-30 text-center">
                    <div class="team-img">
                        <img src="assets_landing/img/gallery/team3.png" alt="">
                        <div class="team-caption">
                            <h3><a href="#">Mancherwan Kolin</a></h3>
                            <p>Health agent</p>
                            <!-- Blog Social -->
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Ara End -->

@endsection
