<?php
   $FooterAd = DB::table('advertisements')->where('title','Wallpaper-left')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <div style="position: absolute; top: 283px; left:5px;" class="wraps advertisement-banner wrapLeft"  id="wrapLeft">
        <span class="pharverse-close-button pharverse-close-button-super" id="pharverse-close-button"  title="close"> × </span>
        <div id="ad1">
           <div id="placement_255245_0_ins" style="margin:0;padding:0;"><a href="#" target="_blank" rel="nofollow">
              <img src="{{$footerAd->image}}" alt="wrapLeft " title="wrapLeft" border="0" width="210" height="900"></a>
           </div>
        </div>
    </div>
    @endif
@endforeach
