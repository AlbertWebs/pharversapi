@extends('front.master-content')

@section('content')
<!-- main-area -->
@foreach ($Posts as $content)


<main class="fix">

    @include('front.superleadboard')

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
                                                <li><i class="flaticon-user"></i>by<a href="{{url('/')}}/author/{{getAuthorSlung($content->author)}}"><?php echo getAuthor($content->author) ?></a> </li>
                                                <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($content->created_at))}}</li>
                                                {{-- <li><i class="flaticon-chat"></i><a href="blog-details.html">05 Comments</a></li> --}}
                                                <li><i class="flaticon-history"></i> <?php  echo estimateReadingTime($content->content);  ?> </li>
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
                                @if($content->type == "Videos")
                                <div class="blog-details-video">
                                    <img src="{{$content->image_one}}" alt="">
                                    <a href="https://www.youtube.com/watch?v={{$content->video_url}}" class="paly-btn popup-video"><i class="fas fa-play"></i></a>
                                </div>
                                @else
                                <div class="blog-details-thumb">
                                    <img src="{{$content->image_one}}" alt="{{$content->title}}">
                                    <p class="text-center"><u>{{$content->image_credit}}</u></p>
                                    @if($content->company_id == null)

                                    @else
                                    Published By <?php $Company = \App\Models\Company::find($content->company_id); ?> <a target="new" href="{{url('/')}}/companies/featured-companies/{{$Company->slung}}">@if($content->company_id == null) @else <?php  echo $Company->title ?> @endif
                                    @endif
                                </div>
                                @endif
                                {{-- Process Whitepaper File --}}
                                @if($content->audio == null)

                                @else
                                <hr>
                                <div class="blog-avatar-wrap">

                                        <audio style="width:100%" class="embed-responsive-item" controls="true" preload="none">
                                            <source src="{{$content->audio}}" type="audio/mp3">
                                        </audio>
                                </div>
                                <p class="text-center">
                                    <br>
                                    <u>Listen to this article</u>
                                </p>
                                <hr>
                                @endif

                                 @if($content->type == "Podcasts")
                                 <hr>
                                    {{-- <div class="blog-avatar-wrap mb-50">
                                        <div class="blog-avatar-img" >
                                            <a href="#"><img style="border-radius:0% !important" src="{{$content->image_one}}" alt="img"></a>

                                        </div>
                                        <div class="blog-avatar-info">

                                            <h4 class="name"><a href="#">{{$content->title}}</a></h4>

                                            <audio style="width:100%" class="embed-responsive-item" controls="true" preload="none">
                                                <source src="{{$content->podcast_url}}" type="audio/mp3">
                                            </audio>
                                        </div>
                                    </div> --}}
                                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/{{$content->podcast_url}}?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                                <hr>

                                 @elseif($content->type == "Whitepapers/Application Notes")
                                 <hr>
                                    @if(Auth::User())
                                            <div class="sidebar-widget sidebar-widget-two">
                                                <div class="sidebar-newsletter">
                                                    <div class="icon"><i class="flaticon-envelope"></i></div>
                                                    <h4 class="title">Download Whitepapers/Application Note</h4>
                                                    <div class="sidebar-newsletter-form">
                                                        <a id="register-download" target="new" download="download" href="{{$content->whitepaper_file}}">
                                                            <span class="fa fa-download fa-2x"></span>
                                                            <span class="fab fa-file-pdf-o fa-2x"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <form id="register-form" style="display:none" action="{{route('register-download')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="user" value="{{Auth::User()->id}}">
                                                <input type="hidden" name="title" value="{{$content->title}}">
                                                <input type="hidden" name="file" value="{{$content->whitepaper_file}}">
                                                <input type="hidden" name="link" value="{{$content->whitepaper_link}}">
                                                <input type="submit">
                                            </form>
                                        @else

                                            <div class="blog-avatar-wrap mb-50">
                                                <div class="blog-avatar-info">

                                                    <h6 class="name"><a href="#download"> Register your details to access this exclusive content</a></h6>


                                                </div>
                                            </div>
                                            @if(Auth::User())

                                            @else

                                            <!-- contact-area -->
                                            <div class="widget-title mb-30" id="download">
                                                <h6 class="title">Download</h6>
                                                <div class="section-title-line"></div>
                                            </div>


                                            <div class="contact-form" >

                                                <form id="contact-formz" action="{{route('open-hidden-content')}}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-grp">
                                                                <input type="text" name="name" placeholder="First Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-grp">
                                                                <input type="text" name="lname" placeholder="Last Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-grp">
                                                                <input type="email" name="email" placeholder="E-mail*">
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="password" value="inputpasswordvalue">
                                                    </div>


                                                    <button type="submit" class="btn btn-two">Download Now</button>
                                                </form>
                                                <p class="ajax-response mb-0"></p>
                                            </div>

                                            <!-- contact-area-end -->
                                            @endif
                                        <hr>
                                        @endif


                                    @endif
                                {{--  --}}
                                <p class="first-info">
                                    {!!html_entity_decode($content->content)!!}
                                </p>


                            </div>

                            <div class="blog-avatar-wrap mb-50">
                                <div class="blog-avatar-img">
                                    <a href="{{url('/')}}/author/{{getAuthorSlung($content->author)}}"><img src="{{getAuthorDP($content->author)}}" alt="img"></a>
                                </div>
                                <div class="blog-avatar-info">
                                    <span class="designation">Writer/Editor</span>
                                    <h4 class="name"><a href="#">{{getAuthor($content->author)}}</a></h4>
                                    <p>  {!!html_entity_decode(getAuthorBio($content->author))!!}</p>
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
                                                <a href="{{url('/')}}/topics/{{$Previous->type}}/{{$Previous->slung}}"><img src="{{$Previous->image_one}}" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <span>Previous Post</span>
                                                <h5 class="post-title"><a href="{{url('/')}}/topics/{{$Previous->type}}/{{$Previous->slung}}">{{$Previous->title}}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if($Next == null)

                                    @else
                                    <div class="col-md-6">
                                        <div class="post-item next-post">
                                            <div class="thumb">
                                                <a href="{{url('/')}}/topics/{{$Next->type}}/{{$Next->slung}}"><img src="{{$Next->image_one}}" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <span>Next Post</span>
                                                <h5 class="post-title"><a href="{{url('/')}}/topics/{{$Next->type}}/{{$Next->slung}}">{{$Next->title}}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-30" >
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
                                        <?php
                                            $Settings = DB::table('_site_settings')->get();
                                        ?>
                                        @foreach ($Settings as $Set)
                                            <li><a href="{{$Set->facebook}}"><i class="fab fa-facebook-f"></i>facebook</a></li>
                                            <li><a href="{{$Set->twitter}}"><i class="fab fa-twitter"></i>twitter</a></li>
                                            {{-- <li><a href="#"><i class="fab fa-instagram"></i>instagram</a></li> --}}
                                            <li><a href="{{$Set->youtube}}"><i class="fab fa-youtube"></i>youtube</a></li>
                                            <li><a href="{{$Set->linkedin}}"><i class="fab fa-linkedin-in"></i>LinkedIn</a></li>
                                            {{-- <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a></li> --}}
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-widget-two sidebar-widget-two-news">
                                @include('front.ad-newsletter')
                            </div>
                            <div class="sidebar-widget sidebar-widget-two">


                                @include('front.ad-square-30')

                                <div class="sidebar-categories">
                                    <ul class="list-wrap">

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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#register-download").on('click', function(event)
        {
            var dataString = $("#register-form").serialize();
            $.ajax({
                type: "POST",
                url: "{{route('register-download')}}",
                data: dataString,
                success: function () {
                    // Display message back to the user here
                }
            });
        });
</script>

@endforeach

@endsection
