<?php
   $FooterAd = DB::table('advertisements')->where('title','Fixed Footer')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
        <div class="ad-banner-area">
            <div class="pharverse-fixed-footer pharverse-sticky advertisement-banner" id="footer-ad">
                <span class="pharverse-close-button pharverse-close-button-super" id="pharverse-close-button"  title="close"> × </span>
                <div id="placement_fixed_footer">
                    <a href="#" target="_blank" rel="nofollow" class="placement_fixed_footer-img">
                        <img src="{{$footerAd->image}}" alt="Footer Ad" title="Footer Ad" border="0" >
                    </a>
                </div>
            </div>
        </div>
    @endif
@endforeach
