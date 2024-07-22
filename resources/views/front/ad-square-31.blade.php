<?php
   $FooterAd = DB::table('advertisements')->where('title','3.1-square-side')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <!-- ad-banner-area-end -->
    <div class="advertisement-banner ad-banner-area align-center" id="pharverse-ad-side-home-2">
        <div class="containers">
            <div class="ad-banner-img">

                <div class="hot-post-thumb">
                    <span class="pharverse-close-button-super" id="pharverse-close-super-button"  title="close"> × </span>
                    <a id="pharverse-ad-whitepapers-btn-31" href="{{$footerAd->url}}"><img src="{{$footerAd->image}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
     <!-- ad-banner-area-end -->
    @endif
@endforeach

{{--  --}}
<form id="register-form-31" style="display:none" action="{{route('register-ad-click')}}" method="POST">
    @csrf
    <input type="hidden" name="ad" value="Interviews">
    <input type="hidden" name="file" value="{{$footerAd->url}}">
    <input type="hidden" name="link" value="{{$footerAd->url}}">
    <input type="submit">
</form>
{{--  --}}


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#pharverse-ad-whitepapers-btn-31").on('click', function(event)
        {
            event.preventDefault();
            var dataString = $("#register-form-31").serialize();
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
