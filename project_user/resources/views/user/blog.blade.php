@extends('layouts.user')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Picnic</a></li>
                                <li><a href="#">Model</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            <div class="recent-blog">
                                @foreach ($recent_blog as $v_recent_blog)
                                    @foreach ($category_blog as $v_category_blog)
                                        @if ($v_recent_blog->categoryblog_id == $v_category_blog->id)
                                            <a href="{{ url("user/blogdetail/1") }}" class="rb-item">
                                                <div class="rb-pic">
                                                    <img src="{{ $v_recent_blog->img_recent_blog }}" alt="">
                                                </div>
                                                <div class="rb-text">
                                                    <h6>{{ $v_recent_blog->title_recent_blog }}</h6>
                                                    <p>{{ $v_category_blog->title_category_blog }} <span>- {{ $v_recent_blog->post_time }}</span></p>
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Product Tags</h4>
                            <div class="tag-item">
                                <a href="#">Towel</a>
                                <a href="#">Shoes</a>
                                <a href="#">Coat</a>
                                <a href="#">Dresses</a>
                                <a href="#">Trousers</a>
                                <a href="#">Men's hats</a>
                                <a href="#">Backpack</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        @foreach ($blog as $v_blog)
                            @foreach ($category_blog as $v_category_blog)
                                @if ($v_blog->categoryblog_id == $v_category_blog->id)
                                <div class="col-lg-6 col-sm-6">
                                    <div class="blog-item">
                                            <div class="bi-pic">
                                                <img src="{{ asset("img/blog/$v_blog->img_blog") }}" alt="">
                                            </div>
                                            <div class="bi-text">
                                                <a href='{{ url("user/blogdetails/$v_blog->id") }}'>
                                                    <h4>{{ $v_blog->title_blog }}</h4>
                                                </a>
                                                <p>{{ $v_category_blog->title_category_blog }} <span>- {{ $v_blog->created_at }}</span></p>
                                            </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection