@extends('userpanel')
@section('content')
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>About</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>

                <li class="active">About</li>
            </ul>
        </div>
    </div>
</div>
<section class="about-us-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img-three before-style">
                    <img src="{{ asset('frontend/images/about-img-3.jpg') }}" alt="Image">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-content about-content-style-two mb-0">
                    <span>About us</span>
                    <h2>For 25 years we have been employing creative digital marketing strategies that achieve outstanding results.</h2>
                    <h3>We divide our working process into 4 ways</h3>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    <h4>Planing</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla incidunt quo corrupti.</p>
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    <h4>Optimizing</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla incidunt quo corrupti.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    <h4>Research</h4>	
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla incidunt quo corrupti.</p>
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    <h4>Results</h4>	
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla incidunt quo corrupti.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
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
<!-- End Why CHoose Us Area -->

<!-- Start Counter Area -->
<section class="counter-area bg-color-e9f7fe pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="count-title">
                        <h2>
                            <span class="odometer" data-count="1">00</span> 
                            <span class="target">K+</span>
                        </h2>
                        <h4>People in the city</h4>
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
                            <span class="odometer" data-count="400">00</span> 
                        </h2>
                        <h4>Square of city</h4>
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
                            <span class="odometer" data-count="150">00</span> 
                            <span class="target">+</span>
                        </h2>
                        <h4>Year of foundation</h4>
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
<!-- End Counter Area -->

<!-- Start Video Area -->
<div class="video-area bg-color-e9f7fe">
    <div class="container">
        <div class="video-content">
            <img src="{{ asset('frontend/images/video-img.jpg') }}" alt="Image">

            <div class="video-button">
                <a href="https://www.youtube.com/watch?v=qt_NZdXbksM" class="popup-youtube">
                    <i class="flaticon-play-button"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Video Area -->

<!-- Start Team Area -->
<section class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Team of specialists</span>
            <h2>We are a team of marketers</h2>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="{{ asset('frontend/images/team-1.jpg') }}" alt="Image">

                    <div class="team-content">
                        <h3>Chris Harrice</h3>
                        <span>Managing director</span>

                        <div class="team-social">
                            <a href="javascript:;" class="control">
                                <i class="ri-share-fill"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="{{ asset('frontend/images/team-2.jpg') }}" alt="Image">

                    <div class="team-content">
                        <h3>Rachel Patrina</h3>
                        <span>Commercial director</span>

                        <div class="team-social">
                            <a href="javascript:;" class="control">
                                <i class="ri-share-fill"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="{{ asset('frontend/images/team-3.jpg') }}" alt="Image">

                    <div class="team-content">
                        <h3>John Marc</h3>
                        <span>Marketing manager</span>

                        <div class="team-social">
                            <a href="javascript:;" class="control">
                                <i class="ri-share-fill"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<section class="testimonials-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Testimonials</span>
            <h2>What our customers say</h2>
        </div>

        <div class="testimonials-slider-bg">
            <div class="testimonials-slider owl-carousel owl-theme">
                <div class="single-testimonials">
                    <i class="ri-double-quotes-r"></i>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”</p>

                    <div class="testimonials-img">
                        <img src="{{ asset('frontend/images/testimonials-1.jpg') }}" alt="Image">
                        <h3>Alen Meair</h3>
                        <span>Developer</span>
                    </div>
                </div>

                <div class="single-testimonials">
                    <i class="ri-double-quotes-r"></i>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”</p>

                    <div class="testimonials-img">
                        <img src="{{ asset('frontend/images/testimonials-2.jpg') }}" alt="Image">
                        <h3>Axon Detos</h3>
                        <span>CEO</span>
                    </div>
                </div>

                <div class="single-testimonials">
                    <i class="ri-double-quotes-r"></i>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”</p>
                    
                    <div class="testimonials-img">
                        <img src="{{ asset('frontend/images/testimonials-3.jpg') }}" alt="Image">
                        <h3>John Dona</h3>
                        <span>Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection