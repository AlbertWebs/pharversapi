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
                                <?php
                                            $Settings = DB::table('_site_settings')->get();
                                        ?>
                                        @foreach ($Settings as $Set)
                                        <li><a href="{{$Set->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$Set->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                        {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                                        <li><a href="{{$Set->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="{{$Set->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                        @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->
