@extends('front.master')

@section('content')
<!-- main-area -->
<main class="fix">



    {{-- Podcasts --}}
    <section class="recent-post-area-two pt-60 pb-60">
        <div class="container">
            <div class="recent-post-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-100">
                        <div class="section-title-wrap mb-30">
                            <div class="section-title">
                                <h2 class="title">{{$page_title}}</h2>
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
                                @foreach ($Posts as $posts)
                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="{{url('/')}}/topics/{{$page_slung}}/{{$posts->slung}}"><img src="{{$posts->image_one}}" alt="{{$posts->title}}"></a>
                                        </div>
                                        <div class="overlay-post-content-two">

                                            <h2 class="post-title"><a href="{{url('/')}}/topics/{{$page_slung}}/{{$posts->slung}}">{{$posts->title}}</a></h2>

                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="#">{{$posts->author}}</a></li>
                                                    <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($posts->created_at))}}</li>
                                                    <li><i class="flaticon-history"></i>

                                                        <?php
                                                            $tranfomer = new \Stevebauman\Hypertext\Transformer;
                                                            $formated = $tranfomer->toText($posts->content);
                                                            $prep = preg_replace('/[^A-Za-z0-9\-]/', ' ', $formated);
                                                            // dd($formated);

                                                        ?>
                                                        {{app(\Logiek\ReadingTime\ReadingTime::class)->average($prep)}}
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
