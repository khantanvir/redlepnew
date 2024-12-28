<!DOCTYPE html><html lang="zxx"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/scrollCue.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/logo/favicon.png') }}">
    <title>{{ (!empty($page_title))?$page_title:'' }}</title>
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="pl-spark-1 pl-spark-2"></div>
        </div>
    </div>
    <header class="header-area header-area-style-three">
        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                   <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('frontend/images/logo/redlep-logo.png') }}" alt="logo">
                            </a>
                        </div>

                        <div class="others-options-for-mobile-devices">
                            <ul class="header-left-content">
                                <li>
                                    <a class="custom-tel" href="https://api.whatsapp.com/send/?phone=8801732930067&text&type=phone_number&app_absent=0">
                                        <i class="ri-phone-fill"></i>
                                        Hotline:+880 173 2930 067
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desktop-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('frontend/images/logo/redlep-logo.png') }}" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about_us') }}" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Why Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <div class="others-options">
                                <ul class="header-left-content">
                                    <li>
                                        <a class="custom-tel" href="https://api.whatsapp.com/send/?phone=8801732930067&text&type=phone_number&app_absent=0">
                                            <i class="ri-phone-fill"></i>
                                            Whatsapp: +8801732930067
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    
    <footer class="footer-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="row" data-cues="slideInUp">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="Image">
                        </a>
                        <p>Redlep Software Company delivers innovative software solutions, including web and app development, digital transformation, and tailored tech strategies for business success.</p>
                        <ul class="social-icon">
                            <li>
                                <a href="https://www.facebook.com/redlep1/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/redlep/?viewAsMember=true" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/redlep/?viewAsMember=true" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/TanvirKhannst" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Useful link</h3>

                        <ul class="import-link">
                            <li>
                                <a href="case-details.html">Services</a>
                            </li>
                            <li>
                                <a href="about.html">Projects</a>
                            </li>
                            <li>
                                <a href="blog.html">Why Redlep</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="team.html">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Contact Us</h3>

                        <ul class="address">
                            <li class="location">
                                <i class="ri-map-pin-line"></i>
                                Mollah Tower, Uttar Badda. Dhaka, Bangladesh
                            </li>
                            <li>
                                <i class="ri-mail-line"></i>
                                <a href="/cdn-cgi/l/email-protection#5c34393030331c3e372e33723f3331"><span class="__cf_email__" data-cfemail="cda5a8a1a1a28dafa6bfa2e3aea2a0">[email�&nbsp;protected]</span></a>
                            </li>
                            <li>
                                <i class="ri-phone-line"></i>
                                <a href="https://api.whatsapp.com/send/?phone=8801732930067&text&type=phone_number&app_absent=0">+8801732930067</a>
                            </li>
                            <li class="location">
                                <i class="ri-time-line"></i>
                                Mon – Friday: 9:00am – 6:00pm
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Subscribe</h3>
                        <p>Don’t miss our future updates! Get Subscribed now!</p>

                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Your email address" name="EMAIL" required="" autocomplete="off">

                            <button class="send-btn" type="submit">
                                <i class="ri-send-plane-fill"></i>
                            </button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy-right-area bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>© Redlep is Proudly Owned by <a href="https://redlep.com/" target="_blank">Redlep</a></p>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li>
                            <a href="privacy-policy.html">Privacy policy</a>
                        </li>
                        <li>
                            <a href="terms-conditions.html">Terms conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="go-top">
        <i class="ri-arrow-up-s-fill"></i>
        <i class="ri-arrow-up-s-fill"></i>
    </div>
    <script data-cfasync="false" src="{{ asset('frontend/js/email-decode.min.js') }}"></script><script src="{{ asset('frontend/js/jquery.min.js' ) }}"></script> 
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/carousel-thumbs.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollCue.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/appear.min.js') }}"></script>
    <script src="{{ asset('frontend/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/progressbar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('frontend/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('frontend/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
</body></html>