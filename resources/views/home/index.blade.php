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
                                    <h1>Responsive web development.</h1>
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
                                    <img src="{{ asset('frontend/images/banner/web-development.jpg') }}" alt="Image">
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
                                    <h1>Custom app development.</h1>
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
                                    <img src="{{ asset('frontend/images/banner/app-development.jpg') }}" alt="Image">
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
                                    <img src="{{ asset('frontend/images/banner/digital-marketing.png') }}" alt="Image">
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
                    <h3>Planning and Analysis</h3>
                    <p>Define the purpose, goals and Analyze the necessary technologies</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-marketing-box icon-style">
                    <img src="{{ asset('frontend/images/icon-2.png') }}" alt="Image">
                    <h3>Design</h3>
                    <p>Create the visual layout of the website (UI/UX design).</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-marketing-box icon-style">
                    <img src="{{ asset('frontend/images/icon-3.png') }}" alt="Image">
                    <h3>Development</h3>
                    <p>Convert the design into a functioning website using modern technologies.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-marketing-box icon-style">
                    <img src="{{ asset('frontend/images/icon-4.png') }}" alt="Image">
                    <h3>Testing and Deployment</h3>
                    <p>Test the website for bugs, performance and security issues.</p>
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
                            <a href="javascript://">SEO optimization</a>
                        </h3>
                        <p>SEO optimization enhances website visibility, driving organic traffic and higher rankings.</p>
                    </div>

                    <div class="single-services box card-bg bg-1 bottom-content">
                        <h3>
                            <a href="javascript://">SEO optimization</a>
                        </h3>
                        <p>SEO optimization enhances website visibility, driving organic traffic and higher rankings. Key elements include keyword research, quality content, fast loading speeds, mobile-friendliness, and backlinks. Improve user experience and stay competitive with effective SEO strategies.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-content"></i>
                        <h3>
                            <a href="javascript://">Web Development</a>
                        </h3>
                        <p>Web development involves creating, building, and maintaining websites and web applications.</p>
                    </div>

                    <div class="single-services box card-bg bg-2 bottom-content">
                        <h3>
                            <a href="javascript://">Web Development</a>
                        </h3>
                        <p>Web development involves creating, building, and maintaining websites and web applications. It covers front-end design, back-end programming, responsive layouts, and performance optimization. Key technologies include HTML, CSS, JavaScript, and frameworks to deliver user-friendly, functional sites.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-attraction"></i>
                        <h3>
                            <a href="javascript://">Lead Generation</a>
                        </h3>
                        <p>Lead generation is the process of attracting and converting prospects into potential customers.</p>
                    </div>

                    <div class="single-services box card-bg bg-3 bottom-content">
                        <h3>
                            <a href="javascript://">Lead Generation</a>
                        </h3>
                        <p>Lead generation is the process of attracting and converting prospects into potential customers. It involves strategies like content marketing, email campaigns, social media outreach, and paid ads. By nurturing leads with value-driven interactions, businesses boost conversions and sales.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-web-analytics"></i>
                        <h3>
                            <a href="javascript://">App Development</a>
                        </h3>
                        <p>Mobile app development involves creating software for smartphones and tablets</p>
                    </div>

                    <div class="single-services box card-bg bg-4 bottom-content">
                        <h3>
                            <a href="javascript://">App Development</a>
                        </h3>
                        <p>Mobile app development involves creating software for smartphones and tablets, focusing on user experience, performance, and functionality. Using platforms like iOS and Android, it combines coding, design, and testing to deliver apps that solve problems, engage users, and drive business growth.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-video-marketing"></i>
                        <h3>
                            <a href="javascript://">Digital marketing</a>
                        </h3>
                        <p>Digital marketing promotes products or services online through channels</p>
                    </div>

                    <div class="single-services box card-bg bg-5 bottom-content">
                        <h3>
                            <a href="javascript://">Digital marketing</a>
                        </h3>
                        <p>Digital marketing promotes products or services online through channels like social media, search engines, email, and websites. It combines SEO, content marketing, PPC, and analytics to target audiences, drive traffic, boost engagement, and increase conversions effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services-box-wrap">
                    <div class="single-services box card-bg top-content">
                        <i class="flaticon-plan"></i>
                        <h3>
                            <a href="javascript://">UI / UX</a>
                        </h3>
                        <p>UI/UX design focuses on creating intuitive, engaging digital experiences.</p>
                    </div>

                    <div class="single-services box card-bg bg-6 bottom-content">
                        <h3>
                            <a href="javascript://">UI / UX</a>
                        </h3>
                        <p>UI/UX design focuses on creating intuitive, engaging digital experiences. UI (User Interface) ensures visually appealing layouts, while UX (User Experience) emphasizes seamless usability. Together, they enhance user satisfaction, drive engagement, and achieve business goals.</p>
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
                    <img src="{{ asset('frontend/images/team/tanvir.jpg') }}" alt="Image">

                    <div class="team-content">
                        <h3>Tanvir Nawaz Khan</h3>
                        <span>Founder & Project Manager</span>

                        <div class="team-social">
                            <a href="javascript:;" class="control">
                                <i class="ri-share-fill"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/tanvir.nawaz.566/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/tanvir-khan-71950872/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="{{ asset('frontend/images/team/sohel.jpg') }}" alt="Image">

                    <div class="team-content">
                        <h3>Firdaus Sohel</h3>
                        <span>Digital Marketor</span>

                        <div class="team-social">
                            <a href="javascript:;" class="control">
                                <i class="ri-share-fill"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/sabujav" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/md-firdaus-islam-6732b045/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
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
                        <h3>Shahdat Hossain Mamun</h3>
                        <span>UI/UX & Web Designer</span>

                        <div class="team-social">
                            <a href="javascript:;" class="control">
                                <i class="ri-share-fill"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li> --}}
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
                    <p>Redlep delivers innovative, scalable software solutions tailored to modern businesses. With a focus on quality, agility, and customer-centricity, we empower organizations to succeed through custom applications, enterprise tools, and cutting-edge technology.</p>

                    <ul>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Transparent</h3>
                            <p>Redlep ensures transparency through open communication, real-time updates, and collaborative workflows, building trust with every project.</p>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Proactive</h3>
                            <p>Redlep stays proactive by anticipating client needs, adapting to challenges, and delivering innovative solutions ahead of time.</p>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Affordable</h3>
                            <p>Redlep offers affordable software solutions without compromising quality, ensuring value-driven results for businesses of all sizes.</p>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <h3>Flexible</h3>
                            <p>Redlep delivers flexible solutions tailored to unique needs, adapting seamlessly to evolving business requirements and challenges.</p>
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
                        01) What is a Redlep digital agency?
                    </a>

                    <div class="accordion-content show">
                        <p>Redlep Digital Agency specializes in crafting innovative digital solutions to empower businesses in the online space. From stunning web designs to data-driven marketing strategies, we focus on enhancing brand visibility and driving results. Our team excels in web development, SEO, social media management, and content creation, ensuring every project reflects creativity, quality, and impact. Partner with Redlep to transform your digital presence.</p>
                    </div>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        02) What does Redlep Software Company specialize in?
                    </a>

                    <div class="accordion-content">
                        <p>Redlep Software Company specializes in delivering tailored software solutions, including web and mobile app development, custom enterprise software, and digital transformation services. We combine cutting-edge technology with creative strategies to help businesses thrive in a competitive digital landscape.</p>
                    </div>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        03) How does Redlep ensure project success?
                    </a>

                    <div class="accordion-content">
                        <p>Redlep ensures project success by collaborating closely with clients, understanding their unique needs, and delivering high-quality, scalable solutions. Our agile development process, coupled with a focus on innovation and efficiency, guarantees timely delivery and long-term satisfaction.</p>
                    </div>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        04) What industries does Redlep serve?
                    </a>

                    <div class="accordion-content">
                        <p>Redlep serves a wide range of industries, including healthcare, finance, education, e-commerce, and more. Our versatile team adapts to the specific needs of each sector, ensuring our solutions align perfectly with business goals.</p>
                    </div>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">
                        <i class="ri-add-line"></i>
                        05) Why choose Redlep Software Company?
                    </a>

                    <div class="accordion-content">
                        <p>Redlep Software Company stands out for its commitment to excellence, client-focused approach, and expertise in modern technologies. We deliver solutions that not only meet your requirements but also exceed expectations, empowering your business for the future.</p>
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
