<?php
   $FooterAd = DB::table('advertisements')->where('title','Leadboard')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
        <!-- ad-banner-area-end -->
        <div class=" advertisement-banner pharverse-fixed-super ad-banner-area align-center pt-20" id="pharverse-ad-leadboard">
            <div class="container">
                <div class="ad-banner-img">
                    <span class="pharverse-close-button-super" id="pharverse-close-super-button" title="close"> × </span>
                    <a href="#">
                        <img src="{{$footerAd->image}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    @endif
@endforeach
