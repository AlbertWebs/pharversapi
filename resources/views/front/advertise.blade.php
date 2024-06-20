@extends('front.master-noads')

@section('content')
<!-- recent-post-area -->
<section class="recent-post-area-two pt-60 pb-60">
    <div class="container">
        <div class="recent-post-inner-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <h2 class="title">Advertise with Us</h2>
                        </div>
                        <div class="view-all-btn">
                            {{-- <a href="#next" class="link-btn">Write For Us
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </a> --}}
                        </div>
                        <div class="section-title-line"></div>
                    </div>
                    <div class="popular-post-item-wrap">
                       {{--  --}}
                       <div class="blog-details-wrap">
                            <div class="blog-details-content">

                              {{--  --}}
                              <div class="wfu-wrapper">


                                {{-- <h3></h3> --}}
                                <div class="wfu-content mt-5" style="justify-content: center;">
                                    <b>Reach Key Decision-Makers in the Pharmaceutical Industry</strong>
                                    <p>
                                        African Pharmaceutical Review provides a wide choice of print and online advertising options that are tailored to each individual client's requirements. Our platform is a priceless tool for getting in touch with senior managers and powerful decision-makers in the biotechnology and pharmaceutical sectors. Our viewership is primarily from Africa, but it also reaches Europe and the US. As such, we offer a unique platform for focused advertising.
                                    </p>
                                    <br>
                                    <div class="subscribe-btn">
                                        <a download href="#" class="btn btn-two">Download media planner</a>
                                    </div>
                                    <h3>Why Advertise with Us?</h3>
                                    <h4>Targeted Audience</h4>
                                    <p>
                                        Our journal and website are accessed by high-level professionals, including:
                                    </p>
                                    <ul>
                                        <li>Managing Directors</li>
                                        <li>Procurement Directors</li>
                                        <li>Pharmacists</li>
                                        <li>Heads of R&D</li>
                                        <li>Senior Scientists</li>
                                        <li>Laboratory Managers</li>
                                        <li>Process Engineers</li>
                                        <li>Chief Engineers</li>
                                        <li>Production Directors</li>
                                        <li>Plant Managers</li>
                                        <li>Product Managers</li>
                                        <li>Quality Assurance Managers</li>
                                        <li>Quality Control Managers</li>
                                    </ul>
                                    <p>
                                        Pharmaceutical manufacturers form a core component of our readership, ensuring that your message reaches the right people.
                                    </p>

                                    <p>
                                        <strong>Diverse Advertising Opportunities</strong><br>We offer a variety of advertising formats to suit your needs:<br>
                                        <strong>- Print Ads:</strong> Place your advertisement in our widely circulated journal, reaching industry leaders and decision-makers directly.<br>
                                        <strong>- Online Banners:</strong>  Gain visibility on our website with strategically placed banner ads.<br>

                                        <strong>- Sponsored Content:</strong> Share your expertise and solutions through sponsored articles, webinars, and white papers.<br>

                                        <strong>- Email Campaigns:</strong> Target our subscribers with personalized email advertisements.<br>
                                        <strong>- Social Media Campaigns:</strong> Reach our followers with targeted social media advertisements.<br>
                                    </p>
                                    <br>
                                    <h3>Reach</h3>
                                    <p>Advertising with African Pharmaceutical Review gives you the chance to reach important figures in the biotechnology and pharmaceutical industries, who make up a substantial amount of our readership.</p>
                                    <p>We strive to meet all your marketing goals including:</p>
                                    <ul>
                                        <li>Increase brand awareness</li>
                                        <li>Generate high-quality leads</li>
                                        <li>Establish thought leadership</li>
                                        <li>Drive business growth</li>
                                    </ul>
                                    <p>Get in Touch</p>

                                    {{-- Form --}}
                                    <div class="contact-form">

                                        <form id="contact-form" action="{{route('advertise-with-us')}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <input type="text" name="fname" placeholder="First Name*" required="This field is required">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <input type="text" name="fname" placeholder="Last Name*" required="This field is required">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-grp">
                                                        <input type="email" name="email" placeholder="email*" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <input type="text" name="phone" placeholder="phone Number*" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <input type="text" name="position" placeholder="Position/Title*" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h6>Marketing Interest</h6>

                                            <div class="row">
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > Print advertising</label>
                                                </div>
                                                 <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > Digital Advertising</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > Targeted Newsletters</label>
                                                </div>
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > Targeted Newsletters</label>
                                                </div>


                                                <div class="col-md-3">
                                                    <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > company profile listing</label>
                                                </div>
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" >  content marketing</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > email marketing</label>
                                                </div>
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > retargeting</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > e-books</label>
                                                </div>
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" >  webinars</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > whitepapers</label>
                                                </div>
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > research</label>
                                                </div>


                                                <div class="col-md-3">
                                                    <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" > product launch</label>
                                                </div>
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" placeholder="phone Number*" >  other </label>
                                                </div>



                                            </div>
                                            <hr>
                                            <h6>Marketing Goals</h6>
                                            <div class="row">
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest"  >  Brand Awareness</label>
                                                </div>
                                                 <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" >  Lead Generation</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label><input type="checkbox" name="area_of_interest" > Thought Leadership</label>
                                                </div>
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" > Product Promotion</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label><input type="checkbox" name="area_of_interest"  >  increase website traffic</label>
                                                </div>
                                                <div class="col-md-3">
                                                        <label><input type="checkbox" name="area_of_interest" >  boost brand engagement</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label><input type="checkbox" name="area_of_interest" > Other</label>
                                                </div>

                                            </div>





                                            <div class="row mb-3">
                                                <div class="col-md-12 ">
                                                    <div class="form-check">
                                                        <p style="padding-left:50px; font-size:14px;">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" > &nbsp;
                                                            <em><span style="font-family:Arial; letter-spacing:0.1pt; color:#444444; background-color:#ffffff; font-size:8pt;">By submitting this form, you authorize African Pharmaceutical Review to store your email address and send you product offers. You may opt out at any time by requesting removal.</span></em>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <p>
                                                <div class="pull-right" id="next">
                                                    <div class="view-all-btn">
                                                        <button type="submit" class="link-btn">Submit <i class="fa fa-arrow-right"></i>

                                                        </button>
                                                    </div>
                                                </div>
                                            </p>
                                        </form>
                                        <p class="ajax-response mb-0"></p>
                                    </div>
                                    {{-- Form --}}

                                </div>



                                <!-- <div class="reg-header-right col-lg-6 col-md-12"></div> -->
                                {{-- <p>
                                    <div class="pull-right" id="next">
                                        <div class="view-all-btn">
                                            <a href="{{url('/')}}/write-for-us/step-2" class="link-btn">Proceed <i class="fa fa-arrow-right"></i>

                                            </a>
                                        </div>
                                    </div>
                                </p> --}}




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
