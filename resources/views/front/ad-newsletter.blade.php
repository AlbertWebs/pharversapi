<?php
   $FooterAd = DB::table('advertisements')->where('title', 'ad-newsletter')->first();
   $NewsletterLink = DB::table('links')->first();

   $newsletterUrl = $NewsletterLink?->link ?: $FooterAd?->url;
   $newsletterImage = $NewsletterLink?->image ?: $FooterAd?->image;
   if (empty($newsletterUrl)) {
       $newsletterUrl = 'https://subscribers.africanpharmaceuticalreview.com/';
   }

   $showNewsletter = !empty($newsletterImage);
?>
@if($showNewsletter)
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

                                <a id="pharverse-ad-whitepapers-btn--newsletter" target="new" href="{{ $newsletterUrl }}"><img class="ad-newsletter-border" src="{{ $newsletterImage }}" alt="ad-newsletter"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ad-banner-area-end -->
        </div>
    </div>
    <div class="subscribe-button">
        <a href="{{ $newsletterUrl }}" class="btn btn-two">Get Free Copy</a>
    </div>
    <form id="register-form-newsletter" style="display:none" action="{{route('register-ad-click')}}" method="POST">
        @csrf
        <input type="hidden" name="ad" value="ad-newsletter">
        <input type="hidden" name="file" value="{{ $newsletterUrl }}">
        <input type="hidden" name="link" value="{{ $newsletterUrl }}">
        <input type="submit">
    </form>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#pharverse-ad-whitepapers-btn--newsletter").on('click', function(event)
        {
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
