<?php
   $FooterAd = DB::table('advertisements')->where('title','Fixed Footer')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
        <div class="ad-banner-area">
            <div class="pharverse-fixed-footer pharverse-sticky advertisement-banner" id="footer-ad">
                <span class="pharverse-close-button pharverse-close-button-super" id="pharverse-close-button"  title="close"> × </span>
                <div id="placement_fixed_footer">
                    <a id="pharverse-ad-whitepapers-btn-Footer" href="{{$footerAd->url}}" target="new"  class="placement_fixed_footer-img">
                        <img src="{{$footerAd->image}}" alt="Footer Ad" title="Footer Ad" border="0" >
                    </a>
                </div>
            </div>
        </div>
    @endif
@endforeach



{{--  --}}
<form id="register-form-Footer" style="display:none" action="{{route('register-ad-click')}}" method="POST">
    @csrf
    <input type="hidden" name="ad" value="Fixed Footer">
    <input type="hidden" name="file" value="{{$footerAd->url}}">
    <input type="hidden" name="link" value="{{$footerAd->url}}">
    <input type="submit">
</form>
{{--  --}}


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#pharverse-ad-whitepapers-btn-Footer").on('click', function(event)
        {
            // event.preventDefault();
            var dataString = $("#register-form-Footer").serialize();
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
