@extends('front.master-noads')

@section('content')
<!-- recent-post-area -->
<section class="recent-post-area-two pt-60 pb-60">
    <div class="container">
        <div class="recent-post-inner-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <h2 class="title">NOTES FOR AUTHORS</h2>
                        </div>
                        <div class="view-all-btn">
                            {{-- <a href="#next" class="link-btn">Write For Us
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </a> --}}
                        </div>
                        <div class="section-title-line"></div>
                    </div>
                    <div class="popular-post-item-wrap">
                       {{--  --}}
                       <div class="blog-details-wrap">
                            <div class="blog-details-content">

                              {{--  --}}
                              <div class="wfu-wrapper">


                                {{-- <h3></h3> --}}
                                <div class="wfu-content mt-5" style="justify-content: center;">
                                    <p>
                                        <strong>CONTENT:</strong> Articles submitted to African Pharmaceutical Review need to be original
                                        content unpublished in other platforms. They should be devoid of commercial bias
                                        <strong>[avoiding the mention of specific brand products and vendor companies].</strong>
                                        Authors can only mention products/processes when this is vital to support the technical
                                        context of the content.
                                    </p>
                                    <br>
                                    <p>
                                        <strong>LANGUAGE:</strong> All content must be written in the English Language.<br>
                                        <strong>WORD COUNT:</strong> Articles should be approximately between 1000 – 1200 words in
                                        length, excluding references.<br>
                                        <strong>REFERENCES:</strong> Should be cited throughout the text and ensure all references are listed
                                        at the end of the article in the references list. [Refer to American Medical Association
                                        (AMA) Style of referencing]
                                    </p>
                                    <br>
                                    <p>
                                        <strong>SUBMISSION:</strong> Authors should submit their content (in Microsoft Word format) to the
                                        email: <a href="mailto:editor@africanpharmaceuticalreview.com">editor@africanpharmaceuticalreview.com</a> . Article submitted should include; title
                                        of the article, author name, job title, date of submission and institution affiliations if any.<br><br>

                                        <strong>IMAGES/GRAPHS/FIGURES:</strong> All images to illustrate the article should be supplied in
                                        high resolution jpg files. Tables, graphs and figures should be submitted in their original
                                        source format i.e. excel, word or otherwise and they should be properly cited in the
                                        article.<br><br>

                                        <strong>AUTHOR BIOGRAPHY</strong> &amp; PHOTOGRAPH: Authors should supply a brief biography (50
                                        -85 words) of themselves and a high-resolution print quality photograph.
                                        <br><br>
                                        <strong>EDITING:</strong> The publisher reserves the right to edit any article as necessary while striving
                                        to maintain its original context.<br><br>
                                        <strong>Extra notes</strong>
                                        This is not a peer-reviewed publication.

                                        It’s not in our protocol to send a proof back to the author before publication but we
                                        commit to ensuring your content is shared in its highest form of quality as soon as viably
                                        possible.
                                        For further questions, clarifications and enquiries, please contact the editor at
                                        <a href="mailto:editor@africanpharmaceuticalreview.com">editor@africanpharmaceuticalreview.com</a>
                                    </p>

                                </div>



                                <!-- <div class="reg-header-right col-lg-6 col-md-12"></div> -->
                                {{-- <p>
                                    <div class="pull-right" id="next">
                                        <div class="view-all-btn">
                                            <a href="{{url('/')}}/write-for-us/step-2" class="link-btn">Proceed <i class="fa fa-arrow-right"></i>

                                            </a>
                                        </div>
                                    </div>
                                </p> --}}




                            </div>
                              {{--  --}}

                            </div>
                        </div>
                       {{--  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- recent-post-area-end -->
@endsection
