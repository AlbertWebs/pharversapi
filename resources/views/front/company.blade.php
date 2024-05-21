@extends('front.master')

@section('content')
{{--  --}}


<!-- main-area -->
<main class="fix">

     <!-- author-area -->
     <section class="author-area pt-60 pb-60">
        <div class="container">
            <div class="author-inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-100">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="author-wrap">
                                    <div class="author-content">
                                        <h2>Africa Pharmaceutical Review</h2>
                                        <span><a href="www.africanpharmaceuticalreview.com">www.africanpharmaceuticalreview.com</a></span><br>
                                        <address>
                                            Chalbi Condominiums, Suite 5C.<br>
                                            Cotton Avenue, Ringroad Kilimani<br>
                                            Nairobi, <br>Kenya
                                        </address>
                                        <span><a href="mailto:info@africanpharmaceuticalreview.com">info@africanpharmaceuticalreview.com</a></span>
                                        <h6>0723014032</h6>
                                        <br>
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
                            </div>
                            <div class="col-lg-5 company-thumbs">
                                    <img src="{{url('/')}}/uploads/logo/beige.png" alt="">
                            </div>
                        </div>

                        {{-- Start Tabs Here --}}

                        {{-- End Tabs Here --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- author-area-end -->

</main>

@endsection
