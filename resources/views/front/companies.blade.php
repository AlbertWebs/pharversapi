@extends('front.master')

@section('content')
<!-- main-area -->
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Content Hubs</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- ad-banner-area -->
        <div class="ad-banner-area pt-30">
            <div class="container">
                <div class="ad-banner-img ad-banner-img-two text-center advertisement-banner">
                    {{--  --}}
                    <div class="pharverse-fixed-super" id="pharverse-fixed-super">
                        <span class="pharverse-close-button-super" id="pharverse-close-super-button" onclick="closeSuperBtn()" title="close"> × </span>
                            <a href="#" target="_blank" rel="nofollow">
                                <img src="{{url('/')}}/uploads/ads/ad-footer.gif" alt="Footer Ad" title="Footer Ad" border="0" >
                            </a></div>
                        </div>
                    </div>
                    {{--  --}}
                </div>
            </div>
        </div>
        <!-- ad-banner-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-60 pb-60">
            <div class="container">
                <div class="author-inner-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">

                            <div class="weekly-post-item-wrap-three">
                                <div class="row">
                                    <?php
                                    $Companies = DB::table('companies')->get();
                                    ?>
                                    @foreach ($Companies as $companies)
                                    <div class="col-md-3">
                                        <div class="weekly-post-three">
                                            <div class="weekly-post-thumbs">
                                                <a class="weekly-post-thumbs" href="{{url('/')}}/companies/featured-companies/{{$companies->slung}}"><img src="{{url('/')}}/uploads/logo/{{$companies->logo}}" alt=""></a>
                                            </div>
                                            <div class="weekly-post-content company-title">
                                                <h2 class="post-title"><a href="{{url('/')}}/companies/featured-companies/{{$companies->slung}}">{{$companies->title}}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        @include('front.newsletter')

    </main>
    <!-- main-area-end -->
<!-- main-area-end -->
@endsection
