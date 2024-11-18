@extends('front.master')

@section('content')
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
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact With Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="contact-area pt-80 pb-50">
        <div class="container">
            <div class="contact-info-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <img src="assets/img/icon/contact_icon01.svg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Location</h5>
                                <p>Cmm Gardens, Rhapta Road, Nairobi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <img src="assets/img/icon/contact_icon02.svg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">E-mail</h5>
                                <p>info@africanpharmaceuticalreview.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="contact-info-item">
                            <div class="icon">
                                <img src="assets/img/icon/contact_icon03.svg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Phone</h5>
                                <p>+254 72 515 4328</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="contact-img">
                        <img src="https://www.africanpharmaceuticalreview.com/wp-content/uploads/2024/05/Untitled-design-71-1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h4 class="title">Drop Us a Message</h4>
                        <p>Have a question? Need help? Don't hesitate, drop us a line</p>
                        <form id="contact-form" action="https://themegenix.net/html/zaira/assets/mail.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="name" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" name="email" placeholder="E-mail*">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <input type="number" name="phone" placeholder="Phone*">
                            </div>
                            <div class="form-grp">
                                <textarea name="message" placeholder="Message*"></textarea>
                            </div>
                            <button type="submit" class="btn btn-two">Submit Now</button>
                        </form>
                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- contact-map -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.381371119318!2d36.7951554!3d-1.265381!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f170003da8cd1%3A0x57ec729085be6284!2sAfrican%20Pharmaceutical%20Review!5e0!3m2!1sen!2ske!4v1715168253725!5m2!1sen!2ske" allowfullscreen loading="lazy"></iframe>
    </div>
    <!-- contact-map-end -->
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.381371119318!2d36.7951554!3d-1.265381!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f170003da8cd1%3A0x57ec729085be6284!2sAfrican%20Pharmaceutical%20Review!5e0!3m2!1sen!2ske!4v1715168253725!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

    <!-- newsletter-area -->
    <section class="newsletter-area-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-wrap-three">
                        <div class="newsletter-content">
                            <h2 class="title">Get Our Latest News & Update</h2>
                        </div>
                        <div class="newsletter-form">
                            <form action="#">
                                <div class="form-grp">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="form-grp">
                                    <input type="email" placeholder="E-mail">
                                </div>
                                <button type="submit" class="btn">Submit Now</button>
                            </form>
                        </div>
                        <div class="newsletter-social">
                            <h4 class="title">Follow Us:</h4>
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->
@endsection
