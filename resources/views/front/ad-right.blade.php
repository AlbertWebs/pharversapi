<?php
   $FooterAd = DB::table('advertisements')->where('title','Wallpaper-left')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <div style="position: absolute; top: 283px; right:5px" class="wraps advertisement-banner wrapRight"  id="wrapRight">
        <div id="ad2">
           <div id="placement_255246_0_ins" style="margin:0;padding:0;">
              <a href="#" target="_blank" rel="nofollow">
              <img src="{{$footerAd->image}}" alt="wrapRight " title="wrapRight " border="0" width="210" height="900"></a>
           </div>
        </div>

     </div>
    @endif
@endforeach
