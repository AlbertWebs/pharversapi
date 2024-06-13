<?php
   $FooterAd = DB::table('advertisements')->where('title','ad-newsletter')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <div class="row justify-content-center">
        <div class="row">
        <!-- ad-banner-area-end -->
            <div class="col-lg-6 p-3fix">
                <div class="advertisement-banners ad-banner-area align-center" id="pharverse-ad-side-home">
                    <div class="containes">
                        <div class="ad-banner-img">

                            <div class="hot-post-thumsb">

                                <a target="new" href="https://subscribers.africanpharmaceuticalreview.com/"><img class="ad-newsletter-border" src="{{$footerAd->image}}" alt="ad-newsletter"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 theme-bg">
                <h5 class="newsletter-heading">Read the latest issue</h5>
                <p class="newsletter-text">All subscriptions include online membership, giving you access to the journal and exclusive content.</p></div>
            </div>
        <!-- ad-banner-area-end -->
        </div>
    </div>
    <div class="subscribe-button">
        <a href="https://subscribers.africanpharmaceuticalreview.com/" class="btn btn-two">Get Free Copy</a>
    </div>
    @endif
@endforeach
