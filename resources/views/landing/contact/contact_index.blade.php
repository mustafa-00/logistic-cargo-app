@extends('landing.home_index')

@section('contents')
<!--? slider Area Start-->
<div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets_landing/img/hero/contact.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap">
                        <h2>Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('contact') }}">Contact</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--? contact-form start -->
<section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets_landing/img/gallery/section_bg02.jpg">
    <div class="container">
        <div class="row justify-content-end">
            <!-- Contact wrapper -->
            <div class="col-xl-8 col-lg-9">
                <div class="contact-form-wrapper">
                    <!-- From tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-50">
                                <span>Get a Qote For Free</span>
                                <h2>Request a Free Quote</h2>
                                <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p>
                            </div>
                        </div>
                    </div>
                    <!-- form -->
                    <form action="#" class="contact-form">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-form">
                                    <input type="text" placeholder="Contact Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="select-items">
                                    <select name="select" id="select1">
                                        <option value="">Freight Type</option>
                                        <option value="">Catagories One</option>
                                        <option value="">Catagories Two</option>
                                        <option value="">Catagories Three</option>
                                        <option value="">Catagories Four</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-form">
                                    <input type="text" placeholder="City of Departure">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Incoterms">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Weight">
                                </div>
                            </div>
                            <!-- Height Width length -->
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Height">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Width">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="length">
                                </div>
                            </div>
                            <!-- Radio Button -->
                            <div class="col-lg-12">
                                <div class="radio-wrapper mb-30 mt-15">
                                    <label>Extra services:</label>
                                    <div class="select-radio">
                                        <div class="radio">
                                            <input id="radio-1" name="radio" type="radio" checked="">
                                            <label for="radio-1" class="radio-label">Freight</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio-2" name="radio" type="radio">
                                            <label for="radio-2" class="radio-label">Express Delivery</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio-4" name="radio" type="radio">
                                            <label for="radio-4" class="radio-label">Insurance</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio-5" name="radio" type="radio">
                                            <label for="radio-5" class="radio-label">Packaging</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="col-lg-12">
                                <button name="submit" class="submit-btn">Request a Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-form end -->

@endsection
