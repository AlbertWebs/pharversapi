        <header class="header-style-two">
            {{-- <div id="header-fixed-height"></div> --}}
            {{--  --}}
            <div class="header-top-wrap-four">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="header-top-left-four">
                                <div class="trending-box">
                                    <div class="icon"><img src="assets/img/icon/trending_icon.svg" alt=""></div>
                                    <span>Trending</span>
                                    <div class="shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122 36" preserveAspectRatio="none" fill="none">
                                            <path d="M0 18C0 8.05888 8.05887 0 18 0H110L121.26 16.8906C121.708 17.5624 121.708 18.4376 121.26 19.1094L110 36H18C8.05888 36 0 27.9411 0 18Z" fill="url(#trending_shape)" />
                                            <defs>
                                                <linearGradient id="trending_shape" x1="12" y1="36" x2="132" y2="36" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#3F6088" />
                                                    <stop offset="1" stop-color="#2A4970" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="swiper-container ta-trending-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="trending-content">
                                                <a href="#">Here is a section that can be disabled from the admin backend, Used to show Weekly Trending stories </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="trending-content">
                                                <a href="#">Here is a section that can be disabled from the admin backend, Used to show Weekly Trending stories </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="trending-content">
                                                <a href="#">Here is a section that can be disabled from the admin backend, Used to show Weekly Trending stories </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-top-social header-top-social-two">
                                <ul class="list-wrap">
                                    <li class="articles-link"><a href="{{url('/')}}/advertise-with-us">Contact Us</a></li>
                                    |
                                    <li class="articles-link"><a href="{{url('/')}}/advertise-with-us">Advertise with us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="header-logo-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="hl-left-side">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{url('/')}}/uploads/logo/log.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="hl-right-side">
                                <div class="header-search-wrap">
                                    <form action="#">
                                        <input type="text" placeholder="Search here . . .">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-social">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                {{--  --}}
                                <div class="hl-right-side-four">
                                    <div class="sign-in">
                                        <a href="https://subscribers.africanpharmaceuticalreview.com/dashboard"><i class="flaticon-user"></i>Sign In</a>
                                    </div>
                                    <div class="subscribe-btn">
                                        <a href="https://subscribers.africanpharmaceuticalreview.com/" class="btn btn-two">Subscribe</a>
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <nav class="wrapper fixed-tops" id="menu">

                <div class="bottom_nav">
                    <a class="burger-nav"></a>
                    <ul class="m-0">
                        <li class="articles-link @if($page_title == "Home") active-menu @else @endif"><a href="{{url('/')}}/">Home</a></li>
                        <?php
                           $Content = DB::table('contents')->get();
                        ?>
                        @foreach ($Content as $content)
                        <li class="articles-link @if($page_title == $content->title) active-menu @else @endif"><a href="{{url('/')}}/{{$content->slung}}">{{$content->title}}</a></li>
                        @endforeach
                        <li class="articles-link @if($page_title == "Partnering Companies") active-menu @else @endif"><a href="{{url('/')}}/companies/partnering-companies">Partnering Companies</a></li>
                    </ul>
                </div>
                <?php
                   $Category = DB::table('categories')->limit(10)->get();
                ?>
                <div class="third-nav">
                    <ul class="m-0">
                        @foreach ($Category as $category)
                        <li class="@if($page_topic == $category->title) active-sub-menu @else @endif"><a href="{{url('/')}}/topic/{{$category->slung}}">{{$category->title}}</a></li>
                        @endforeach

                    </ul>
                </div>

            </nav>


        </header>



