<?php
   $FooterAd = DB::table('advertisements')->where('title','Super Leadboard')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
        <!-- ad-banner-area-end -->
        <div class=" advertisement-banner pharverse-fixed-super ad-banner-area align-center pt-20" id="pharverse-ad-superleadboard">
            <div class="container">
                <div class="ad-banner-img">
                    <span class="pharverse-close-button-super" id="pharverse-close-super-button" title="close"> × </span>
                    <a href="{{$footerAd->url}}">
                        <img src="{{$footerAd->image}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    @endif
@endforeach
