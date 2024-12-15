@extends('userpanel')
@section('content')
<!-- Start Hero Slider Area -->
<section class="hero-slider-area">
    <div class="hero-slider owl-theme owl-carousel" data-slider-id="1">
        <div class="hero-slider-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="hero-slider-content" data-cues="slideInUp" data-group="images">
                                    <h1>Professional and responsive web development.</h1>
                                    <p>Unlock your business potential with professional, responsive, and customized website development. We create user-friendly, secure, and modern websites.</p>

                                    <div class="slider-btn">
                                        <a href="{{ url('about-us') }}" class="default-btn">
                                            Learn more
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="slider-img">
                                    <img src="{{ asset('frontend/images/slider-img-1.jpg') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-slider-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="hero-slider-content">
                                    <h1>Custom, high-performance app development.</h1>
                                    <p>Empower your business with innovative, user-friendly, and high-performance app development. We deliver custom solutions tailored to your needs.</p>
                                    <div class="slider-btn">
                                        <a href="{{ url('about-us') }}" class="default-btn">
                                            Learn more
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="slider-img">
                                    <img src="{{ asset('frontend/images/slider-img-2.jpg') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-slider-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="hero-slider-content">
                                    <h1>Effective digital marketing for growth.</h1>
                                    <p>Boost your business with targeted, creative, and results-driven digital marketing strategies. We help you reach the right audience and achieve success.</p>
                                    <div class="slider-btn">
                                        <a href="{{ url('about-us') }}" class="default-btn">
                                            Learn more
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="slider-img">
                                    <img src="{{ asset('frontend/images/slider-img-3.jpg') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Carousel Thumbs -->
    <div class="thumbs-wrap">
        <div class="owl-thumbs hero-slider-thumb" data-slider-id="1">
            <div class="owl-thumb-item">
                <span>01</span>
            </div>

            <div class="owl-thumb-item">
                <span>02</span>
            </div>

            <div class="owl-thumb-item">
                <span>03</span>
            </div>
        </div>
    </div>
    <!-- End Carousel Thumbs -->
</section>
<section class="marketing-area pt-100 pb-70">
    <div class="container">
        <div class="section-title" data-cues="slideInUp">
            <span>Our Development  process</span>
            <h2>Step-by-step web development for modern, responsive websites.</h2>
        </div>

        <div class="row" data-cues="slideInUp">
            <div class="col-lg-3 col-sm-6">
                <div class="single-marketing-box icon-style">
                    <img src="{{ asset('frontend/images/icon-1.png') }}" alt="Image">
                    <h3>Marketing research</h3>
                    <p>Lorem consectetur ipsum sit dolor sit amet consectetur adipisicing elit</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-marketing-box icon-style">
                    <img src="{{ asset('frontend/images/icon-2.png') }}" alt="Image">
                    <h3>Advertising ideas</h3>
                    <p>Lorem consectetur ipsum sit dolor sit amet consectetur adipisicing elit</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-marketing-box icon-style">
                    <img src="{{ asset('frontend/images/icon-3.png') }}" alt="Image">
                    <h3>Social media marketing</h3>
                    <p>Lorem consectetur ipsum sit dolor sit amet consectetur adipisicing elit</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-marketing-box icon-style">
                    <img src="{{ asset('frontend/images/icon-4.png') }}" alt="Image">
                    <h3>Get more followers</h3>
                    <p>Lorem consectetur ipsum sit dolor sit amet consectetur adipisicing elit</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-us-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5" data-cues="slideInUp">
                <div class="about-img-three">
                    <img src="{{ asset('frontend/images/about-img-3.jpg') }}" alt="Image">

                    <div class="about-shape-3">
                        <img src="{{ asset('frontend/images/about-shape-3.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-content about-content-style-two" data-cues="slideInUp">
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

                    <a href="about.html" class="default-btn">
                        View more info
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-area bg-color-e9f7fe pt-100 pb-70">
    <div class="container">
        <div class="section-title section-title-mb" data-cues="slideInUp">
            <span>What we do</span>
            <h2>What services we offer</h2>
        </div>

        <div class="row" data-cues="slideInUp">
            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-optimization"></i>
                        <h3>
                            <a href="services-details.html">SEO optimization</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ut consequuntur rerum voluptatum, dignissimos offic autem dolor repudiandae</p>
                    </div>

                    <div class="single-services box card-bg bg-1 bottom-content">
                        <h3>
                            <a href="services-details.html">SEO optimization</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eveniet deserunt voluptatibus mollitia hic, cum praesentium similique ipsa veniam quidem obcaecati ut expedita esse eaque, quam debitis. Eum, odit laudantium  amet consectetur.</p>

                        <a href="services-details.html" class="default-btn">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-content"></i>
                        <h3>
                            <a href="services-details.html">Content marketing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ut consequuntur rerum voluptatum, dignissimos offic autem dolor repudiandae</p>
                    </div>

                    <div class="single-services box card-bg bg-2 bottom-content">
                        <h3>
                            <a href="services-details.html">Content marketing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eveniet deserunt voluptatibus mollitia hic, cum praesentium similique ipsa veniam quidem obcaecati ut expedita esse eaque, quam debitis. Eum, odit laudantium  amet consectetur.</p>

                        <a href="services-details.html" class="default-btn">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-attraction"></i>
                        <h3>
                            <a href="services-details.html">Lead magnet creation</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ut consequuntur rerum voluptatum, dignissimos offic autem dolor repudiandae</p>
                    </div>

                    <div class="single-services box card-bg bg-3 bottom-content">
                        <h3>
                            <a href="services-details.html">Lead magnet creation</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eveniet deserunt voluptatibus mollitia hic, cum praesentium similique ipsa veniam quidem obcaecati ut expedita esse eaque, quam debitis. Eum, odit laudantium  amet consectetur.</p>

                        <a href="services-details.html" class="default-btn">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-web-analytics"></i>
                        <h3>
                            <a href="services-details.html">Web analytics</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ut consequuntur rerum voluptatum, dignissimos offic autem dolor repudiandae</p>
                    </div>

                    <div class="single-services box card-bg bg-4 bottom-content">
                        <h3>
                            <a href="services-details.html">Web analytics</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eveniet deserunt voluptatibus mollitia hic, cum praesentium similique ipsa veniam quidem obcaecati ut expedita esse eaque, quam debitis. Eum, odit laudantium  amet consectetur.</p>

                        <a href="services-details.html" class="default-btn">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-video-marketing"></i>
                        <h3>
                            <a href="services-details.html">Video marketing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ut consequuntur rerum voluptatum, dignissimos offic autem dolor repudiandae</p>
                    </div>

                    <div class="single-services box card-bg bg-5 bottom-content">
                        <h3>
                            <a href="services-details.html">Video marketing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eveniet deserunt voluptatibus mollitia hic, cum praesentium similique ipsa veniam quidem obcaecati ut expedita esse eaque, quam debitis. Eum, odit laudantium  amet consectetur.</p>

                        <a href="services-details.html" class="default-btn">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-plan"></i>
                        <h3>
                            <a href="services-details.html">Strategy &amp; planning</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ut consequuntur rerum voluptatum, dignissimos offic autem dolor repudiandae</p>
                    </div>

                    <div class="single-services box card-bg bg-6 bottom-content">
                        <h3>
                            <a href="services-details.html">Strategy &amp; planning</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eveniet deserunt voluptatibus mollitia hic, cum praesentium similique ipsa veniam quidem obcaecati ut expedita esse eaque, quam debitis. Eum, odit laudantium  amet consectetur.</p>

                        <a href="services-details.html" class="default-btn">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape shape-1">
        <img src="{{ asset('frontend/images/shape-4.png') }}" alt="Image">
    </div>
    <div class="shape shape-2">
        <img src="{{ asset('frontend/images/shape-4.png') }}" alt="Image">
    </div>
</section>
<section class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title" data-cues="slideInUp">
            <span>Team of specialists</span>
            <h2>We are a team of marketers</h2>
        </div>

        <div class="row justify-content-md-center" data-cues="slideInUp">
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
<section class="case-studies-area bg-color-e9f7fe pt-100 pb-70">
    <div class="container-fluid p-0">
        <div class="section-title" data-cues="slideInUp">
            <span>Case studies</span>
            <h2>Our marketing case studies</h2>
        </div>

        <div class="case-slider owl-carousel owl-theme">
            <div class="single-case">
                <a href="case-details.html">
                    <img src="{{ asset('frontend/images/case-4.jpg') }}" alt="Image">
                </a>

                <div class="case-content">
                    <h3>
                        <a href="case-details.html">
                            Content marketing case studies
                        </a>
                    </h3>
                </div>
            </div>

            <div class="single-case">
                <a href="case-details.html">
                    <img src="{{ asset('frontend/images/case-5.jpg') }}" alt="Image">
                </a>

                <div class="case-content">
                    <h3>
                        <a href="case-details.html">
                            Content SEO marketing case studies
                        </a>
                    </h3>
                </div>
            </div>

            <div class="single-case">
                <a href="case-details.html">
                    <img src="{{ asset('frontend/images/case-6.jpg') }}" alt="Image">
                </a>

                <div class="case-content">
                    <h3>
                        <a href="case-details.html">
                            Content digital marketing case studies
                        </a>
                    </h3>
                </div>
            </div>

            <div class="single-case">
                <a href="case-details.html">
                    <img src="{{ asset('frontend/images/case-5.jpg') }}" alt="Image">
                </a>

                <div class="case-content">
                    <h3>
                        <a href="case-details.html">
                            Content google analysis case studies
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="why-choose-us-content" data-cues="slideInUp">
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
                <div class="why-choose-us-img" data-cues="slideInUp">
                    <img src="{{ asset('frontend/images/why-choose-us-img-three.jpg') }}" alt="Image">

                    <div class="why-choose-us-shape">
                        <img src="{{ asset('frontend/images/why-choose-us-shape-three.png') }}" alt="Image">
                    </div>
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
<div class="video-area bg-color-e9f7fe">
    <div class="container">
        <div class="video-content" data-cues="slideInUp">
            <img src="{{ asset('frontend/images/video-img.jpg') }}" alt="Image">

            <div class="video-button">
                <a href="https://www.youtube.com/watch?v=qt_NZdXbksM" class="popup-youtube">
                    <i class="flaticon-play-button"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<section class="testimonials-area pt-100 pb-70">
    <div class="container">
        <div class="section-title" data-cues="slideInUp">
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

            <div class="shape shape-1">
                <img src="{{ asset('frontend/images/shape-1.png') }}" alt="Image">
            </div>
            <div class="shape shape-2">
                <img src="{{ asset('frontend/images/shape-2.png') }}" alt="Image">
            </div>
        </div>
    </div>
</section>
<section class="faq-area bg-color-e9f7fe ptb-100">
    <div class="container">
        <div class="section-title" data-cues="slideInUp">
            <h2>Find answers to your questions</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eveniet quod mollitia asperiores ullam dolor corporis. vero nemo consectetur</p>
        </div>

        <div class="faq-accordion">
            <ul class="accordion" data-cues="slideInUp">
                <li class="accordion-item">
                    <a class="accordion-title active" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        01) What is a digital marketing agency?
                    </a>

                    <div class="accordion-content show">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dignissimos veniam provident voluptates deserunt similique aut quisquam pariatur aperiam in alias voluptatibus quis architecto eius unde, nam minima id delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eius reprehenderit! Laboriosam obcaecati maiores placeat beatae a quis illum quaerat provident animi molestias, dolorem quo praesentium neque eum, fugiat tenetur unde, nam minima id</p>
                    </div>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        02) What’s the biggest mistake digital marketers make?
                    </a>

                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dignissimos veniam provident voluptates deserunt similique aut quisquam pariatur aperiam in alias voluptatibus quis architecto eius unde, nam minima id delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eius reprehenderit! Laboriosam obcaecati maiores placeat beatae a quis illum quaerat provident animi molestias, dolorem quo praesentium neque eum, fugiat tenetur unde, nam minima id</p>
                    </div>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        03) What does a digital marketer do?
                    </a>

                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dignissimos veniam provident voluptates deserunt similique aut quisquam pariatur aperiam in alias voluptatibus quis architecto eius unde, nam minima id delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eius reprehenderit! Laboriosam obcaecati maiores placeat beatae a quis illum quaerat provident animi molestias, dolorem quo praesentium neque eum, fugiat tenetur unde, nam minima id</p>
                    </div>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        04) How does digital marketing work?
                    </a>

                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dignissimos veniam provident voluptates deserunt similique aut quisquam pariatur aperiam in alias voluptatibus quis architecto eius unde, nam minima id delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eius reprehenderit! Laboriosam obcaecati maiores placeat beatae a quis illum quaerat provident animi molestias, dolorem quo praesentium neque eum, fugiat tenetur unde, nam minima id</p>
                    </div>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        05) What are typical roles in digital marketing?
                    </a>

                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dignissimos veniam provident voluptates deserunt similique aut quisquam pariatur aperiam in alias voluptatibus quis architecto eius unde, nam minima id delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eius reprehenderit! Laboriosam obcaecati maiores placeat beatae a quis illum quaerat provident animi molestias, dolorem quo praesentium neque eum, fugiat tenetur unde, nam minima id</p>
                    </div>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        06) How much does social media marketing cost?
                    </a>

                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dignissimos veniam provident voluptates deserunt similique aut quisquam pariatur aperiam in alias voluptatibus quis architecto eius unde, nam minima id delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, eius reprehenderit! Laboriosam obcaecati maiores placeat beatae a quis illum quaerat provident animi molestias, dolorem quo praesentium neque eum, fugiat tenetur unde, nam minima id</p>
                    </div>
                </li>
            </ul>

            <div class="shape shape-1">
                <img src="{{ asset('frontend/images/faq-shape.png') }}" alt="Image">
            </div>
            <div class="shape shape-2">
                <img src="{{ asset('frontend/images/faq-shape.png') }}" alt="Image">
            </div>
        </div>
    </div>
</section>
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title" data-cues="slideInUp">
            <span>Latest blog</span>
            <h2>Learn more from our latest blog</h2>
        </div>

        <div class="row justify-content-md-center" data-cues="slideInUp">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html">
                        <img src="{{ asset('frontend/images/blog-4.jpg') }}" alt="Image">
                    </a>
                    <span>
                        <i class="ri-calendar-line"></i>
                        1 March, 2024
                    </span>
                    <h3>
                        <a href="blog-details.html">
                            What is a digital marketing strategy?
                        </a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore consectetur.</p>

                    <a href="blog-details.html" class="default-btn">
                        Learn more
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html">
                        <img src="{{ asset('frontend/images/blog-5.jpg') }}" alt="Image">
                    </a>
                    <span>
                        <i class="ri-calendar-line"></i>
                        2 March, 2024
                    </span>
                    <h3>
                        <a href="blog-details.html">
                            Top tips to get more  customers
                        </a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore consectetur.</p>

                    <a href="blog-details.html" class="default-btn">
                        Learn more
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html">
                        <img src="{{ asset('frontend/images/blog-6.jpg') }}" alt="Image">
                    </a>
                    <span>
                        <i class="ri-calendar-line"></i>
                        3 March, 2024
                    </span>
                    <h3>
                        <a href="blog-details.html">
                            What is business analysis?
                        </a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore consectetur.</p>

                    <a href="blog-details.html" class="default-btn">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
