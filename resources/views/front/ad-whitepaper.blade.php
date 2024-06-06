<?php
   $FooterAd = DB::table('advertisements')->where('title','Interviews')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <!-- ad-banner-area-end -->
    <div class="advertisement-banner ad-banner-area align-center pt-70" id="pharverse-ad-whitepapers">
        <div class="container">
            <div class="ad-banner-img">
                <span class="pharverse-close-button-super" id="pharverse-close-super-button"  title="close"> × </span>
                <a href="#">
                    <img src="{{$footerAd->image}}" alt="">
                </a>
            </div>
        </div>
    </div>
     <!-- ad-banner-area-end -->
    @endif
@endforeach
