@extends('front.master')

@section('content')
<!-- recent-post-area -->
<section class="recent-post-area-two pt-60 pb-60">
    <div class="container">
        <div class="recent-post-inner-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <h2 class="title">Step 3</h2>
                        </div>
                        <div class="view-all-btn">
                            <a href="#next" class="link-btn">Write For Us
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
                       {{--  --}}
                       <div class="blog-details-wrap">
                            <div class="blog-details-content">

                              {{--  --}}
                              <div class="wfu-wrapper">


                                {{-- Form --}}
                                <div class="contact-form">
                                    <p class="text-center" style="font-weight:600">
                                        By submitting this form to apply to write for us you agree to our terms and conditions
                                    </p>

                                    <form id="contact-form" action="#" method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <input type="text" name="name" placeholder="Company Name*">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="email" placeholder="Company Email*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="email" name="mob ile" placeholder="Company Mobile*">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <input type="text" name="address" placeholder="Address*">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <input type="url" name="facebook" placeholder="Facebook*">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <input type="url" name="instagram" placeholder="Instagram*">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <input type="url" name="linkedin" placeholder="linkedin*">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <input type="url" name="twitter" placeholder="Twitter*">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-grp">
                                            <textarea name="message" placeholder="Overview*"></textarea>
                                        </div>

                                        <p>
                                            <div class="pull-right" id="next">
                                                <div class="view-all-btn">
                                                    <a href="{{url('/')}}/write-for-us/step-3" class="link-btn"> Finish <i class="fa fa-arrow-right"></i>

                                                    </a>
                                                </div>
                                            </div>
                                        </p>
                                    </form>
                                    <p class="ajax-response mb-0"></p>
                                </div>
                                {{-- Form --}}


                                <!-- <div class="reg-header-right col-lg-6 col-md-12"></div> -->





                            </div>
                              {{--  --}}

                            </div>
                        </div>
                       {{--  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- recent-post-area-end -->
@endsection
