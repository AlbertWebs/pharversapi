@extends('front.master-noads')

@section('content')
<!-- recent-post-area -->
<section class="recent-post-area-two pt-60 pb-60">
    <div class="container">
        <div class="recent-post-inner-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <h2 class="title">Terms and Conditions</h2>
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
                                    <?php
                                        $Terms = DB::table('terms')->get();
                                    ?>
                                    @foreach ($Terms as $terms)
                                    {{-- {!!html_entity_decode($terms->content)!!} --}}
                                    @endforeach
                                    <h3>
                                        1. Introduction
                                    </h3>
                                    <p>
                                        Welcome to the African Pharmaceutical Review Website ("Website"). By accessing or using our Website and related platforms (digital/printed magazines, webinars, podcasts, digital conferences, email campaigns and other media), you agree to comply with and be bound by the following terms and conditions ("Terms"). Please review these Terms carefully. By accessing <a href="https://www.africanpharmaceuticalreview.com">www.africanpharmaceuticalreview.com</a>, you agree to accepting the following terms and conditions.
                                        You are not permitted to use our site if you disagree with the terms listed below or if you lack the authorization to do so on behalf of your company.

                                        It should be noted that you have the additional responsibility of guaranteeing that anybody who visits our website via your internet connection is informed of these terms of use and any other relevant terms and conditions, and that they abide by them.

                                        Unless otherwise agreed in writing with us, you agree to accept the particular terms and conditions listed below if you provide content to <a href="https://www.africanpharmaceuticalreview.com">www.africanpharmaceuticalreview.com</a>
                                    </p>
                                    <h3>
                                        2. Use of the Website
                                    </h3>
                                    <p>
                                        <strong>2.1 Eligibility:</strong> You must be at least 18 years old to use this Website.<br>

                                        <strong>2.2 License:</strong> We grant you a limited, non-exclusive, non-transferable, and revocable license to use our Website in accordance with these Terms.<br>

                                        <strong>2.3 Prohibited Conduct:</strong> You agree not to use the Website for any unlawful purpose or in a way that violates these Terms. Prohibited conduct includes, but is not limited to:<br>
                                        - Engaging in any activity that disrupts or interferes with the Website.<br>
                                        - Posting or transmitting any content that is unlawful, defamatory, obscene, or otherwise objectionable.<br>
                                        - Attempting to gain unauthorized access to the Website or its related systems.<br>
                                        <strong>2.4 Subscription details:</strong> You must always keep your username and password safe and confidential to only you. Do not share these credentials with third parties. If you seek to change your password, you can achieve this through the “forgot password” feature.<br>
                                        <strong>2.5 Use of our content:</strong> You are free to download and print one copy of any page from our website for your own personal, non-commercial use. You can also alert other members of your organization to content that we have posted on our website.<br>

                                        You are not permitted to make any changes to the paper or digital copies of any materials you have downloaded or printed off, nor are you permitted to use any images, photos, video, or audio clips apart from the accompanying text.<br>

                                        We shall always provide due credit to the creators of any work on our site, including any identifiable contributors who are licensors.<br>

                                        You are not permitted to utilize any portion of the content on our website for profit without first receiving authorization or a license from us. Please email us at admin@africanpharmaceuticalreview.com if you would like to do so.<br>

                                        Your right to use our site will immediately terminate and you will be required to either return or destroy any copies of the materials you have made, at our discretion, if you print off, copy, or download any portion of it in violation of these terms of use.<br>

                                    </p>
                                    <h3>
                                        3. Intellectual Property
                                    </h3>
                                    <p>
                                        <strong>3.1 Ownership:</strong> All content on the Website, including text, graphics, logos, and software, is the property of African Pharmaceutical Review or its content suppliers and is protected by intellectual property laws. All rights remain reserved.<br>

                                        <strong>3.2 Restrictions:</strong> You may not reproduce, distribute, modify, or create derivative works from any content on the Website without our express written permission.<br>
                                    </p>

                                    <h3>
                                        4. Third Party Content Providers
                                    </h3>
                                    <p>
                                        <p><strong>4.1 Ownership:</strong>&nbsp;The licensors of the content provided by our contributors and other third parties shall retain title and ownership of all intellectual property rights embodied by or otherwise incorporated into the content, and such property shall be their exclusive property.</p>
                                        <p><strong><strong>4.2 Responsibility:</strong></strong>&nbsp;You are solely responsible for any content you submit to the Website, including reviews, comments, and other communications. We do not assume any liability or obligation to review content from third parties in order to ascertain if such content could expose the licensee to liability to any third parties.</p>
                                        <p>If you submit content to us, you do so on the understanding that it will not violate any intellectual property rights, copyrights, or other rights of third parties, nor will it violate any other proprietary rights, rights of publicity, or rights of privacy anywhere in the world. In the event that any claim or action alleges that the content you have provided to us violates our acceptable use policy or infringes on the rights of a third party, you agree to indemnify our officers, employees, and agents against all costs, claims, damages, losses, and expenses.</p>
                                        <p><strong><strong>4.3 License:</strong></strong>&nbsp;By submitting content, you grant us a worldwide, irrevocable, non-exclusive, royalty-free, perpetual, and transferable license to use, reproduce, distribute, and display such content in connection with all our media platforms and to use said content to promote the Website and services we offer.</p>
                                        <p><strong><strong>4.4 Prohibited Content:</strong></strong>&nbsp;You agree not to submit any content that is false, misleading, defamatory, or infringes on the rights of any third party.</p>
                                        <p>If you believe there has been a violation of someone else's rights, please email admin@africanpharmaceuticalreview.com. After that, we'll look into the matter right away and, if necessary, let the licensor know about the possible claim.</p>
                                        <p><strong><strong>4.5 Use of Artificial Intelligence (AI):</strong></strong>&nbsp;You agree to inform the editor on the extent of use of AI in generating the content you supplied.</p>
                                        <p><strong><strong>4.6 Acceptable use policy:</strong></strong>&nbsp;You must abide by this policy and these content standards anytime you upload or provide content to us or our website, or when you have the option to communicate with other users of our website. <br /><br />Use of this Website is not permitted in any way that violates any applicable local, national, or international law or regulation; in any way that is illegal or fraudulent, or that has the potential to be illegal or fraudulent; in order to cause harm to minors or to attempt to cause harm to them in any way; in order to harass, threaten, intimidate, or degrade any individual; in order to send or arrange for the sending of any unsolicited or unauthorized promotional material, advertising, or other similar solicitation (spam); to send, upload, or intentionally transfer any content that contains terrorist content or any malicious software, Trojan horses, worms, time bombs, keystroke loggers, spyware, adware, or other computer code intended to negatively impact the functionality of any computer hardware or software.</p>
                                        <p>You may not upload, download, send, knowingly receive, use, or re-use any content that violates our content guidelines when providing content to us or our website. Every contribution needs to be true (when stating facts); sincere (when expressing opinions); and compliant with all applicable laws in Kenya as well as any other nation from which it may be posted.</p>
                                        <p>Content provided is not permitted to: be disparaging to any individual; be vulgar, hurtful, hostile, or provocative; bully, insult, intimidate, or humiliate; encourage violent content; encourage discrimination based on race, sex, religion, nationality, disability, sexual orientation, or age; violate any copyright, trade mark, or other rights of any other person; violate any legal obligation owed to a third party, such as a duty of confidentiality; encourage any illegal content or activity; be in contempt of court; be threatening, abuse, or invade another's privacy, or cause annoyance, inconvenience, or needless anxiety; be likely to harass, upset, embarrass, alarm, or annoy any other person; impersonate anyone or falsely represent yourself or your affiliation with any individual; advocate, support, incite, or aid in the commission of any illegal or criminal act, such as copyright violations or computer misuse, to name just a few examples; or contain a statement that you know, believe, or have good reason to believe members of the public to whom the statement is, or is to be, published, are likely to understand as an encouragement, direct or indirect, or other inducement to the commission, preparation, or instigation of acts of terrorism.<br />Any loss or damage we incur as a result of your violation of this policy will be your responsibility.<br /><br />Anything you submit to our website or to us will not be regarded as confidential information. All of your ownership rights to your content are still reserved, but you grant us the aforementioned license.</p>
                                        <p><br />In addition, we reserve the right to reveal your name to any third party alleging that any content you have sent us violates their intellectual property. If we believe that any of your content violates our content standards or this policy, we have the right to remove it.</p>
                                    </p>

                                    <h3>
                                        5. Disclaimers and Limitation of Liability
                                    </h3>
                                    <p>
                                        <p><strong>5.1 No Warranty:</strong>&nbsp;The Website is provided on an "as is" and "as available" basis. We make no warranties, express or implied, regarding the Website's operation or the information, content, or materials included on the Website.</p>
                                        <p><strong><strong>5.2 Limitation of Liability:</strong></strong>&nbsp;In no event shall African Pharmaceutical Review be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in connection with your use of the Website.</p>
                                    </p>

                                    <h3>
                                        6. Third-Party Links
                                    </h3>
                                    <p>
                                        The Website may contain links to third-party websites. We are not responsible for the content or practices of any third-party websites and encourage you to review their terms and conditions and privacy policies.
                                    </p>

                                    <h3>
                                        7. Privacy
                                    </h3>
                                    <p>
                                        Your use of the Website is also governed by our Privacy Policy, which is incorporated into these Terms by reference. Please review our Privacy Policy to understand our practices regarding your personal information.
                                    </p>

                                    <h3>
                                        8. Modifications
                                    </h3>
                                    <p>We reserve the right to modify these Terms at any time. Any changes will be effective immediately upon posting on the Website. Your continued use of the Website after any such modifications constitutes your acceptance of the new Terms. These Terms were most recently updated in July 2024.</p>
                                    <p>We also reserve the right to&nbsp;alter and modify the Website to better suit our users' demands, our changing business priorities, and changes to our services. When there are significant changes, we will do our best to notify you in a timely manner.</p>
                                    <p>We do maintain the right to terminate the free access at any time, but for now, our free content is available to all. <br /><br />Our site's availability and uninterrupted operation are not guaranteed, nor is any of the content on it. For operational and commercial reasons, we reserve the right to suspend, remove, or limit access to all or any portion of our website. We will, however, make every effort to provide you with notice prior to any such action. Our goal is to arrange regular maintenance during off-peak hours and notify you via the website when such work is scheduled.</p>

                                    <h3>
                                        9. Content for general use
                                    </h3>
                                    <p>Our website only offers content for general informational purposes. It is not meant to be a source of advice that you should follow. Before acting or refraining from acting based on anything you find on our website, you should consult a professional or specialist. <br /><br />We update the material on our site as often as we can, but we make no explicit or implied claims, warranties, or guarantees regarding the accuracy, completeness, or timeliness of the information on our site. <br /><br />Information supplied by African Pharmaceutical Review is solely for the proper interchange of scientific and medical knowledge; it is not medical advice and cannot be used as justification for a patient's decision to accept or reject treatment. Information printed or available on the Website</p>
                                    <p>and journal publications is accurate, provided in an impartial manner, and neither inflates irrational expectations of a successful course of treatment nor provides false information regarding the product's safety. Neither a product nor a rival will be disparaged or promoted in our articles. However, we do mention the names of branded and generic products in a factual and impartial manner, unless directed otherwise by a contributing or collaborating organization.</p>

                                    <h3>
                                        10. External links
                                    </h3>
                                    <p>The links on our site that lead to external websites and resources offered by third parties are provided solely for your information. Since we have no influence over the content of external websites or resources, you should not consider these links to be approved by us. <br /><br />We do not take responsibility for any connections to unhelpful, improper, or hazardous websites; but, if you find any, please notify us right away so that we can take down the link as soon as possible. <br /><br />As these may differ from our own, please remember to review the terms and conditions and privacy policies of any third-party website.</p>

                                    <h3>
                                        11. Complaints against our content
                                    </h3>
                                    <p>
                                        To file a complaint over any content—whether it be user-uploaded or our own—please send an email to admin@africanpharmaceuticalreview.com.
                                    </p>
                                    <h3>
                                        12. Governing Law
                                    </h3>
                                    <p>
                                        These Terms shall be governed by and construed in accordance with the laws of Kenya, without regard to its conflict of laws principles.
                                    </p>
                                    <h3>
                                        13. Contact Information
                                    </h3>
                                    <p>
                                        We appreciate your acceptance of these terms and are looking forward to have you visit. If you have any questions, please email admin@africanpharmaceuticalreview.com so that we can assist you.
                                    </p>
                                </div>





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
