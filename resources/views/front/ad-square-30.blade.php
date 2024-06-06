<?php
   $FooterAd = DB::table('advertisements')->where('title','3.0-square-side')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <!-- ad-banner-area-end -->
    <div class="advertisement-banner ad-banner-area align-center" id="pharverse-ad-side-home">
        <div class="container">
            <div class="ad-banner-img">

                <div class="hot-post-thumb">
                    <span class="pharverse-close-button-super" id="pharverse-close-super-button"  title="close"> × </span>
                    <a href="blog-details.html"><img src="{{$footerAd->image}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
     <!-- ad-banner-area-end -->
    @endif
@endforeach
