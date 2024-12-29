@extends('userpanel')
@section('content')
<div class="page-title-area bg-15">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog details</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>

                <li class="active">Blog details</li>
            </ul>
        </div>
    </div>
</div>
<section class="blog-page-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-top-content">
                    <div class="blog-details-content content-1">
                        <div class="blog-details-img">
                            @if(!empty($blog->image))
                            <img src="{{ asset($blog->image) }}" alt="Image">
                            @else
                            <img src="{{ asset('frontend/images/blog-details.jpg') }}" alt="Image">
                            @endif
                        </div>
                    </div>

                    <div class="blog-details-content content-2">
                        <ul>
                            <li>
                                <i class="ri-user-line"></i>
                                <a href="blog-details.html">{{ $blog->author_name ?? 'Admin' }}</a>
                            </li>
                            <li>
                                <i class="ri-calendar-line"></i>
                                {{ (!empty($blog->created_at)) ? date('F d Y', strtotime($blog->created_at)):'' }}
                            </li>
                            <li>
                                <i class="ri-question-answer-line"></i>
                                <a href="blog-details.html">No comments</a>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-details-content content-3">
                        <h3>{{ $blog->title ?? '' }}</h3>
                    </div>

                    <div class="blog-details-content content-4">
                        {!! $blog->long_description ?? '' !!}
                    </div>

                    <div class="blog-details-content content-6">
                        @php
                            $tags = explode(',', $blog->alt_tag);
                        @endphp
                        <ul>
                            <li class="tags">
                                <span>Post tags:</span>
                            </li>
                            @forelse ($tags as $tag)
                            <li>
                                <a href="javascript://">{{ $tag ?? 'No tags' }}</a>
                            </li>
                            @empty 
                            @endforelse
                        </ul>
                    </div>

                    <div class="blog-details-content content-9">
                        <div class="comments">
                            <h3>Comments (02)</h3>

                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/images/comments-img-1.jpg') }}" alt="Image">
                                    <h3>Janie Abram</h3>
                                    <span>CEO &amp; Founder</span>

                                    <p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco laboris</p>

                                    <a href="blog-details.html">
                                        <i class="bx bxs-share"></i>
                                        Reply
                                    </a>
                                </li>

                                <li>
                                    <img src="{{ asset('frontend/images/comments-img-2.jpg') }}" alt="Image">
                                    <h3>Thomas Brand</h3>
                                    <span>Manager</span>

                                    <p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco laboris</p>

                                    <a href="blog-details.html">
                                        <i class="bx bxs-share"></i>
                                        Reply
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog-details-content content-8">
                    <h3>Leave a reply</h3>

                        <form>
                            <p>Your email address will not be published. Required fields are marked*</p>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email*">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="website" id="website" class="form-control" placeholder="Your Website Link*">
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" rows="8" placeholder="Comment"></textarea>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Post a comment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <div class="sidebar-widget search">
                        <form class="search-form">
                            <input class="form-control" name="search" placeholder="Search..." type="text">
                            <button class="search-button" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>	
                    </div>

                    <div class="sidebar-widget categories">
                        <h3>Categories</h3>

                        <ul>
                            @forelse ($categories as $category)
                            <li>
                                <a href="#">{{ $category->title ?? '' }}</a>
                            </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>

                    <div class="sidebar-widget recent-post">
                        <h3 class="widget-title">Popular posts</h3>
                        <ul>
                            <li>
                                <a href="blog-details.html">
                                    Social media affect SEO?
                                    <img src="{{ asset('frontend/images/recent-post-1.jpg') }}" alt="Image">
                                </a>
                                <span>March 08, 2024</span>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    Agency blogs you should read
                                    <img src="{{ asset('frontend/images/recent-post-2.jpg') }}" alt="Image">
                                </a>
                                <span>March 07, 2024</span>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    Top marketing tips
                                    <img src="{{ asset('frontend/images/recent-post-3.jpg') }}" alt="Image">
                                </a>
                                <span>March 06, 2024</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget tags mb-0">
                        <h3>Popular tags</h3>

                        <ul>
                            <li>
                                <a href="blog.html">Business</a>
                            </li>
                            <li>
                                <a href="blog.html">Branding</a>
                            </li>
                            <li>
                                <a href="blog.html">Freight</a>
                            </li>
                            <li>
                                <a href="blog.html">Marketing</a>
                            </li>
                            <li>
                                <a href="blog.html">SEO</a>
                            </li>
                            <li>
                                <a href="blog.html">Web</a>
                            </li>
                            <li>
                                <a href="blog.html">Digital</a>
                            </li>
                            <li>
                                <a href="blog.html">Planing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection