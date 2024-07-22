<?php
   $FooterAd = DB::table('advertisements')->where('title','ad-newsletter')->get();
?>
@foreach ($FooterAd as $footerAd)
    @if($footerAd->active == "1")
    <div class="widget-title mb-newsletter">
        <h6 class="title">Explore Our Latest issue</h6>
        <div class="section-title-line"></div>
    </div>
    <div class="row justify-content-center">
        <div class="row">
        <!-- ad-banner-area-end -->
            <div class="col-lg-12 p-3fix">
                <div class="advertisement-banners ad-banner-area align-center" id="pharverse-ad-side-home">
                    <div class="containes">
                        <div class="ad-banner-img">

                            <div class="hot-post-thumsb">

                                <a id="pharverse-ad-whitepapers-btn--newsletter" target="new" href="https://subscribers.africanpharmaceuticalreview.com/"><img class="ad-newsletter-border" src="{{$footerAd->image}}" alt="ad-newsletter"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 theme-bg">
                <h5 class="newsletter-heading">Read the latest issue</h5>
                <p class="newsletter-text">All subscriptions include online membership, giving you access to the journal and exclusive content.</p></div>
            </div> --}}
        <!-- ad-banner-area-end -->
        </div>
    </div>
    <div class="subscribe-button">
        <a href="https://subscribers.africanpharmaceuticalreview.com/" class="btn btn-two">Get Free Copy</a>
    </div>
    @endif
@endforeach


{{--  --}}
<form id="register-form-newsletter" style="display:none" action="{{route('register-ad-click')}}" method="POST">
    @csrf
    <input type="hidden" name="ad" value="3.0-square-side">
    <input type="hidden" name="file" value="{{$footerAd->url}}">
    <input type="hidden" name="link" value="{{$footerAd->url}}">
    <input type="submit">
</form>
{{--  --}}


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#pharverse-ad-whitepapers-btn--newsletter").on('click', function(event)
        {
            // event.preventDefault();
            var dataString = $("#register-form-newsletter").serialize();
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
