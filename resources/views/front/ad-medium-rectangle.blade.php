<?php
   $FooterAd = DB::table('advertisements')->where('title','Medium Rectangle')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <!-- ad-banner-area-end -->
    <div class="col-lg-3">
        <div class="advertisement-banner ad-banner-area align-center" id="pharverse-ad-side-home-2">
            <div class="ta-overlay-post-two">
                <div class="overlay-post-thumb-two">
                    <a href="{{$footerAd->url}}"><img src="{{$footerAd->image}}" alt="Ads"></a>
                </div>
            </div>
        </div>
    </div>
     <!-- ad-banner-area-end -->
    @endif
@endforeach

