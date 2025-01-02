@extends('userpanel')
@section('content')
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>About</h2>

            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        Home 
                    </a>
                </li>

                <li class="active">About</li>
            </ul>
        </div>
    </div>
</div>
<section class="about-us-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5" data-cues="slideInUp">
                <div class="about-img-three">
                    <img src="{{ asset('frontend/images/about/about-us.jpg') }}" alt="Image">

                    <div class="about-shape-3">
                        <img src="{{ asset('frontend/images/about-shape-3.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-content about-content-style-two" data-cues="slideInUp">
                    <span>About us</span>
                    <h2>Redlep Software Company delivers innovative software solutions, empowering businesses with smart technology.</h2>
                    <h3>We divide our working process into 4 ways</h3>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    <h4>Planing</h4>
                                    <p>Effective software development planning ensures goals, timelines, and resources align.</p>
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    <h4>Optimizing</h4>
                                    <p>Enhancing performance through efficient software optimization and advanced solutions.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    <h4>Research</h4>
                                    <p>Innovating through software development and cutting-edge technology research.</p>
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    <h4>Results</h4>
                                    <p>Delivering exceptional results through innovative and reliable software development.</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a href="{{ url('about-us') }}" class="default-btn">
                        View more info
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->

<!-- Start Why CHoose Us Area -->
<section class="why-choose-us-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="why-choose-us-content">
                    <span>Why choose us</span>
                    <h2>Client likes seeing our work skills</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                    <ul>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Transparent</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Proactive</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Affordable</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Flexible</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="why-choose-us-img before-style">
                    <img src="{{ asset('frontend/images/why-choose-us-img-three.jpg') }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="counter-area bg-color-e9f7fe pt-100 pb-70">
    <div class="container">
        <div class="row" data-cues="slideInUp">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="count-title">
                        <h2>
                            <span class="odometer" data-count="1.5">00</span>
                            <span class="target">K+</span>
                        </h2>
                        <h4>Government and Local Projects Implemented</h4>
                    </div>

                    <div class="counter-shape">
                        <img src="{{ asset('frontend/images/counter-shape-1.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="count-title">
                        <h2>
                            <span class="odometer" data-count="800">00</span>+
                        </h2>
                        <h4>Freelancing and Other Project</h4>
                    </div>

                    <div class="counter-shape shape-2">
                        <img src="{{ asset('frontend/images/counter-shape-2.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="count-title">
                        <h2>
                            <span class="odometer" data-count="200">00</span>
                            <span class="target">+</span>
                        </h2>
                        <h4>Total Clients</h4>
                    </div>

                    <div class="counter-shape">
                        <img src="{{ asset('frontend/images/counter-shape-1.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="count-title">
                        <h2>
                            <span class="odometer" data-count="12">00</span>
                            <span class="target">+</span>
                        </h2>
                        <h4>Successful programs</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="video-area bg-color-e9f7fe">
    <div class="container">
        <div class="video-content" data-cues="slideInUp">
            <img src="{{ asset('frontend/images/video-img.jpg') }}" alt="Image">

            <div class="video-button">
                <a href="https://www.youtube.com/watch?v=XOkyxOsUhXA" class="popup-youtube">
                    <i class="flaticon-play-button"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- End Team Area -->

<!-- Start Partner Area -->
<div class="partner-area bg-color ptb-100">
    <div class="container">
        <div class="partner-bg">
            <div class="row">
                <div class="partner-slider owl-carousel owl-theme">
                    <div class="partner-item">
                        <a href="about.html">
                            <img src="{{ asset('frontend/images/partner-1.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="about.html">
                            <img src="{{ asset('frontend/images/partner-2.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="about.html">
                            <img src="{{ asset('frontend/images/partner-3.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="about.html">
                            <img src="{{ asset('frontend/images/partner-4.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="about.html">
                            <img src="{{ asset('frontend/images/partner-5.png') }}" alt="Image">
                        </a>
                    </div>

                    <div class="partner-item">
                        <a href="about.html">
                            <img src="{{ asset('frontend/images/partner-3.png') }}" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start Testimonials Area -->
@include('components.testimonial.testimonial')
@endsection