@extends('userpanel')
@section('content')
<div class="page-title-area bg-14">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog</h2>
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        Home 
                    </a>
                </li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
</div>
<section class="blog-page-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @forelse ($blog_list['blog_list'] as $list)
                    <div class="col-lg-12 col-md-6">
                        <div class="single-blog">
                            <a href="{{ url('blog-details/'.$list->slug) }}">
                                @if(!empty($list->image))
                                <img src="{{ asset($list->image) }}" alt="Image">
                                @else
                                <img src="{{ asset('frontend/images/blog-4.jpg') }}" alt="Image">
                                @endif
                            </a>
                            <span>
                                <i class="ri-calendar-line"></i>
                                {{ (!empty($list->created_at)) ? date('F d Y', strtotime($list->created_at)):'' }}
                            </span>
                            <h3>
                                <a href="{{ url('blog-details/'.$list->slug) }}">
                                    {{ $list->title ?? '' }}
                                </a>
                            </h3>
                            <p>{{ App\Models\Blog\Blog::stringSubstrLimit($list->long_description,355) }}</p>

                            <a href="{{ url('blog-details/'.$list->slug) }}" class="read-more">
                                Learn more
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
                    

                    <div class="col-12">
                        <div class="pagination-area">
                            {{ $blog_list['blog_list']->links() }}
                        </div>
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
                            @forelse ($popular_blogs as $pblog)
                            <li>
                                <a href="{{ url('blog-details/'.$pblog->slug) }}">
                                    {{ App\Models\Blog\Blog::stringSubstrLimit($pblog->title,29) }}
                                    @if(!empty($pblog->image))
                                    <img style="width: 80px; height: 65px;" src="{{ asset($pblog->image) }}" alt="Image">
                                    @else
                                    <img src="{{ asset('frontend/images/recent-post-1.jpg') }}" alt="Image">
                                    @endif
                                </a>
                                <span>{{ (!empty($pblog->created_at)) ? date('F d Y', strtotime($pblog->created_at)):'' }}</span>
                            </li>
                            @empty
                                
                            @endforelse
                            
                        </ul>
                    </div>

                    <div class="sidebar-widget tags mb-0">
                        <h3>Popular tags</h3>

                        <ul>
                            @forelse ($unique_tags as $tag)
                            <li>
                                <a href="javascript://">{{ $tag ?? '' }}</a>
                            </li>
                            @empty
                                
                            @endforelse
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection