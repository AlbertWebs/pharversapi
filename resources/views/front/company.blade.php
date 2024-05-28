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

    {{--  --}}
    <div class="destination-details-section pb-60">
        <div class="container">
           <div class="row gy-5 justify-content-center">
              <div class="col-lg-12">
                 <div class="nav flex-row justify-content-start nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link nav-btn-style active" id="v-pills-information-tab" data-bs-toggle="pill" data-bs-target="#v-pills-information" type="button" role="tab" aria-controls="v-pills-information" aria-selected="true">
                       <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2.73398 0.0593748C1.75273 0.30625 1.05273 1.05 0.855859 2.05625C0.790234 2.4 0.790234 13.6 0.855859 13.9437C1.02773 14.8188 1.57461 15.4937 2.37461 15.8219C2.78398 15.9906 2.87773 16 4.29023 16C5.51211 16 5.60273 15.9969 5.71211 15.9406C5.85898 15.8656 5.95273 15.7656 6.01523 15.6188C6.14023 15.3125 6.01211 14.9625 5.71211 14.8094C5.60586 14.7531 5.51523 14.75 4.50898 14.75C3.91211 14.7469 3.32773 14.7344 3.21211 14.7219C2.66523 14.65 2.22461 14.2469 2.12461 13.7219C2.08086 13.4906 2.08086 2.50937 2.12461 2.27812C2.22461 1.75313 2.66523 1.35 3.21211 1.27812C3.48711 1.24375 10.8559 1.24375 11.1309 1.27812C11.6777 1.35 12.1184 1.75313 12.2184 2.27812C12.2371 2.38125 12.2496 3.23125 12.2496 4.46562V6.4875L12.3215 6.625C12.359 6.7 12.4434 6.80312 12.509 6.85625C12.609 6.9375 12.6621 6.95312 12.8402 6.9625C13.1527 6.98125 13.3715 6.85312 13.484 6.5875C13.5527 6.41875 13.5559 2.4125 13.4871 2.05625C13.284 1.02812 12.5652 0.278125 11.5684 0.0500002C11.3715 0.00624943 10.8996 0 7.14961 0.00312519C3.25586 0.00312519 2.93711 0.00937462 2.73398 0.0593748Z"></path>
                          <path d="M3.67173 3.7999C3.24048 4.02178 3.19048 4.58428 3.57173 4.8874L3.69361 4.98428L7.12798 4.99365C10.4592 4.9999 10.5655 4.9999 10.6811 4.94053C11.1499 4.6999 11.1499 4.0499 10.6811 3.80928C10.5686 3.75303 10.4467 3.7499 7.16548 3.7499C4.14673 3.7499 3.75611 3.75615 3.67173 3.7999Z"></path>
                          <path d="M3.67173 6.2999C3.24048 6.52178 3.19048 7.08428 3.57173 7.3874L3.69361 7.48428L7.12798 7.49365C10.4592 7.4999 10.5655 7.4999 10.6811 7.44053C11.1499 7.1999 11.1499 6.5499 10.6811 6.30928C10.5686 6.25303 10.4467 6.2499 7.16548 6.2499C4.14673 6.2499 3.75611 6.25615 3.67173 6.2999Z"></path>
                          <path d="M12.8149 8.54689C12.5649 8.61877 12.3899 8.70314 12.1743 8.85627C12.0711 8.93127 11.1805 9.80002 10.1961 10.7875L8.41175 12.5781L8.29925 12.9375C7.63675 15.0969 7.61488 15.1719 7.61175 15.3813C7.60863 15.5656 7.62113 15.6031 7.70238 15.725C7.7555 15.7969 7.8555 15.8906 7.92113 15.9281C8.143 16.0531 8.268 16.0344 9.67738 15.6438C10.3836 15.4469 11.0086 15.2625 11.068 15.2344C11.1243 15.2063 11.9961 14.3563 13.0024 13.35C14.8243 11.5281 14.8368 11.5125 14.9649 11.25C15.2524 10.6594 15.2555 10.0906 14.9711 9.51564C14.7649 9.09689 14.3711 8.75002 13.9274 8.59377C13.6711 8.50314 13.068 8.47814 12.8149 8.54689ZM13.5211 9.81564C13.7211 9.89064 13.9055 10.1563 13.9055 10.375C13.9055 10.5156 13.8118 10.7125 13.6961 10.8188L13.6055 10.9063L13.1868 10.4844L12.768 10.0656L12.8586 9.96564C12.9118 9.91252 12.9961 9.85002 13.0461 9.82502C13.1586 9.77502 13.3993 9.76877 13.5211 9.81564ZM11.5524 12.9594L10.4055 14.1094L9.8055 14.275C9.47738 14.3656 9.2055 14.4344 9.20238 14.4313C9.19613 14.425 9.27425 14.1594 9.37113 13.8344L9.54613 13.25L10.6961 12.1031L11.8461 10.9563L12.2743 11.3844L12.7024 11.8125L11.5524 12.9594Z"></path>
                          <path d="M3.67173 8.8C3.24048 9.025 3.19048 9.58438 3.57173 9.8875L3.69361 9.98438H5.90611H8.11861L8.24048 9.8875C8.58111 9.61563 8.58111 9.13438 8.24048 8.8625L8.11861 8.76563L5.94361 8.75625C4.01236 8.75 3.75611 8.75625 3.67173 8.8Z"></path>
                       </svg>
                       Overview
                    </button>
                    <button class="nav-link nav-btn-style" id="v-pills-news-tab" data-bs-toggle="pill" data-bs-target="#v-pills-news" type="button" role="tab" aria-controls="v-pills-news" aria-selected="false">
                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                           <path d="M3.00592 1.04681C2.2153 1.21868 1.50592 1.81868 1.18717 2.58118C0.987171 3.05931 0.996546 2.77181 1.00592 8.10306L1.0153 12.9531L1.1028 13.1968C1.35592 13.9187 1.81217 14.4406 2.44967 14.7499C2.97467 15.0031 2.51217 14.9843 7.98405 14.9843H12.859L13.1028 14.9124C14.034 14.6437 14.7215 13.9343 14.9372 13.0156C14.9997 12.7593 14.9997 12.6531 14.9934 7.89993L14.984 3.04681L14.8965 2.79681C14.5997 1.95931 14.009 1.37181 13.1715 1.09056L12.9528 1.01556L8.0778 1.00931C4.04655 1.00618 3.16842 1.01243 3.00592 1.04681ZM12.8434 2.07493C13.3622 2.24681 13.7559 2.64056 13.9247 3.15618C13.9778 3.31868 13.984 3.54368 13.9934 6.84368L14.0028 10.3593L12.8528 9.21556C12.2215 8.58431 11.6715 8.05306 11.634 8.03431C11.5372 7.98431 11.2622 7.99056 11.1622 8.04368C11.1153 8.06868 10.5997 8.56868 10.0153 9.15306L8.9528 10.2187L6.74967 8.01868C5.53717 6.80931 4.5153 5.80306 4.4778 5.78431C4.3903 5.74056 4.10905 5.74056 4.02155 5.78431C3.98405 5.80306 3.51217 6.25618 2.97467 6.79368L1.99655 7.76556L2.00905 5.54681C2.01842 3.51243 2.02155 3.31243 2.07467 3.15618C2.19967 2.76868 2.48405 2.41243 2.8153 2.22806C3.02467 2.10931 3.18092 2.05931 3.42155 2.03118C3.52467 2.01868 5.64967 2.00931 8.1403 2.01243C12.4403 2.01556 12.6809 2.01868 12.8434 2.07493ZM7.7653 10.4999L11.2653 13.9999L7.29655 13.9937C3.5528 13.9843 3.31842 13.9812 3.15592 13.9249C2.63717 13.7531 2.2403 13.3562 2.07467 12.8437C2.02467 12.6906 2.01842 12.4937 2.00592 10.9562L1.99342 9.24056L3.1153 8.11868C3.73092 7.50306 4.2403 6.99993 4.24967 6.99993C4.25905 6.99993 5.8403 8.57493 7.7653 10.4999ZM12.7153 10.5437L14.009 11.8374L13.9903 12.2624C13.959 12.8812 13.8278 13.2124 13.4809 13.5437C13.3153 13.7031 12.9778 13.8906 12.7997 13.9218L12.6809 13.9468L11.184 12.4499L9.68717 10.9531L10.5372 10.1031C11.0059 9.63431 11.3965 9.24993 11.4059 9.24993C11.4153 9.24993 12.0028 9.83118 12.7153 10.5437Z"></path>
                           <path d="M10.6937 3.08129C10.15 3.26566 9.775 3.63441 9.5875 4.16879C9.5125 4.38441 9.5 4.47191 9.5 4.75004C9.5 5.26254 9.65625 5.64691 10.0031 5.99691C10.575 6.57191 11.5219 6.67191 12.2031 6.23441C12.5469 6.01566 12.7875 5.70316 12.9219 5.30316C13.0344 4.96879 13.0344 4.53129 12.9219 4.19691C12.7344 3.64066 12.3219 3.23441 11.7687 3.06566C11.4531 2.96879 11 2.97504 10.6937 3.08129ZM11.525 4.08129C12.0031 4.27816 12.1219 4.91566 11.7469 5.27191C11.2875 5.70629 10.5312 5.38441 10.5312 4.75004C10.5312 4.46566 10.6781 4.22816 10.9375 4.09066C11.075 4.01879 11.3656 4.01254 11.525 4.08129Z"></path>
                        </svg>
                        News
                    </button>


                 </div>
                 <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-pills-information" role="tabpanel" aria-labelledby="v-pills-information-tab">
                       <div class="tour-information">


                          <p>
                                At Entegris, our 50+ years of proven materials science experience in the most demanding industries allows us to easily become a strategic partner by applying our expertise to develop the cleanest, most scalable, and most reliable solutions to reduce your validation time, development costs, and time to market.
                                <br><br>
                                We combine product innovation with quick-turn customisation to deliver critical answers for your upstream and downstream needs. Our comprehensive set of bag solutions, bioreactors, mixing systems, and microcarrier separation systems meet the emerging requirements of fast-growing, single-use bioprocessing applications.
                                <br><br>
                                For biopharmaceutical, pharmaceutical and CDMOs, we are playing a supporting but crucial role in their efforts to develop and manufacture vaccine therapies for COVID-19.   We are committed to remaining a strong partner and as such, have dedicated ourselves to maintaining critical operations by relying on our business continuity plans and leveraging trusted supply partners.
                          </p>

                       </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-news" role="tabpanel" aria-labelledby="v-pills-news-tab">
                       <div class="tour-review-area">
                          {{--  --}}
                          <div class="popular-post-item-wrap">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post02.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post03.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post02.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ta-overlay-post-two">
                                        <div class="overlay-post-thumb-two">
                                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/cr_recent_post03.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="overlay-post-content-two">
                                            <a href="blog.html" class="post-tag post-tag-three">News</a>
                                            <h2 class="post-title"><a href="blog-details.html">The Game Changing ar
                                            roadeily Breakfast</a></h2>
                                            <div class="blog-post-meta white-blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>4 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          {{--  --}}
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    {{--  --}}

</main>

@endsection
