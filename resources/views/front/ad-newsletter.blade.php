<?php
   $FooterAd = DB::table('advertisements')->where('title','ad-newsletter')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <!-- ad-banner-area-end -->
    <div class="advertisement-banner ad-banner-area align-center" id="pharverse-ad-side-home">
        <div class="container">
            <div class="ad-banner-img">

                <div class="hot-post-thumsb">

                    <a target="new" href="https://subscribers.africanpharmaceuticalreview.com/"><img src="{{$footerAd->image}}" alt="ad-newsletter"></a>
                </div>
            </div>
        </div>
    </div>
     <!-- ad-banner-area-end -->
    @endif
@endforeach
