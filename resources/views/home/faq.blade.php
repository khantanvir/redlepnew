@extends('userpanel')
@section('content')
<div class="page-title-area bg-9">
    <div class="container">
        <div class="page-title-content">
            <h2>FAQ</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>

                <li class="active">FAQ</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start FAQ Area -->
<section class="faq-area bg-color-e9f7fe ptb-100">
    <div class="container">
        <div class="section-title" data-cues="slideInUp">
            <h2>Find answers to your questions</h2>
            <p>Redlep specializes in innovative software solutions, offering web and app development tailored to transform and grow your business.</p>
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
<!-- End FAQ Area -->

<!-- Start Contact Area -->
<section class="main-contact-area faq-contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Message us</span>
            <h2>Do you have any questions</h2>
        </div>
        
        <div class="contact-form">
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email Address">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" required="" data-error="Write your message" placeholder="Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            <span>Send message</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection