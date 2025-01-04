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
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <div class="sidebar-widget search">
                        <form method="get" action="{{ url('blog') }}" class="search-form">
                            <input type="hidden" name="category_id" id="category_id" value="{{ (!empty($blog_list['get_category_id']))?$blog_list['get_category_id']:'' }}" />
                            <input value="{{ (!empty($blog_list['get_search']))?$blog_list['get_search']:'' }}" class="form-control" name="search" id="search" placeholder="Search..." type="text">
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
                                <a onclick="searchCategory({{ $category->id }})" href="javascript://">{{ $category->title ?? '' }}</a>
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
<script>
    function searchCategory(id){
        var search = $('#search').val();
        window.location.href = "{{ url('blog') }}?category_id="+id+"&search="+search;
    }
</script>
@endsection