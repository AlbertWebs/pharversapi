<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="/site.webmanifest">
        <!-- Place favicon.ico in the root directory -->

        {{--  --}}
        <title>African Pharmaceutical Review - Keep up to date with the Latest News, Articles and Insights on the drug manufacturing, trade, technology and pharma supply chains in Africa.</title>
        <meta name="description" content="Get the latest news, interviews insights and developments of the African Pharmaceutical Industry. African Pharmaceutical Review keeps you up to date." />
		<meta name="robots" content="max-image-preview:large" />
		<link rel="canonical" href="{{url('/')}}" />

		<meta property="og:locale" content="en_US" />
		<meta property="og:site_name" content="African Pharmaceutical Review" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="African Pharmaceutical Review - Keep up to date with the Latest News, Articles and Insights on the drug manufacturing, trade, technology and pharma supply chains in Africa." />
		<meta property="og:description" content="Get the latest news, interviews insights and developments of the African Pharmaceutical Industry. African Pharmaceutical Review keeps you up to date." />
		<meta property="og:url" content="{{url('/')}}" />
		<meta property="og:image" content="{{url('/')}}/uploads/logo/log.png" />
		<meta property="og:image:secure_url" content="{{url('/')}}/uploads/logo/log.png" />
		<meta property="og:image:width" content="1000" />
		<meta property="og:image:height" content="194" />

		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@af_pharmareview" />
		<meta name="twitter:title" content="African Pharmaceutical Review - Home" />
		<meta name="twitter:description" content="Get the latest news, interviews insights and developments of the African Pharmaceutical Industry. African Pharmaceutical Review keeps you up to date." />
		<meta name="twitter:creator" content="@af_pharmareview" />
		<meta name="twitter:image" content="{{url('/')}}/uploads/logo/log.png" />

	    @include('front.schema-home')
        {{--  --}}

        <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/swiper-bundle.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('theme/assets/css/ads.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('theme/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/ads.css')}}">
    </head>
    <body>
        <h1 style="display: none">The African Pharmaceutical Review is an online resource for readers and professionals working or have an interest in the pharmaceutical industry.</h1>

        <!-- preloader -->
        <div id="preloader">
            <div class="loader-inner">
                <div id="loader">
                    <h2 id="bg-loader">African Pharmaceutical Review<span>.</span></h2>
                    <h2 id="fg-loader">African Pharmaceutical Review<span>.</span></h2>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- Dark/Light-toggle -->
        <div class="darkmode-trigger">
            <label class="modeSwitch">
                <input type="checkbox">
                <span class="icon"></span>
            </label>
        </div>
        <!-- Dark/Light-toggle-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        @include('front.header')
        <!-- header-area-end -->


        @yield('content')

        <!-- footer-area -->
        @include('front.footer')
        <!-- footer-area-end -->


        @include('front.footer-ad')



        @include('front.ad-left')

        @include('front.ad-right')




        <!-- JS here -->
        <script src="{{asset('theme/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/swiper-bundle.js')}}"></script>
        <script src="{{asset('theme/assets/js/ajax-form.js')}}"></script>
        <script src="{{asset('theme/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/main.js')}}"></script>
        <script src="{{asset('theme/assets/js/thirdnav.js')}}"></script>
        <script src="{{asset('theme/assets/js/newFile.js')}}"></script>

    </body>

</html>
