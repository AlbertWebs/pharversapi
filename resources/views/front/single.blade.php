@extends('front.master')

@section('content')
<!-- main-area -->
@foreach ($Posts as $content)


<main class="fix">

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/')}}/content/{{$content->type}}">{{$content->type}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> {{$content->title}} </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- blog-details-area -->
    <section class="blog-details-area pt-60 pb-60">
        <div class="container">
            <div class="author-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-70">
                        <div class="blog-details-wrap">
                            <div class="blog-details-content">
                                <div class="blog-details-content-top">
                                    <?php
                                       $Category = \App\Models\Category::find($content->category)
                                    ?>
                                    <a href="blog.html" class="post-tag">{{$Category->title}}</a>
                                    <h2 class="title single-title">{{$content->title}}</h2>
                                    <p class="meta-data">
                                        {{$content->meta}}
                                    </p>
                                    <div class="bd-content-inner">
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-user"></i>by<a href="{{url('/')}}/author/{{getAuthorSlung($content->author)}}"><?php echo getAuthor($content->author) ?></a></li>
                                                <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($content->created_at))}}</li>
                                                {{-- <li><i class="flaticon-chat"></i><a href="blog-details.html">05 Comments</a></li> --}}
                                                <li><i class="flaticon-history"></i>5 Mins</li>
                                            </ul>
                                        </div>
                                        <div class="blog-details-social">
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-details-thumb">
                                    <img src="{{$content->image_one}}" alt="{{$content->title}}">
                                </div>
                                {{-- Process Whitepaper File --}}

                                 @if($content->type == "Podcasts")
                                 <hr>
                                 <div class="blog-avatar-wrap mb-50">
                                    <div class="blog-avatar-img" >
                                        <a href="#"><img style="border-radius:0% !important" src="{{$content->image_one}}" alt="img"></a>
                                    </div>
                                    <div class="blog-avatar-info">

                                        <h4 class="name"><a href="#">{{$content->title}}</a></h4>

                                        <audio style="width:100%" class="embed-responsive-item" controls="true" preload="none">
                                            <source src="{{$content->podcast_url}}" type="audio/mp3">
                                        </audio>
                                    </div>
                                 </div>
                                <hr>
                                 @endif
                                {{--  --}}
                                <p class="first-info">
                                    {!!html_entity_decode($content->content)!!}
                                </p>
                                <blockquote>
                                    <p>{{$content->meta}} </p>
                                    <cite>{{$content->author}}</cite>
                                </blockquote>


                            </div>

                            <div class="blog-avatar-wrap mb-50">
                                <div class="blog-avatar-img">
                                    <a href="{{url('/')}}/author/{{getAuthorSlung($content->author)}}"><img src="{{getAuthorDP($content->author)}}" alt="img"></a>
                                </div>
                                <div class="blog-avatar-info">
                                    <span class="designation">{{getAuthor($content->author)}}</span>
                                    <h4 class="name"><a href="author.html">{{$content->author}}</a></h4>
                                    <p>{{getAuthorBio($content->author)}}</p>
                                </div>
                            </div>
                            <?php
                              $Current = $content->id;
                              $prev = $Current-1;
                              $Previous = \App\Models\Blog::find($prev);

                              $next = $Current+1;
                              $Next = \App\Models\Blog::find($next);
                            ?>
                            <div class="pev-next-post-wrap">
                                <div class="row">
                                    @if($Previous == null)

                                    @else
                                    <div class="col-md-6">
                                        <div class="post-item">
                                            <div class="thumb">
                                                <a href="{{url('/')}}/{{$Previous->type}}/{{$Previous->slung}}"><img src="{{$Previous->image_one}}" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <span>Previous Post</span>
                                                <h5 class="post-title"><a href="{{url('/')}}/{{$Previous->type}}/{{$Previous->slung}}">{{$Previous->title}}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if($Next == null)

                                    @else
                                    <div class="col-md-6">
                                        <div class="post-item next-post">
                                            <div class="thumb">
                                                <a href="{{url('/')}}/{{$Next->type}}/{{$Next->slung}}"><img src="{{$Next->image_one}}" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <span>Next Post</span>
                                                <h5 class="post-title"><a href="{{url('/')}}/{{$Next->type}}/{{$Next->slung}}">{{$Next->title}}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget">
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search . . .">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                            </div>
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
                                    <h6 class="title">Hot Reads</h6>
                                    <div class="section-title-line"></div>
                                </div>

                                @include('front.ad-square-30')

                                <div class="sidebar-categories">
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
                                </div>
                            </div>
                            @include('front.ad-square-31')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->

</main>
<!-- main-area-end -->

@endforeach

@endsection
