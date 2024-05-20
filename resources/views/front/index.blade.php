@extends('front.master')

@section('content')
<!-- main-area -->
<main class="fix">

    <!-- ad-banner-area -->
    <div class="ad-banner-area pt-30 pb-30">
        <div class="container">
            <div class="ad-banner-img ad-banner-img-two text-center advertisement-banner">
                {{--  --}}
                <div class="pharverse-fixed-super" id="pharverse-fixed-super">
                    <span class="pharverse-close-button-super" id="pharverse-close-super-button" onclick="closeSuperBtn()" title="close"> × </span>
                        <a href="#" target="_blank" rel="nofollow">
                            <img src="{{url('/')}}/uploads/ads/ad-footer.gif" alt="Footer Ad" title="Footer Ad" border="0" >
                        </a></div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
    <!-- ad-banner-area-end -->

    <!-- banner-post-area -->
    <section class="banner-post-area-four pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="banner-post-four">
                        <div class="banner-post-thumb-four">
                            <a href="blog-details.html"><img src="https://www.africanpharmaceuticalreview.com/wp-content/uploads/2024/04/2024-04-22_AI-drugs.jpg" alt=""></a>
                        </div>
                        <div class="banner-post-content-four">
                            <a href="blog.html" class="post-tag">News</a>
                            <h2 class="post-title bold-underline"><a href="blog-details.html">Using AI to tailor drugs for Africa</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-user"></i>by<a href="author.html">Bevin Likuyani</a></li>
                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-post-four">
                        <div class="banner-post-thumb-four">
                            <a href="blog-details.html"><img src="https://www.africanpharmaceuticalreview.com/wp-content/uploads/2024/04/Untitled-design-15-600x600.jpg" alt=""></a>
                        </div>
                        <div class="banner-post-content-four">
                            <a href="blog.html" class="post-tag">Article</a>
                            <h2 class="post-title bold-underline"><a href="blog-details.html">Nigeria sets pace with rollout of new meningitis vaccine</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-user"></i>by<a href="author.html">Bevin Likuyani</a></li>
                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-post-four">
                        <div class="banner-post-thumb-four">
                            <a href="blog-details.html"><img src="https://www.africanpharmaceuticalreview.com/wp-content/uploads/2024/04/SAHPRA-RwandaFDA-MoU-600x600.jpg" alt=""></a>
                        </div>
                        <div class="banner-post-content-four">
                            <a href="blog.html" class="post-tag">News</a>
                            <h2 class="post-title bold-underline"><a href="blog-details.html">SAHPRA signs MoU with Rwanda Food and Drug Authority</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-user"></i>by<a href="author.html">Bevin Likuyani</a></li>
                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-post-area-end -->

    <!-- ad-banner-area -->
    <div class="ad-banner-area">
        <div class="container">
            <div class="ad-banner-img ad-banner-img-two text-center">
                <a href="#">
                    <img src="{{asset('theme/assets/img/images/advertisement10.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <!-- ad-banner-area-end -->

    <!-- recent-post-area -->
    <section class="recent-post-area-two pt-60 pb-60">
        <div class="container">
            <div class="recent-post-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-70">
                        <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <h2 class="title">Recent Posts</h2>
                            </div>
                            <div class="view-all-btn">
                                <a href="blog.html" class="link-btn">View All
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                            <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                            <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="section-title-line"></div>
                        </div>
                        <div class="popular-post-item-wrap">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post02.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">Articles</a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post03.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">Articles</a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post04.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                                            <h2 class="post-title"><a href="blog-details.html">Racing Games Browned Butte roadert Cookies Daily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post05.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">Interviews</a>
                                            <h2 class="post-title"><a href="blog-details.html">Racing Games Browned Butte roadert Cookies Daily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="sidebar-wrap no-sticky">
                            <div class="sidebar-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest-tab-pane" type="button" role="tab" aria-controls="latest-tab-pane" aria-selected="true">Latest News</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured-tab-pane" type="button" role="tab" aria-controls="featured-tab-pane" aria-selected="false">Featured</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="latest-tab-pane" role="tabpanel" aria-labelledby="latest-tab" tabindex="0">
                                        <div class="sidebar-widget sidebar-widget-two">
                                            <div class="popular-post popular-post-two">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_latest_post01.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">Interviews</a>
                                                    <h2 class="post-title"><a href="blog-details.html">Communication For Everyday Meetings</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post popular-post-two">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_latest_post02.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">News</a>
                                                    <h2 class="post-title"><a href="blog-details.html">Building Your Security Strategy</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post popular-post-two">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_latest_post03.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">Articles</a>
                                                    <h2 class="post-title"><a href="blog-details.html">Phone Numbers For Web Designers</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post popular-post-two">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_latest_post04.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">News</a>
                                                    <h2 class="post-title"><a href="blog-details.html">The Butter Chocolate Cookies Daily</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="featured-tab-pane" role="tabpanel" aria-labelledby="featured-tab" tabindex="0">
                                        <div class="sidebar-widget sidebar-widget-two">
                                            <div class="popular-post popular-post-two">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_latest_post03.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">Articles</a>
                                                    <h2 class="post-title"><a href="blog-details.html">Phone Numbers For Web Designers</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post popular-post-two">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_latest_post04.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">News</a>
                                                    <h2 class="post-title"><a href="blog-details.html">The Butter Chocolate Cookies Daily</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post popular-post-two">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_latest_post01.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">Interviews</a>
                                                    <h2 class="post-title"><a href="blog-details.html">Communication For Everyday Meetings</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post popular-post-two">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_latest_post02.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">News</a>
                                                    <h2 class="post-title"><a href="blog-details.html">Building Your Security Strategy</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- recent-post-area-end -->

    <!-- trending-post-area -->
    <section class="trending-post-area-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title white-title">
                            <h2 class="title">Trending News</h2>
                        </div>
                        <div class="view-all-btn view-all-btn-two">
                            <a href="blog.html" class="link-btn">View All
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="section-title-line black-line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="overlay-post-five">
                        <div class="overlay-post-thumb-five">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_trending_post01.jpg')}}" alt=""></a>
                        </div>
                        <div class="overlay-post-content-five">
                            <a href="blog.html" class="post-tag post-tag-three">Interviews</a>
                            <h2 class="post-title bold-underline"><a href="blog-details.html">The Growing Need For Effective Password Management</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overlay-post-five">
                        <div class="overlay-post-thumb-five">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_trending_post02.jpg')}}" alt=""></a>
                        </div>
                        <div class="overlay-post-content-five">
                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                            <h2 class="post-title bold-underline"><a href="blog-details.html">Write Better CSS By Borrowing Ideas From JavaScript Functions</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="horizontal-post-three">
                        <div class="horizontal-post-thumb-three">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_trending_post03.jpg')}}" alt=""></a>
                        </div>
                        <div class="horizontal-post-content-three">
                            <a href="blog.html" class="post-tag post-tag-three">Articles</a>
                            <h2 class="post-title"><a href="blog-details.html">Accessible Target Sizes Cheatsheet</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="horizontal-post-three">
                        <div class="horizontal-post-thumb-three">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_trending_post04.jpg')}}" alt=""></a>
                        </div>
                        <div class="horizontal-post-content-three">
                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                            <h2 class="post-title"><a href="blog-details.html">Color Mechanics In UI Kits</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="horizontal-post-three">
                        <div class="horizontal-post-thumb-three">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_trending_post05.jpg')}}" alt=""></a>
                        </div>
                        <div class="horizontal-post-content-three">
                            <a href="blog.html" class="post-tag post-tag-three">Articles</a>
                            <h2 class="post-title"><a href="blog-details.html">How To Design An Effective User</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending-post-area-end -->

    <!-- ad-banner-area -->
    <div class="ad-banner-area pt-70">
        <div class="container">
            <div class="ad-banner-img">
                <a href="#">
                    <img src="{{asset('theme/assets/img/images/advertisement11.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <!-- ad-banner-area-end -->

    <!-- mining-post-area -->
    <section class="mining-post-area pt-70 pb-70">
        <div class="container">
            <div class="mining-post-inner">
                <div class="row justify-content-center">
                    <div class="col-70">
                        <div class="mining-post-wrap mb-40">
                            <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <h2 class="title">Interviews</h2>
                            </div>
                            <div class="section-title-line"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="featured-post-item healthy-post">
                                        <div class="featured-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_mining_post01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="featured-post-content">
                                            <a href="blog.html" class="post-tag">Interviews</a>
                                            <h2 class="post-title"><a href="blog-details.html">What You Miss in the
                                            Market Changes</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Bevin Likuyani</a></li>
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="featured-post-item healthy-post">
                                        <div class="featured-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_mining_post02.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="featured-post-content">
                                            <a href="blog.html" class="post-tag">Interviews</a>
                                            <h2 class="post-title"><a href="blog-details.html">New Bill Allows to Pay
                                            Crypto Taxes</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Bevin Likuyani</a></li>
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="featured-post-item healthy-post">
                                        <div class="featured-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_mining_post03.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="featured-post-content">
                                            <a href="blog.html" class="post-tag">Interviews</a>
                                            <h2 class="post-title"><a href="blog-details.html">Crypto Exchange Services
                                            In the US</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Bevin Likuyani</a></li>
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="featured-post-item healthy-post">
                                        <div class="featured-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_mining_post04.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="featured-post-content">
                                            <a href="blog.html" class="post-tag">Interviews</a>
                                            <h2 class="post-title"><a href="blog-details.html">Blockchain Can Help with
                                            Fundraising</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Bevin Likuyani</a></li>
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="featured-post-item healthy-post">
                                        <div class="featured-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_mining_post05.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="featured-post-content">
                                            <a href="blog.html" class="post-tag">Interviews</a>
                                            <h2 class="post-title"><a href="blog-details.html">Benefits of Blockchain for Bank Security</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Bevin Likuyani</a></li>
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="featured-post-item healthy-post">
                                        <div class="featured-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_mining_post06.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="featured-post-content">
                                            <a href="blog.html" class="post-tag">Interviews</a>
                                            <h2 class="post-title"><a href="blog-details.html">Economic Niches that
                                            aren’t Occupied</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Bevin Likuyani</a></li>
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-banner-area mb-70">
                            <div class="ad-banner-img ad-banner-img-two text-center">
                                <a href="#">
                                    <img src="{{asset('theme/assets/img/images/advertisement12.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <h2 class="title">Weekly Best</h2>
                            </div>
                            <div class="view-all-btn">
                                <a href="blog.html" class="link-btn">View All
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                            <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                            <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="section-title-line"></div>
                        </div>
                        <div class="weekly-post-item-wrap-three">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="weekly-post-three">
                                        <div class="weekly-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_weekly_post01.jpg')}}" alt=""></a>
                                            <a href="blog.html" class="post-tag">News</a>
                                        </div>
                                        <div class="weekly-post-content">
                                            <h2 class="post-title"><a href="blog-details.html">How To Protect Your App With A Model Based On JSONDiff</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                            <p>Browned butter and brown sugar caramelly oodness crispy edgesthick and soft centers and melty little puddles of chocolate y first favorite.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="weekly-post-three">
                                        <div class="weekly-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_weekly_post02.jpg')}}" alt=""></a>
                                            <a href="blog.html" class="post-tag">Interviews</a>
                                        </div>
                                        <div class="weekly-post-content">
                                            <h2 class="post-title"><a href="blog-details.html">Beyond Algorithms: Skills Of Designers That AI Can’t Replicate</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                            <p>Browned butter and brown sugar caramelly oodness crispy edgesthick and soft centers and melty little puddles of chocolate y first favorite.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="weekly-post-three">
                                        <div class="weekly-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_weekly_post03.jpg')}}" alt=""></a>
                                            <a href="blog.html" class="post-tag">Articles</a>
                                        </div>
                                        <div class="weekly-post-content">
                                            <h2 class="post-title"><a href="blog-details.html">A Comprehensive Checklist For Design Workshops</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                            <p>Browned butter and brown sugar caramelly oodness crispy edgesthick and soft centers and melty little puddles of chocolate y first favorite.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="weekly-post-three">
                                        <div class="weekly-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_weekly_post04.jpg')}}" alt=""></a>
                                            <a href="blog.html" class="post-tag">News</a>
                                        </div>
                                        <div class="weekly-post-content">
                                            <h2 class="post-title"><a href="blog-details.html">Overcoming The Challenges Of Creation For Informational Websites</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                            <p>Browned butter and brown sugar caramelly oodness crispy edgesthick and soft centers and melty little puddles of chocolate y first favorite.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget sidebar-widget-two">
                                <div class="widget-title mb-30">
                                    <h6 class="title">Follow Us On</h6>
                                    <div class="section-title-line"></div>
                                </div>
                                <div class="sidebar-social-wrap">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i>facebook</a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i>twitter</a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i>instagram</a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i>youtube</a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i>LinkedIn</a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-widget-two">
                                <div class="sidebar-newsletter">
                                    <div class="icon"><i class="flaticon-envelope"></i></div>
                                    <h4 class="title">Daily Newsletter</h4>
                                    <p>Get all the top stories from Blogs to keep track.</p>
                                    <div class="sidebar-newsletter-form-two">
                                        <form action="#">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Enter your e-mail">
                                                <button type="submit" class="btn">Subscribe Now</button>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox">
                                                <label for="checkbox">I agree to the terms & conditions</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-widget-two">
                                <div class="widget-title mb-30">
                                    <h6 class="title">Popular News</h6>
                                    <div class="section-title-line"></div>
                                </div>
                                <div class="hot-post-wrap">
                                    <div class="hot-post-item">
                                        <div class="hot-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_banner_post01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="hot-post-content">
                                            <a href="blog.html" class="post-tag-two">News</a>
                                            <h4 class="post-title"><a href="blog-details.html">Inspiring Web Design And UX Showcases</a></h4>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-post-item">
                                        <div class="hot-post-content">
                                            <a href="blog.html" class="post-tag-two">Interviews</a>
                                            <h4 class="post-title"><a href="blog-details.html">Getting Internationalization (i18n) Right With Remix And</a></h4>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-post-item">
                                        <div class="hot-post-content">
                                            <a href="blog.html" class="post-tag-two">Articles</a>
                                            <h4 class="post-title"><a href="blog-details.html">A Step-By-Step Guide To Building Accessible Carousels</a></h4>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-widget-two">
                                <div class="sidebar-img">
                                    <a href="#">
                                        <img src="{{asset('theme/assets/img/images/sidebar_img04.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mining-post-area-end -->

    {{-- Webinars --}}
    <section class="trending-post-area-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <h2 class="title">Webinars</h2>
                        </div>
                        <div class="view-all-btn">
                            <a href="blog.html" class="link-btn">View All Webinars
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="section-title-line"></div>
                    </div>
                </div>
            </div>
            <div class="row trending-post-active">
                <div class="col-lg-4">
                    <div class="overlay-post-three overlay-post-four">
                        <div class="overlay-post-thumb-three">
                            <a href="blog-details.html"><img src="https://www.africanpharmaceuticalreview.com/wp-content/uploads/2023/10/Make-Money-Youtube-Thumbnail-1-1024x576.png" alt=""></a>
                        </div>
                        <div class="overlay-post-content-three">
                            <a href="blog.html" class="post-tag">Drug Delivery</a>
                            <h2 class="post-title"><a href="blog-details.html">Methadone Clinic Pharmacist: Drug Dealers Lace Marijuana With Heroin To Get People Hooked</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="overlay-post-three overlay-post-four">
                        <div class="overlay-post-thumb-three">
                            <a href="blog-details.html"><img src="https://www.africanpharmaceuticalreview.com/wp-content/uploads/2023/07/pexels-anna-tarazevich-7904443-1024x683.jpg" alt=""></a>
                        </div>
                        <div class="overlay-post-content-three">
                            <a href="blog.html" class="post-tag">Drug Delivery</a>
                            <h2 class="post-title"><a href="blog-details.html"> How to dispose expired medication</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="overlay-post-three overlay-post-four">
                        <div class="overlay-post-thumb-three">
                            <a href="blog-details.html"><img src="https://www.africanpharmaceuticalreview.com/wp-content/uploads/2023/07/pexels-pixabay-159211-1024x683.jpg" alt=""></a>
                        </div>
                        <div class="overlay-post-content-three">
                            <a href="blog.html" class="post-tag">Supply Chain</a>
                            <h2 class="post-title"><a href="blog-details.html">Key replenishment strategies for pharmaceutical inventory (quick tips)</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="overlay-post-three overlay-post-four">
                        <div class="overlay-post-thumb-three">
                            <a href="blog-details.html"><img src="https://www.africanpharmaceuticalreview.com/wp-content/uploads/2023/09/Blue-Modern-Tips-Business-Banner-8-1536x768.jpg" alt=""></a>
                        </div>
                        <div class="overlay-post-content-three">
                            <a href="blog.html" class="post-tag">Manufacturing</a>
                            <h2 class="post-title"><a href="blog-details.html">Dr. Christabel Khaemba : Patient Safety In Africa Through Pharmacovigilance</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="trending-shape-wrap">
            <img src="assets/img/images/trending_shape01.png" alt="">
            <img src="assets/img/images/trending_shape02.png" alt="">
        </div>
    </section>
    {{--  --}}

    {{-- Podcasts --}}
    <section class="recent-post-area-two pt-60 pb-60">
        <div class="container">
            <div class="recent-post-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-100">
                        <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <h2 class="title">Podcasts</h2>
                            </div>
                            <div class="view-all-btn">
                                <a href="blog.html" class="link-btn">View All
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                            <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                            <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="section-title-line"></div>
                        </div>
                        <div class="popular-post-item-wrap">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three"><i class="fa fa-podcast fa-2x"></i></a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post02.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three"><i class="fa fa-podcast fa-2x"></i></a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post03.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three"><i class="fa fa-podcast fa-2x"></i></a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post02.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three"><i class="fa fa-podcast fa-2x"></i></a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post04.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three"><i class="fa fa-podcast fa-2x"></i></a>
                                            <h2 class="post-title"><a href="blog-details.html">Racing Games Browned Butte roadert Cookies Daily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post05.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three"><i class="fa fa-podcast fa-2x"></i></a>
                                            <h2 class="post-title"><a href="blog-details.html">Racing Games Browned Butte roadert Cookies Daily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Podcasts End --}}

    <!-- newsletter-area -->
    <section class="newsletter-area-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-wrap-three">
                        <div class="newsletter-content">
                            <h2 class="title">Get Our Latest News & Update</h2>
                        </div>
                        <div class="newsletter-form">
                            <form action="https://subscribers.africanpharmaceuticalreview.com/">
                                <div class="form-grp">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="form-grp">
                                    <input type="email" placeholder="E-mail">
                                </div>
                                <button type="submit" class="btn">Submit Now</button>
                            </form>
                        </div>
                        <div class="newsletter-social">
                            <h4 class="title">Follow Us:</h4>
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->
@endsection
