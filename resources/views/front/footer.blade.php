 <footer>
            <div class="footer-area">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-7">
                                <div class="footer-widget">
                                    <div class="fw-logo">
                                        <a href="#"><img style="width:280px" src="{{url('/')}}/uploads/logo/log.png" alt="African Pharmaceutical Review"></a>
                                    </div>
                                    <div class="footer-content">
                                        <p>The African Pharmaceutical Review is an online resource for readers and professionals working or have an interest in the pharmaceutical industry. Our goal is to provide a voice to the African pharmaceutical industry and ensure that the pharmaceutical community is kept in touch with the latest news, developments and insights around the pharma industry in Africa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-5 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Topics</h4>
                                    <div class="footer-link-wrap">
                                        <ul class="list-wrap">
                                            <?php $Topics = DB::table('categories')->limit('6')->inRandomOrder()->get(); ?>
                                            @foreach ($Topics as $topics)
                                            <li><a href="{{url('/')}}/topic/{{$topics->slung}}">{{$topics->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Quick Access</h4>
                                    <div class="footer-link-wrap">
                                        <ul class="list-wrap">
                                            <?php $Content = DB::table('contents')->limit('6')->inRandomOrder()->get(); ?>
                                            @foreach ($Content as $content)
                                            <li><a href="{{url('/')}}/contents/{{$content->slung}}">{{$content->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Resources</h4>
                                    <div class="footer-link-wrap">
                                        <ul class="list-wrap">
                                            <li><a href="{{url('/')}}/about-us">About Us</a></li>
                                            <li><a href="{{url('/')}}/contact-us">Contact Us</a></li>
                                            <li><a href="{{url('/')}}/companies/featured-companies">Featured Companies</a></li>
                                            <li><a href="{{url('/')}}/advertise-with-us">Advertise With Us</a></li>
                                            <li><a href="{{url('/')}}/write-for-us">Write For Us</a></li>
                                            <li><a href="{{url('/')}}/copyright">Copyright Statement</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="footer-social">
                            <ul class="list-wrap">

                                <?php
                                    $Settings = DB::table('_site_settings')->get();
                                ?>
                                @foreach ($Settings as $Set)
                                <li><a href="{{$Set->facebook}}"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                <li><a href="{{$Set->twitter}}"><i class="fab fa-twitter"></i>Twitter</a></li>
                                {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                                <li><a href="{{$Set->linkedin}}"><i class="fab fa-linkedin-in"></i>Linkedin</a></li>
                                <li><a href="{{$Set->youtube}}"><i class="fab fa-youtube"></i>Youtube</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{--  --}}
                    </div>
                    <div class="footer-shape-two" data-background="{{asset('theme/assets/img/images/footer_shape02.png')}}"></div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="footer-bottom-menu">
                                    <ul class="list-wrap">
                                        <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                                        <li><a href="{{route('terms-and-conditions')}}">Terms & Conditions</a></li>
                                        <li><a href="#">Sitemaps</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="copyright-text">
                                    <p>Copyright © {{date('Y')}}
                                        <a href="">African Pharmaceutical Review</a>
                                        All Rights Reserved | Published By
                                        <a href="{{route('pharverse')}}">Pharvers Limited</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}

            {{--  --}}
        </footer>
