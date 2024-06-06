@extends('front.master')

@section('content')
  <!-- main-area -->
  <main class="fix">

    @foreach ($Author as $author)



    <!-- breadcrumb-area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Author</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$author->name}} </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- author-area -->
    <section class="author-area pt-60 pb-60">
        <div class="container">
            <div class="author-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-70">
                        <div class="author-wrap">
                            <div class="author-thumb">
                                <img src="{{$author->image}}" alt="">
                            </div>
                            <div class="author-content">
                                <h4 class="name">{{$author->name}}</h4>
                                <p>{{$author->content}}</p>
                                <div class="author-social">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="weekly-post-item-wrap">
                            <?php
                               $Blog = DB::table('blogs')->where('author',$author->id)->get();
                            ?>
                            @foreach ($Blog as $blog)
                            <div class="weekly-post-item weekly-post-four">
                                <div class="weekly-post-thumb">
                                    <a href="{{url('/')}}/topics/{{$blog->type}}/{{$blog->slung}}"><img src="{{$blog->image_one}}" alt="{{$blog->title}}"></a>
                                </div>
                                <div class="weekly-post-content">
                                    <a href="#" class="post-tag">{{$blog->type}}</a>
                                    <h2 class="post-title"><a href="#">{{$blog->title}}</a></h2>
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-calendar"></i>{{date('d M, Y', strtotime($blog->created_at))}}</li>
                                            {{-- <li><i class="flaticon-history"></i>20 Mins</li> --}}
                                        </ul>
                                    </div>
                                    <p>{{$blog->meta}}</p>
                                    <div class="view-all-btn">
                                        <a href="blog-details.html" class="link-btn">Read More
                                            <span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                                    <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                    <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="pagination-wrap mt-60">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination list-wrap">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                </ul>
                            </nav>
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
    <!-- author-area-end -->

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
                            <form action="#">
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
    @endforeach
</main>
<!-- main-area-end -->
@endsection
