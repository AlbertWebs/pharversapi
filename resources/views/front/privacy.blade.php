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
                            <h2 class="title">Privacy Policy</h2>
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

                                <div class="wfu-content mt-5" style="justify-content: center;">
                                    <?php
                                        $Terms = DB::table('privacies')->get();
                                    ?>
                                    @foreach ($Terms as $terms)
                                    {{-- {!!html_entity_decode($terms->content)!!} --}}
                                    @endforeach
                                    <div>
                                        <h1><strong>Privacy Policy</strong></h1>
                                        <h2><strong>1.Introduction</strong></h2>
                                        <p>Welcome to Pharvers&rsquo; privacy policy.</p>
                                        <p>This Privacy Statement explains the personal data we collect, how we process it and for what purpose. It also describes how Pharvers handles your data when you use any of our products and the controls Pharvers has established to safeguard your data. The Privacy Statement applies to our visitors who either physically visit our premises or our website, users of any of our products and services, suppliers, agents, customers and all our stakeholders.&nbsp;</p>
                                        <p>We do not intentionally gather information about minors from our website, nor are they the target audience for them.</p>
                                        <p>We urge you to read the following carefully to understand our views and practices regarding your Personal Data and how we will treat it.</p>
                                        <p>This privacy statement is meant to serve as a supplement to existing notices and privacy policies, not to replace them.</p>
                                        <h2><strong>2.Definition of terms</strong></h2>
                                        <p><strong>Act</strong>&nbsp;means the Data Protection Act 2019</p>
                                        <p><strong>Customer, you</strong>&nbsp;and&nbsp;<strong>your</strong>: means any of the following (a) subscribers to our Publications (b) customers who have entered into a contract with us for the supply of our products and services (c) attendees at our events (d) attendees at awards (e) editorial contributors.</p>
                                        <p><strong>Data Protection Laws</strong>&nbsp;means the Data Protection Act and all applicable laws and regulations relating to the processing of personal data and privacy, including where applicable the guidance of any supervisory authority, and the equivalent of any of the foregoing in any relevant jurisdiction.</p>
                                        <p><strong>Data Controller, Data Processor, Data Subject</strong>&nbsp;and&nbsp;<strong>Personal Data&nbsp;</strong>all have the meaning given to them in the Act.</p>
                                        <p><strong>Events</strong>&nbsp;means awards, conferences, competitions, exhibitions, roundtables, polls, surveys managed by Pharvers.</p>
                                        <p><strong>Content and Information Services&nbsp;</strong>means market research, surveys, polls, market analysis.</p>
                                        <p><strong>Publications</strong>&nbsp;means printed publications, digital publications, magazines, and e-newsletters published by the Pharvers.</p>
                                        <p><strong>Site(s)</strong>&nbsp;means any of Pharvers&rsquo; websites including this website.</p>
                                        <p><strong>&ldquo;Pharvers,&rdquo; &ldquo;We,&rdquo; &ldquo;Our,&rdquo; &ldquo;Ours,&rdquo; and &ldquo;Us</strong>,&rdquo; means Pharvers Ltd and includes its successors in title and assigns, its affiliates and/or its subsidiaries as may from time to time be specified by Pharvers to you.</p>
                                        <p><strong>&ldquo;Our Products&rdquo;</strong> includes but is not limited to African Pharmaceutical Review.</p>
                                        <p>&ldquo;<strong>Processing</strong>&rdquo; collectively means handling, collecting, using, altering, merging, linking, organizing, disseminating, storing, protecting, retrieving, disclosing, erasing, archiving, destroying, or disposing of your personal data.</p>
                                        <h2><strong>3. Information collected</strong></h2>
                                        <p><strong>Account Data</strong>: including your name, address, email address and telephone number, which will be supplied by you or your employer when you register for an account with. This will be processed for the purposes of operating our Site, providing subscriptions/renewals to our Publications, providing our products and services, ensuring the security of our Site and services, maintaining back-ups of our databases and sending communications to you.</p>
                                        <p><strong>Profile Data</strong>&nbsp;&ndash; this will be including your name, address, email address and telephone number, job function/title, business demographics in relation to your role, business interests, business areas, business expertise. This be supplied by you when you register a profile, complete surveys, take part in competitions/polls, contribute services (e.g. editorial services), contribute to our Publications, attend or contribute to events, register enquiry or tell us about any problems with our Site. This data&nbsp;be processed for enabling and monitoring your use of our Site, products and services.</p>
                                        <p><strong>Publication Data</strong>&nbsp;&ndash; including information that you may post for publication on our Site and/or on our Publications across any media platforms including print, digital or on-line (including, without limitation, discussion boards, chat rooms or other social media platforms on our Site);<br /> It will&nbsp;be supplied by you when you post material for publication on our Site and will be processed for the purposes of enabling such publication and administering our Site, products and services</p>
                                        <p><strong>Enquiry Data</strong>&nbsp;including information that you may supply in any enquiry which you submit to us regarding our Publications, subscriptions, products and/or services. This will be supplied by you or your employer when you submit an enquiry to us whether by telephone, email, via our Site or other channel and will be processed for the purpose of marketing, offering and selling Publications, subscriptions, products and/or services to you.</p>
                                        <p><strong>Transaction Data</strong>&nbsp;&ndash; this will include information which you are required to provide to us in connection with your purchase of Publications, subscriptions, events, Content and Information Services, products and services from us such as your name, address, email address, telephone number, card details and transaction details. This will be supplied by you at the point of purchase and will be processed for the purpose of supplying you with the Publications, subscriptions, products and/or services you have purchased; record-keeping purposes; marketing purposes</p>
                                        <p><strong>Notification Data</strong>&nbsp;including information which you are required to provide to us for the purpose of subscribing to free email notifications, newsletters etc. (<strong>Notifications</strong>). This will be supplied by you when you subscribe for such Notifications and will be processed by us for the purpose of sending you such Notifications as well as notifications from Pharvers and selected third parties.</p>
                                        <p><strong>Attendee Data</strong>&nbsp;including information which you are required to provide to us for the purpose of attending any of our Events. This will be supplied by you, or your employer, when you register to attend an event and will be processed by us for the purpose of completing your registration for an event, sending you event details and notifications, reminders, entry badges and details which are an integral part of the event.</p>
                                        <p><strong>Marketing and Communications Data</strong>&nbsp;&ndash; this will include your preferences in receiving marketing from the Group and our third parties and your communication preferences.</p>
                                        <p>Whenever you access the Site we will automatically collect the following information:</p>
                                        <p><strong>Usage Data</strong>&nbsp;including information about your use of our Site, products and services. This will be collected by our [analytics tracking system both advertising, customer insight]; including technical information such as your Internet protocol (IP) address, geographical locations, browser details, operating system, length of visit, page views, website navigation paths, details of the timing, frequency and patter of your Site usage and other information about your visit collected via cookies.</p>
                                        <h2><strong>4.How personal data is collected</strong></h2>
                                        <p><strong>Direct interactions.</strong> You may give us your Identity, Contact and Financial Data by filling in forms or by corresponding with us by post, phone, email or otherwise. This includes personal data you provide when you:</p>
                                        <ul>
                                        <li>request our products or services (e.g. a digital or print magazine);</li>
                                        <li>create an account on one of our websites;</li>
                                        <li>subscribe to our services or publications;</li>
                                        <li>request marketing to be sent to you;</li>
                                        <li>enter a competition, promotion or survey; or</li>
                                        <li>give us feedback or contact us.</li>
                                        </ul>
                                        <p><strong>Automated technologies or interactions.</strong> As you interact with our websites, we will automatically collect Technical Data about your equipment, browsing actions and patterns. We collect this personal data by using cookies, server logs and other similar technologies. We may also receive Technical Data about you if you visit other websites employing our cookies.</p>
                                        <p><strong>Third parties or publicly available sources.</strong> We will receive personal data about you from various third parties and public sources as set out below:</p>
                                        <ul>
                                        <li>Identity, Contact and Technical Data from the following parties:</li>
                                        </ul>
                                        <p>(a) analytics providers such as Google</p>
                                        <p>(b) service providers</p>
                                        <p>(c) other search information providers based both inside and outside the Kenya.</p>
                                        <ul>
                                        <li>Contact, Financial and Transaction Data from providers of technical, payment and delivery services.</li>
                                        <li>Identity and Contact Data from publicly available sources</li>
                                        </ul>
                                        <h2><strong>5.Use of information</strong></h2>
                                        <p>We will only use your personal data when the law allows us to. Most commonly, we will use your personal data in the following circumstances:</p>
                                        <p>Where we need to perform the contract, we are about to enter into or have entered into with you.<br /> Where it is necessary for our legitimate interests (or those of a third party) and your interests and fundamental rights do not override those interests.<br /> Where we need to comply with a legal or regulatory obligation.</p>
                                        <p>Generally, we do not rely on consent as a legal basis for processing your personal data. This is because in most cases the processing is required to perform the contract with you, or, because it is necessary for our legitimate interests (or those of a third party) and your interests and fundamental rights do not override those interests. You have the right to withdraw consent to marketing at any time by contacting us.</p>
                                        <p>In addition, we may process any of your personal data identified in this policy where this is necessary for:</p>
                                        <p>&nbsp;the establishment, exercise or defense of legal claims &ndash; the legal basis for this is our legitimate interests, in particular the protection and assertion of our legal rights, your legal rights or the legal rights of others.</p>
                                        <p>The purposes of obtaining or maintaining insurance, managing risk, or obtaining professional advice &ndash; the legal basis for this processing is our legitimate interests (the protection of our business).</p>
                                        <p>You may contact us to let us know that you do not wish us to process your Personal Data through admin@africanpharmaceuticalreview.com.</p>
                                        <p><strong>Purpose/Activity</strong>&nbsp;- To register you as (a) a new customer (b) a new user/profile in respect of our Site (c) a subscriber to any Notifications (d) an attendee at any Events<br /><strong>Type of data used</strong>&nbsp;&ndash; (a) Account (b) Profile, (c) Notification, (d) Attendee <br /><strong>Lawful basis for processing including basis of legitimate interest</strong>&nbsp;&ndash; (a) Performance of a contract with you (b) Necessary for our legitimate interests, (c) Consent (in some cases)</p>
                                        <p><strong>Purpose/Activity</strong>&nbsp;To process and deliver your order including: (a) Manage payments, fees and charges (b) Manage your subscriptions (c) Collect and recover money owed to us.<br /><strong>Type of data used</strong>&nbsp;&ndash; (a) Account (b) Enquiry (c) Transactional (d) Notification (e) Marketing and Communications<br /><strong>Lawful basis for processing including basis of legitimate interest&nbsp;</strong>&ndash; (a) Performance of a contract with you (b) Necessary for our legitimate interests</p>
                                        <p><strong>Purpose/Activity&nbsp;</strong>- To manage our relationship with you which will include: (a) Notifying you about changes to our terms or privacy policy (b) supplying Notifications to you; (c) Asking you to leave a review or take a survey<br /><strong>Type of data used&nbsp;</strong>&ndash; (a) Account (b) Profile (c) Notification (d) Marketing and Communications.<br /><strong>Lawful basis for processing including basis of legitimate interest&nbsp;</strong>(a) Performance of a contract with you (b) Necessary to comply with a legal obligation (c) Necessary for our legitimate interests (to keep our records updated and to study how customers use our products/services.</p>
                                        <p><strong>Purpose/Activity</strong>&nbsp;- To enable you to partake in a prize draw, competition or complete a survey.<br /><strong>Type of data used</strong>&nbsp;&ndash; (a) Account (b) Profile (c) Marketing and Communications<br /><strong>Lawful basis for processing including basis of legitimate interest</strong>&nbsp;&ndash; (a) Performance of a contract with you (b) Necessary for our legitimate interests (to study how customers use our products/services, to develop them and grow our business)</p>
                                        <p><strong>Purpose/Activity</strong>&nbsp;- To administer and protect our business and this website (including troubleshooting, data analysis, testing, system maintenance, support, reporting and hosting of data)<br /><strong>Type of data used</strong>&nbsp;&ndash; (a) Account (b) Profile (c) Usage (d) Marketing and Communications (e) Technical<br /><strong>Lawful basis for processing including basis of legitimate interest</strong>&nbsp;&ndash; (a) Necessary for our legitimate interests (for running our business, provision of administration and IT services, network security, to prevent fraud and in the context of a business reorganization or group restructuring exercise) (b) Necessary to comply with a legal obligation</p>
                                        <p><strong>Purpose/Activity</strong>&nbsp;- To deliver relevant website content and advertisements to you and measure or understand the effectiveness of the advertising we serve to you<br /><strong>Type of data used</strong>&nbsp;- a) Account (b) Profile (c) Usage (d) Marketing and Communications (e) Technical<br /><strong>Lawful basis for processing including basis of legitimate interest</strong>&nbsp;&ndash; (a) Necessary for our legitimate interests (to study how customers use our products/services, to develop them, to grow our business and to inform our marketing strategy) (b) Consent</p>
                                        <p><strong>Purpose/Activity</strong>&nbsp;- To use data analytics to improve our website, products/services, marketing, customer relationships and experiences<br /><strong>Type of data used</strong>&nbsp;&ndash; (a) Technical (b) Usage<br /><strong>Lawful basis for processing including basis of legitimate interest&nbsp;</strong>&ndash; Necessary for our legitimate interests (to define types of customers for our products and services, to keep our website updated and relevant, to develop our business and to inform our marketing strategy)</p>
                                        <p><strong>Purpose/Activity</strong>&nbsp;- To make suggestions and recommendations to you about goods or services that may be of interest to you<br /><strong>Type of data used</strong>&nbsp;&ndash; (a) Account (b) Profile (c) Technical (d) Usage<br /><strong>Lawful basis for processing including basis of legitimate interest</strong>&nbsp;&ndash; (a) Necessary for our legitimate interests (to develop our products/services and grow our business) (b) Consent (in some cases</p>
                                        <h2><strong>6.Retention of information</strong></h2>
                                        <p>We will only retain your personal data only as long as may be reasonably necessary to satisfy the purpose for which it is collected and for purposes of satisfying any legal and regulatory requirements.</p>
                                        <p>The data may also be retained for historical, statistical, journalistic literature or research purposes.&nbsp;</p>
                                        <p>To determine the appropriate retention period for personal data, we consider the amount, nature and sensitivity of the personal data, the potential risk of harm from unauthorized use or disclosure of your personal data, the purposes for which we process your personal data and whether we can achieve those purposes through other means like anonymization or Pseudonymization. At the end of the retention period and so that the data is held indefinitely by the Group, we may anonymize or Pseudonymize your data so that it can no longer be associated with you.</p>
                                        <h2><strong>7.Disclosure of personal data</strong></h2>
                                        <p>We may disclose your personal information to:</p>
                                        <p>Any member of our Group insofar as reasonably necessary for the purposes, and on the legal grounds, set out in this privacy policy.<br /> Our insurers and/or professional advisers as may be reasonably necessary for the purposes of obtaining or maintain insurance, managing risk, taking professional advice, or the establishment, exercise, defense of legal claim.<br /> A purchaser in circumstances where the Company or substantially all of its assets are acquired by a third party, in which case personal data held by the Company will be one of the transferred assets.<br /> Other third parties: who supply goods and/or services to the Group in order that Group may perform its contractual, legal and other obligations including, but not limited to, our suppliers and sub-contractors, service providers, distribution services, telemarketing services, debt collection services;<br /><strong>I</strong>f we are under a duty to disclose or share your Personal Data in order to :</p>
                                        <ul>
                                        <li>comply with any legal obligation, or in order to enforce or apply Terms; or</li>
                                        <li>to protect the rights, property, or safety of Pharvers, our clients, or others. This includes exchanging information with other companies and organizations for the purposes of fraud protection and credit risk reduction;</li>
                                        <li>to assist us in improving our products and services. We monitor aggregated data that is collected by our Service and may share this with third parties collectively and in an anonymous way. This data will not reveal personal information</li>
                                        </ul>
                                        <p>We will disclose Transaction Data to our payment service provider to the extent necessary for the purposes of processing payments, arranging refunds, dealing with complaints and queries. Our payment service providers&rsquo; will process certain data in accordance with the terms of their own privacy policy details of which can be supplied on request.</p>
                                        <p>We will disclose Profile Data, Transaction Data, Attendee Data, Marketing and Communications data and Enquiry Data to one or more selected third-party service providers who assist us with our activities, such as hosting providers, and other IT or payment service providers, may also have access to personal information held by us and may use this information on our behalf.</p>
                                        <p>We may authorize third parties to market their products and services to you. However, we only do this if you have indicated that you are happy for us to do so, and we only do it within the industrial sector. Your Personal Data will not leave the Company&rsquo;s control and the third party never sees or handles your data. We receive the communication content from the third party and then send it to you on their behalf.</p>
                                        <h2><strong>8.International transfers</strong></h2>
                                        <p>We may need to transfer your personal data outside of the Republic of Kenya. Where we send your data outside Kenya, we will ensure that your data is properly protected in accordance with the applicable data protection laws of that country.</p>
                                        <h2><strong>9.Safeguarding and protecting of your personal information</strong></h2>
                                        <p>Pharvers has put in place technical and operational measures to ensure integrity and confidentiality of your data through information classification, access control, data encryption, physical and environmental security and monitoring and compliance with provisions of the Data Protection Act, 2019 and the regulations thereto.</p>
                                        <h2><strong>10.Your rights</strong></h2>
                                        <p>Your rights as a data subject include:&nbsp;</p>
                                        <p>Right to be informed that we are collecting personal data about you and the use to which your personal data is to be put;&nbsp;</p>
                                        <p>Right to access personal data that is in our custody;&nbsp;</p>
                                        <p>Right to request that we correct your personal data where it is inaccurate or incomplete;&nbsp;</p>
                                        <p>Right to request that we erase your personal data noting that we may continue to retain your information if obligated by the law or entitled to do so;&nbsp;</p>
                                        <p>Right to object and withdraw your consent to processing of your personal data. We may continue to process if we have a legitimate or legal reason to do so;&nbsp;</p>
                                        <p>Right to request transfer of your personal data in a structured, machine readable and commonly used format and to request that we transfer the personal information provided by you to another Data Controller.</p>
                                        <h2><strong>11.The Use of Cookies and web beacons&nbsp;</strong></h2>
                                        <p>We may store some information using cookies or web beacons on your computer or any other device you use when you visit our websites. This enables us to recognize you during subsequent visits and to maintain your preferences and individual interests based on your activity. The type of data gathered is the Internet Protocol (IP) address of your computer, the date and time of your visit, which pages you browsed, the device used, files viewed and whether the pages have been delivered successfully.</p>
                                        <p>You may be prompted before accepting any cookies, or to prevent your browser from accepting any cookies at all. If you reject the cookies, you can still use our website but your ability to use some features or areas of our website may be limited and certain features of the website may not be accessible.</p>
                                        <h2><strong>12.Social media features and widgets:&nbsp;</strong></h2>
                                        <p>Our website includes social media features, such as the Facebook, Twitter and LinkedIn Like button and widgets, such as the Share This button or interactive mini&ndash;programs that run on our website. These features may collect your IP address, which page you are visiting on our site, and may set a cookie to enable the feature to function properly. Social media features and widgets are either hosted by a third party or hosted directly on our website. Your interactions with these features are governed by the privacy policy of the company providing them.</p>
                                        <h2><strong>13.Use of Hypesrlinks&nbsp;</strong></h2>
                                        <p>Our websites may provide hyperlinks to web content that is part of our website or third-party external websites.&nbsp;</p>
                                        <p>The Group does not endorse or guarantee any products and services by providing hyperlinks to an external website and will not be in any way responsible for the content of any externally linked website.&nbsp;</p>
                                        <p>By clicking on a hyperlink, you will leave the Group&rsquo;s website and accordingly, you will be subject to the terms of the other website that you choose to visit.&nbsp;We therefore recommend that you to read the privacy statement of every website you visit.</p>
                                    </div>

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
