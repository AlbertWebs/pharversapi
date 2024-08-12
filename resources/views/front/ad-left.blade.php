<?php
   $FooterAd = DB::table('advertisements')->where('title','Wallpaper-left')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <div style="position: absolute; top: 283px; left:5px;" class="wraps advertisement-banner wrapLeft"  id="wrapLeft">
        <span class="pharverse-close-button pharverse-close-button-super" id="pharverse-close-button"  title="close"> × </span>
        <div id="ad1">
           <div id="placement_255245_0_ins" style="margin:0;padding:0;"><a id="pharverse-ad-whitepapers-btn-Left" href="{{$footerAd->url}}" target="new">
              <img src="{{$footerAd->image}}" alt="wrapLeft " title="wrapLeft" border="0" width="210" height="900"></a>
           </div>
        </div>
    </div>
    @endif
@endforeach



{{--  --}}
<form id="register-form-Left" style="display:none" action="{{route('register-ad-click')}}" method="POST">
    @csrf
    <input type="hidden" name="ad" value="Interviews">
    <input type="hidden" name="file" value="{{$footerAd->url}}">
    <input type="hidden" name="link" value="{{$footerAd->url}}">
    <input type="submit">
</form>
{{--  --}}


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#pharverse-ad-whitepapers-btn-Left").on('click', function(event)
        {
            // event.preventDefault();
            var dataString = $("#register-form-Left").serialize();
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
