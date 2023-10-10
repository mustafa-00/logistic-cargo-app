@extends('landing.home_index')

@section('contents')
<!--? slider Area Start-->
<div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets_landing/img/hero/services.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap">
                        <h2>Our Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--? Testimonial Start -->
<div class="testimonial-area testimonial-padding section-bg" data-background="assets_landing/img/gallery/section_bg04.jpg">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-7 col-lg-7">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle2 mb-25">
                    <span>Clients Testimonials</span>
                    <h2>What Our Clients Say!</h2>
                </div>
                <div class="h1-testimonial-active mb-70">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial ">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="assets_landing/img/gallery/Homepage_testi.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Jhaon smith</span>
                                    <p>Creative designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial ">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="assets_landing/img/gallery/Homepage_testi.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Jhaon smith</span>
                                    <p>Creative designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Start -->
            <div class="col-xl-4 col-lg-5 col-md-8">
                <div class="testimonial-form text-center">
                    <h3>Always listening, always understanding.</h3>
                    <input type="text" placeholder="Incoterms">
                    <button name="submit" class="submit-btn">Request a Quote</button>
                </div>
            </div>
            <!-- Form End -->
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection
