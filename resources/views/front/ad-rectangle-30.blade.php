<?php
   $FooterAd = DB::table('advertisements')->where('title','Medium Rectangle')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <!-- ad-banner-area-end -->
    <div class="advertisement-banner ad-banner-area align-center" id="pharverse-ad-side-home-1">
        <div class="containers">
            <div class="ad-banner-img">
                <div class="hot-post-thumb">
                    <span class="pharverse-close-button-super" id="pharverse-close-super-button"  title="close"> × </span>
                    <a id="pharverse-ad-rectangle-btn-30" href="{{$footerAd->url}}"><img style="width:320px; height:120px" src="{{$footerAd->image}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
     <!-- ad-banner-area-end -->
    @endif
@endforeach

{{--  --}}
<form id="register-form-30" style="display:none" action="{{route('register-ad-click')}}" method="POST">
    @csrf
    <input type="hidden" name="ad" value="3.0-square-side">
    <input type="hidden" name="file" value="{{$footerAd->url}}">
    <input type="hidden" name="link" value="{{$footerAd->url}}">
    <input type="submit">
</form>
{{--  --}}


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#pharverse-ad-rectangle-btn-30").on('click', function(event)
        {
            // event.preventDefault();
            var dataString = $("#register-form-30").serialize();
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
