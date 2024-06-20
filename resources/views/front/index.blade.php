@extends('front.master')

@section('content')
<!-- main-area -->
<main class="fix">

    @include('front.superleadboard')
    <?php
        $Latest = DB::table('blogs')->where('featured','1')->OrderBy('created_at', 'desc')->limit('3')->get();
    ?>

   @if($Latest->isEmpty())


   @else
    <section class="banner-post-area-four pb-30 pt-30">
        <div class="container">
            <div class="row">

                @foreach ($Latest as $latest)
                <div class="col-lg-4">
                    <div class="banner-post-four">
                        <div class="banner-post-thumb-four">
                            <a href="{{url('/')}}/topics/{{$latest->type}}/{{$latest->slung}}"><img src="{{$latest->image_one}}" alt="{{$latest->title}}"></a>
                        </div>
                        <div class="banner-post-content-four">
                            <a href="{{url('/')}}/" class="post-tag">{{$latest->type}}</a>
                            <h2 class="post-title bold-underline"><a href="{{url('/')}}/topics/{{$latest->type}}/{{$latest->slung}}">{{$latest->title}}</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-user"></i>by<a href="{{url('/')}}/author/{{getAuthorSlung($latest->author)}}"><?php echo getAuthor($latest->author) ?></a></li>
                                    <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($latest->created_at))}}</li>
                                    <li><i class="flaticon-history"></i>
                                        {{--  --}}5 Mins
                                        Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <?php
        $LatestNews = DB::table('blogs')->where('type','News')->OrderBy('created_at', 'desc')->limit('4')->get();
        $LatestNews1 = DB::table('blogs')->where('type','News')->OrderBy('created_at', 'desc')->limit('1')->get();
    ?>
    <!-- trending-post-area -->
    <section class="trending-post-area pt-60 pb-60">
        <div class="container">
            <div class="trending-post-inner">
                <div class="row justify-content-center">
                    <div class="col-100">
                        <div class="recent-post-wrap">
                            <div class="section-title-wrap mb-30">
                                <div class="section-title">
                                    <h2 class="title">Latest News</h2>
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
                            <div class="row">
                                @foreach ($LatestNews1 as $latestnews)
                                <div class="col-54">
                                    <div class="overlay-post-two">
                                        <div class="overlay-post-thumb">
                                            <a href="#"><img src="{{$latestnews->image_one}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <a href="blog.html" class="post-tag">News</a>
                                            <h2 class="post-title"><a href="#">{{$latestnews->title}}</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html"><?php echo getAuthor($latestnews->author) ?></a></li>
                                                    <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($latestnews->created_at))}}</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="col-46">
                                    @foreach ($LatestNews as $latestrst)
                                    @if($latestrst->id == $latestnews->id)

                                    @else
                                        <div class="horizontal-post-two">
                                            <div class="horizontal-post-thumb">
                                                <a href="blog-details.html"><img src="{{$latestrst->image_one}}" alt=""></a>
                                            </div>
                                            <div class="horizontal-post-content">
                                                <a href="blog.html" class="post-tag">News</a>
                                                <h2 class="post-title"><a href="#">{{$latestrst->title}}</a></h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($latestrst->created_at))}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending-post-area-end -->


    @include('front.leadboard')


    <!-- recent-post-area -->
    <section class="recent-post-area-two pt-60 pb-60">
        <div class="container">
            <div class="recent-post-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-70">
                        <?php
                            $RecentNews = DB::table('blogs')->where('type','News')->orWhere('type','Articles')->OrderBy('created_at', 'desc')->limit('5')->get();
                        ?>
                        <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <h2 class="title">Recent Posts</h2>
                            </div>
                            <div class="view-all-btn">
                                <a href="{{url('/')}}/topics" class="link-btn">View All
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
                                <?php
                                   $counter = 1;
                                ?>
                                @foreach ($RecentNews as $blog)
                                @if($counter == "4" || $counter == "5")
                                    <div class="col-lg-6">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{url('/')}}/topics/{{$blog->type}}/{{$blog->slung}}"><img src="{{$blog->image_one}}" alt=""></a>
                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="blog.html" class="post-tag post-tag-three">{{$blog->type}}</a>
                                                <h2 class="post-title"><a href="{{url('/')}}/topics/{{$blog->type}}/{{$blog->slung}}">{{$blog->title}}</a></h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($blog->created_at))}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-4">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{url('/')}}/topics/{{$blog->type}}/{{$blog->slung}}"><img src="{{$blog->image_one}}" alt=""></a>
                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="blog.html" class="post-tag post-tag-three">{{$blog->type}}</a>
                                                <h2 class="post-title"><a href="{{url('/')}}/topics/{{$blog->type}}/{{$blog->slung}}">{{$blog->title}}</a></h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($blog->created_at))}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <?php
                                  $counter = $counter+1
                                ?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="sidebar-wrap no-sticky">
                            <div class="sidebar-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest-tab-pane" type="button" role="tab" aria-controls="latest-tab-pane" aria-selected="true">Podcasts</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured-tab-pane" type="button" role="tab" aria-controls="featured-tab-pane" aria-selected="false">Videos</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="latest-tab-pane" role="tabpanel" aria-labelledby="latest-tab" tabindex="0">
                                        <div class="sidebar-widget sidebar-widget-two">
                                            <?php
                                               $Podcasts = DB::table('blogs')->where('type','podcasts')->OrderBy('created_at', 'desc')->limit('4')->get();
                                            ?>
                                            @foreach ($Podcasts as $podcast)
                                            <div class="popular-post popular-post-two">
                                                <div class="thumb">
                                                    <br>
                                                    <a href="{{url('/')}}/topics/{{$podcast->type}}/{{$podcast->slung}}" class="thumb-middle"><img src="{{$podcast->image_one}}" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="{{url('/')}}/topics/{{$podcast->type}}/{{$podcast->slung}}" class="post-tag-two"><span class="fa fa-podcast"></span> Podcasts</a>
                                                    <h2 class="post-title"><a href="{{url('/')}}/topics/{{$podcast->type}}/{{$podcast->slung}}">{{$podcast->title}}</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($podcast->created_at))}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="featured-tab-pane" role="tabpanel" aria-labelledby="featured-tab" tabindex="0">
                                        <div class="sidebar-widget sidebar-widget-two">
                                            <?php
                                            $Podcasts = DB::table('blogs')->where('type','videos')->OrderBy('created_at', 'desc')->limit('4')->get();
                                         ?>
                                         @foreach ($Podcasts as $podcast)
                                         <div class="popular-post popular-post-two">
                                            <div class="thumb">
                                                <br>
                                                <a href="{{url('/')}}/topics/{{$podcast->type}}/{{$podcast->slung}}" class="thumb-middle"><img src="{{$podcast->image_one}}" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <a href="{{url('/')}}/topics/{{$podcast->type}}/{{$podcast->slung}}" class="post-tag-two"><span class="fa fa-film"></span> Podcasts</a>
                                                <h2 class="post-title"><a href="{{url('/')}}/topics/{{$podcast->type}}/{{$podcast->slung}}">{{$podcast->title}}</a></h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($podcast->created_at))}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                         @endforeach
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
                            <h2 class="title">Recent Interviews</h2>
                        </div>
                        <div class="view-all-btn view-all-btn-two">
                            <a href="{{url('/')}}/topics" class="link-btn">View All
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
            <?php
                $RecentInterviews = DB::table('blogs')->where('type','Interviews')->OrderBy('created_at', 'desc')->limit('2')->get();
                $InterCount = count($RecentInterviews);
            ?>
            <div class="row">
                @foreach ($RecentInterviews as $recentInterviews)
                @if($InterCount < 2)
                <div class="col-lg-6">
                    <div class="overlay-post-five">
                        <div class="overlay-post-thumb-five">
                            <a href="{{url('/')}}/topics/{{$recentInterviews->type}}/{{$recentInterviews->slung}}"><img src="{{$recentInterviews->image_one}}" alt=""></a>
                        </div>
                        <div class="overlay-post-content-five">
                            <a href="{{url('/')}}/topics/{{$recentInterviews->type}}/{{$recentInterviews->slung}}" class="post-tag post-tag-three">Interviews</a>
                            <h2 class="post-title bold-underline"><a href="{{url('/')}}/interviews/{{$recentInterviews->slung}}">{{$recentInterviews->title}}</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($recentInterviews->created_at))}}</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
                @else
                <div class="col-lg-6">
                    <div class="overlay-post-five">
                        <div class="overlay-post-thumb-five">
                            <a href="{{url('/')}}/topics/{{$recentInterviews->type}}/{{$recentInterviews->slung}}"><img src="{{$recentInterviews->image_one}}" alt=""></a>
                        </div>
                        <div class="overlay-post-content-five">
                            <a href="{{url('/')}}/topics/{{$recentInterviews->type}}/{{$recentInterviews->slung}}" class="post-tag post-tag-three">Interviews</a>
                            <h2 class="post-title bold-underline"><a href="{{url('/')}}/topics/{{$recentInterviews->type}}/{{$recentInterviews->slung}}">{{$recentInterviews->title}}</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($recentInterviews->created_at))}}</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <?php
                    $OtherInterviews = DB::table('blogs')->where('type','Interviews')->OrderBy('created_at', 'asc')->limit('3')->get();

                ?>
                @foreach ($OtherInterviews as $other)
                <div class="col-xl-4 col-lg-6">
                    <div class="horizontal-post-three">
                        <div class="horizontal-post-thumb-three">
                            <a class="int-img" href="{{url('/')}}/interviews/{{$other->slung}}"><img src="{{$other->image_one}}" alt=""></a>
                        </div>
                        <div class="horizontal-post-content-three">
                            <a href="blog.html" class="post-tag post-tag-three">Interviews</a>
                            <h2 class="post-title"><a href="{{url('/')}}/interviews/{{$other->slung}}">{{$other->title}}</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($other->created_at))}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- trending-post-area-end -->

    @include('front.ad-interviews')

    <!-- mining-post-area -->
    <section class="mining-post-area pt-70 pb-70">
        <div class="container">
            <div class="mining-post-inner">
                <div class="row justify-content-center">
                    <div class="col-70">
                        <div class="mining-post-wrap mb-40">
                            <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <h2 class="title">Whitepapers/Application Notes</h2>
                            </div>
                            <div class="section-title-line"></div>
                            </div>
                            {{--  --}}
                            <div class="row">
                                <?php
                                    $Whitepapers = DB::table('blogs')->where('type','Whitepapers/Application Notes')->OrderBy('created_at', 'desc')->limit('4')->get();
                                ?>
                                @foreach ($Whitepapers as $whitepapers)
                                <div class="col-md-6">
                                    <div class="weekly-post-three">
                                        <div class="weekly-post-thumb">

                                            <a href="{{url('/')}}/topics/<?php echo \Str::slug($whitepapers->type) ?>/{{$whitepapers->slung}}"><img src="{{$whitepapers->image_one}}" alt="{{$whitepapers->title}}"></a>
                                            <a href="blog.html" class="post-tag">Whitepapers/Application Notes</a>
                                        </div>
                                        <div class="weekly-post-content">
                                            <h2 class="post-title"><a href="{{url('/')}}/topics/<?php echo \Str::slug($whitepapers->type) ?>/{{$whitepapers->slung}}">{{$whitepapers->title}}</a></h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($whitepapers->created_at))}}</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                            <p>{{$whitepapers->meta}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            {{--  --}}
                        </div>

                        @include('front.ad-whitepaper')

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
                                        {{-- <li><a href="#"><i class="fab fa-instagram"></i>instagram</a></li> --}}
                                        <li><a href="#"><i class="fab fa-youtube"></i>youtube</a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i>LinkedIn</a></li>
                                        {{-- <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a></li> --}}
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget sidebar-widget-two sidebar-widget-two-news">
                                {{-- <div class="widget-title mb-30">
                                    <h6 class="title">Hot Reads</h6>
                                    <div class="section-title-line"></div>
                                </div> --}}

                                @include('front.ad-square-30')

                                @include('front.ad-newsletter')

                                {{-- <div class="sidebar-categories">
                                    <ul class="list-wrap">
                                        <?php
                                            $Categories = DB::table('categories')->limit('8')->get();
                                        ?>
                                        @foreach ($Categories as $category)
                                        <li>
                                            <a href="{{url('/')}}/topic/{{$category->slung}}" data-background="{{$category->image}}">
                                                <span class="post-tag post-tag-three">{{$category->title}}</span>
                                                <span class="right-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                        <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div> --}}
                            </div>
                            @include('front.ad-square-31')

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
                <?php
                   $Webinars = DB::table('blogs')->where('type','Webinars')->OrderBy('id','DESC')->limit('4')->get();
                ?>
                @foreach ($Webinars as $webinar)
                <div class="col-lg-4">
                    <div class="overlay-post-three overlay-post-four">
                        <div class="overlay-post-thumb-three">
                            <a href="{{url('/')}}/topics/{{$webinar->type}}/{{$webinar->slung}}"><img src="{{$webinar->image_one}}" alt="{{$webinar->title}}"></a>
                        </div>
                        <div class="overlay-post-content-three">
                            <?php
                                $webinarsCategory = \App\Models\Category::find($webinar->category);
                            ?>
                            <a href="blog.html" class="post-tag">{{$webinarsCategory->title}}</a>
                            <h2 class="post-title"><a href="{{url('/')}}/topics/{{$webinar->type}}/{{$webinar->slung}}">{{$webinar->title}}</a></h2>
                            <div class="blog-post-meta white-blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($webinar->created_at))}}</li>
                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="trending-shape-wrap">
            <img src="assets/img/images/trending_shape01.png" alt="">
            <img src="assets/img/images/trending_shape02.png" alt="">
        </div>
    </section>
    {{--  --}}

     <!-- recent-post-area -->
     <section class="recent-post-area-two pt-60 pb-60">
        <div class="container">
            <div class="recent-post-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <?php
                            $RecentNews = DB::table('blogs')->where('type','Podcasts')->OrderBy('created_at', 'desc')->limit('6')->get();
                        ?>
                        <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <h2 class="title">Podcasts</h2>
                            </div>
                            <div class="view-all-btn">
                                <a href="{{url('/')}}/topics" class="link-btn">View All
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
                                <?php
                                   $counter = 1;
                                ?>
                                @foreach ($RecentNews as $blog)
                                @if($counter == "5" || $counter == "6")
                                    <div class="col-lg-6">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{url('/')}}/topics/{{$blog->type}}/{{$blog->slung}}"><img src="{{$blog->image_one}}" alt=""></a>
                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="blog.html" class="post-tag post-tag-three"><i class="fa fa-podcast"></i> {{$blog->type}}</a>
                                                <h2 class="post-title"><a href="{{url('/')}}/topics/{{$blog->type}}/{{$blog->slung}}">{{$blog->title}}</a></h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($blog->created_at))}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-3">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{url('/')}}/topics/{{$blog->type}}/{{$blog->slung}}"><img src="{{$blog->image_one}}" alt=""></a>
                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="blog.html" class="post-tag post-tag-three"><i class="fa fa-podcast"></i> {{$blog->type}}</a>
                                                <h2 class="post-title"><a href="{{url('/')}}/topics/{{$blog->type}}/{{$blog->slung}}">{{$blog->title}}</a></h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($blog->created_at))}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <?php
                                  $counter = $counter+1
                                ?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- recent-post-area-end -->




      <!-- editor-post-area -->
      <section class="editor-post-area pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <h2 class="title">Featured Companies</h2>
                        </div>
                        <div class="editor-nav"></div>
                        <div class="section-title-line"></div>
                    </div>
                </div>
            </div>
            <div class="editor-post-wrap">
                <div class="row editor-post-active">
                    <?php
                       $Companies = DB::table('companies')->get();
                    ?>
                    @foreach ($Companies as $companies)
                    <div class="col-lg-4">
                        <div class="editor-post-item">
                            <div class="editor-post-thumb">
                                <a href="{{url('/')}}/companies/featured-companies/{{$companies->slung}}"><img src="{{url('/')}}/uploads/logo/{{$companies->logo}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- editor-post-area-end -->


   @include('front.newsletter')

</main>
<!-- main-area-end -->
@endsection
