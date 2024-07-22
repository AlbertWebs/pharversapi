<?php
   $FooterAd = DB::table('advertisements')->where('title','Wallpaper-left')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <div style="position: absolute; top: 283px; right:5px" class="wraps advertisement-banner wrapRight"  id="wrapRight">
        <div id="ad2">
           <div id="placement_255246_0_ins" style="margin:0;padding:0;">
              <a id="pharverse-ad-whitepapers-btn-walpaper-left" href="{{$footerAd->url}}" target="_blank" rel="nofollow">
              <img src="{{$footerAd->image}}" alt="wrapRight " title="wrapRight " border="0" width="210" height="900"></a>
           </div>
        </div>

     </div>
    @endif
@endforeach




{{--  --}}
<form id="register-form-Medium-walpaper-left" style="display:none" action="{{route('register-ad-click')}}" method="POST">
    @csrf
    <input type="hidden" name="ad" value="Wallpaper-left">
    <input type="hidden" name="file" value="{{$footerAd->url}}">
    <input type="hidden" name="link" value="{{$footerAd->url}}">
    <input type="submit">
</form>
{{--  --}}


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#pharverse-ad-whitepapers-btn-walpaper-left").on('click', function(event)
        {
            // event.preventDefault();
            var dataString = $("#register-form-Medium-walpaper-left").serialize();
            $.ajax({
                type: "POST",
                url: "{{route('register-ad-click')}}",
                data: dataString,
                success: function () {
                    // Display message back to the user here
                }
            });
        });
</script>
