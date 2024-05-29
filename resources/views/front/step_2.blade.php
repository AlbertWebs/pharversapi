@extends('front.master-dashoboard')

@section('content')
<!-- recent-post-area -->
<section class="recent-post-area-two pt-60 pb-60">
    <div class="container">
        <div class="recent-post-inner-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <h2 class="title">Step 2</h2>
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

                                    <form id="contact-form" action="{{route('custom-register')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="name" placeholder="Your Name*" required="This field is required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="email" name="email" placeholder="Your Email*" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="username" placeholder="Your Prefrefered Username*" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="expertise" placeholder="Your Area of Experties*" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="country" placeholder="Your Country*" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="city" placeholder="Your City*" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="mobile" placeholder="Mobile*" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="address" placeholder="Address*" required>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" value="2">

                                        <div class="form-grp">
                                            <textarea name="content" placeholder="Short Bio*" required></textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="password" name="password" placeholder="password*" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="password" name="password_confirmation" placeholder="Password Confirmation*" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col-md-12 ">
                                                <div class="form-check">
                                                    <p style="padding-left:50px; font-size:14px;">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" > &nbsp; I acknowledge that I have read and fully understand the terms and conditions
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <p>
                                            <div class="pull-right" id="next">
                                                <div class="view-all-btn">
                                                    <button type="submit" class="link-btn">Next <i class="fa fa-arrow-right"></i>

                                                    </button>
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
