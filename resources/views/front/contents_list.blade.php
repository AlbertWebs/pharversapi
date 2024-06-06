@extends('front.master')

@section('content')
<!-- main-area -->
<main class="fix">

     <!-- categories-area -->
     <section class="categories-area-two pt-70 pb-40" style="min-height:900px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap-three text-center mb-40">
                        <div class="section-title-three">
                            <h6 class="title">Contents
                                <span class="section-title-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40" fill="none" preserveAspectRatio="none">
                                        <path d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z" fill="currentcolor" />
                                    </svg>
                                </span>
                            </h6>
                            <div class="section-title-line-three"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="categories-item-wrap-two">
                <div class="row">
                    @foreach ($Contents as $content)
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="categories-item-two">
                            <div class="categories-img-two">
                                <a href="{{url('/')}}/contents/{{$content->slung}}"><img src="https://www.africanpharmaceuticalreview.com/wp-content/uploads/2023/07/pexels-anna-tarazevich-7904443-870x570.jpg" alt=""></a>
                            </div>
                            <div class="categories-content-two">
                                <a href="{{url('/')}}/contents/{{$content->slung}}" class="post-tag">{{$content->title}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- categories-area-end -->

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
