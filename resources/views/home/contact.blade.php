@extends('userpanel')
@section('content')
<div class="page-title-area bg-8">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact</h2>

            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        Home 
                    </a>
                </li>

                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</div>
<section class="main-contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form">
                    <h2>Drop us a line</h2>
                    <form method="post" action="{{ URL::to('contact-store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" data-error="Please enter your name" placeholder="Name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" data-error="Please enter your email" placeholder="Email Address">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" data-error="Please enter your subject" placeholder="Subject">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" data-error="Write your message" placeholder="Message"></textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
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
            <div class="col-lg-4">
                <div class="contact-info">
                    <span class="top-title">Contact details</span>
                    <h2>Get in touch</h2>

                    <ul class="address">
                        <li class="location">
                            <span>Address</span>
                            Mollah Tower, Uttar Badda. Dhaka, Bangladesh
                        </li>
                        <li>
                            <span>Phone</span>
                            <a href="https://api.whatsapp.com/send/?phone=8801732930067&text&type=phone_number&app_absent=0">+8801732930067</a>
                        </li>
                        <li>
                            <span>Email</span>
                            <a href="mailto:info@redlep.com"><span>info@redlep.com</span></a>
                        </li>
                        <li class="location">
                            <span>Hours of operation</span>
                            Mon – Friday: 9:00am – 6:00pm
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0921674748113!2d90.4186264153627!3d23.806404392403732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b4c0c267b5%3A0x37fb2a7ae238bf38!2sMollah%20Tower%2C%20Dhaka%201211%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1694139706213!5m2!1sen!2sus"></iframe>
</div>
@endsection