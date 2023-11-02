@extends('landing.layouts.index')

@section('contents')
    <main>
        {{-- <div class="card">

        <div class="card-body">
          <h5 class="card-title">With captions</h5>

          <!-- Slides with captions -->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

          </div><!-- End Slides with captions -->

        </div>
    </div> --}}

        <!--? slider Area Start-->
        <div id="home" class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <div class="hero__caption">
                                    <h1>Safe & Reliable <span>Logistic</span> Solutions!</h1>
                                </div>
                                <!--Hero form -->
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" placeholder="Your Tracking ID">
                                    </div>
                                    <div class="search-form">
                                        <a href="#">Track & Trace</a>
                                    </div>
                                </form>
                                <!-- Hero Pera -->
                                <div class="hero-pera">
                                    <p>For order status inquiry</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!--? call to action Start -->
        <div class="container">
            <div class="row justify-content-between">
                @foreach ($calltoaction as $item)
                    <div class="col-xl-5 col-lg-5 col-md-8">
                        <div class="testimonial-form text-center">
                            <h3>{{ $item->tittle }}</h3>
                            <button type="button" name="submit" class="btn header-btn">{{ $item->button }}</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- call to action End -->

        <!-- About Area Start -->
        <div id="about" class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>About Us</span>
                            <h2>About Our Company</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($aboutus as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            {{-- <div class="cat-icon">
                                <span class="flaticon-shipped"></span>
                            </div> --}}
                            <div class="cat-cap">
                                <h5><a href="services.html">{{ $item->subtittle }}</a></h5>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- About Area End -->

        <!--? Categories Area Start -->
        <div id="service" class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Our Services</span>
                            <h2>What We Can Do For You</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($ourservice as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat text-center mb-50">
                                {{-- <div class="cat-icon">
                                    <span class="flaticon-shipped"></span>
                                </div> --}}
                                <div class="cat-cap">
                                    <h5><a href="services.html">{{ $item->tittle }}</a></h5>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Categories Area End -->

        {{-- Our mission strat --}}
        <div class="about-low-area padding-bottom">
            <div class="container">
                <div class="row">
                    @foreach ($ourmission as $item)
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <h2>{{ $item->tittle }}</h2>
                                <span>{{ $item->subtittle }}</span>
                            </div>
                            <p>{{ $item->description }}</p>
                            <div class="section-tittle mb-35">
                                <span>{{ $item->secondsubtittle }}</span>
                            </div>
                            <p>{{ $item->seconddescription }}</p>
                            <a href="about.html" class="btn">{{ $item->button }}</a>
                        </div>
                    </div>
                    @endforeach
                    <!-- about-img -->
                    <div class="col-lg-6 col-md-12">
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
                            <span>Our Team Mambers</span>
                            <h2>What We Can Do For You</h2>
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

        <!--? Testimonial Start -->
        <div class="testimonial-area testimonial-padding section-bg"
            data-background="assets_landing/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-7 col-lg-7" style="margin: auto">
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
                                        <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod
                                            tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse
                                            ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
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
                                        <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod
                                            tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse
                                            ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
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
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!--? Blog Area Start -->
        <div class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-70">
                            <span>Our Recent news</span>
                            <h2>Tourist Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets_landing/img/gallery/blog01.png" alt="">
                                </div>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-date text-center">
                                    <span>27</span>
                                    <p>SEP</p>
                                </div>
                                <div class="blog-cap">
                                    <ul>
                                        <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                        <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                    </ul>
                                    <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets_landing/img/gallery/blog1.png" alt="">
                                </div>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-date text-center">
                                    <span>27</span>
                                    <p>SEP</p>
                                </div>
                                <div class="blog-cap">
                                    <ul>
                                        <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                        <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                    </ul>
                                    <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets_landing/img/gallery/blog02.png" alt="">
                                </div>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-date text-center">
                                    <span>27</span>
                                    <p>SEP</p>
                                </div>
                                <div class="blog-cap">
                                    <ul>
                                        <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                        <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                    </ul>
                                    <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        {{-- contact start --}}
        <div id="contact" class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title" style="color: orangered">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 253 565 2365</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- contact end --}}
    </main>
@endsection
