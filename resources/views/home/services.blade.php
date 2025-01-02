@extends('userpanel')
@section('content')
<div class="page-title-area bg-4">
    <div class="container">
        <div class="page-title-content">
            <h2>Services</h2>

            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        Home 
                    </a>
                </li>

                <li class="active">Services</li>
            </ul>
        </div>
    </div>
</div>
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
@endsection