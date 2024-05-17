        <header class="header-style-two">
            {{-- <div id="header-fixed-height"></div> --}}
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



