<?php
   include 'Header.php'
?>  


    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/page-banner.webp);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Contact</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Contact Start ======-->
    
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Address</h5>
                            <p>297 Central Street, New Town North City, New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Phone</h5>
                            <p><a href="tel:+62548254658">+62548 254 658</a></p>
                            <p><a href="tel:+99875587478">+99875 587 478</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-info mt-30">
                        <div class="info-icon">
                            <i class="fas fa-globe-africa"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Web</h5>
                            <p><a href="mailto://info@example.com">info@example.com</a></p>
                            <p><a href="www.example.html">www.example.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-title text-center">
                            <h3 class="title">Leave a message here</h3>
                            <p>Here is our event schedule where you can get information about time schedule about this event so it's very easy for you to manage your time and schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form-wrapper">
                            <form id="contact-form" action="https://htmldemo.net/edumate-v1/edumate/assets/contact.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea name="message" placeholder="Write here..."></textarea>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single-form text-center">
                                            <button class="main-btn">Submit now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->
    
    <!--====== Newsletter Start ======-->

    <section class="newsletter-area-2">
        <div class="container">
            <div class="newsletter-wrapper bg_cover" style="background-image: url(assets/images/newsletter-bg-1.webp);">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-title-2 mt-25">
                            <h2 class="title">Subscribe our Newsletter</h2>
                            <span class="line"></span>
                            <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need some</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-form mt-30">
                            <form action="#">
                                <input type="text" placeholder="Enter your email here">
                                <button class="main-btn main-btn-2">Subscribe now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Newsletter Ends ======-->
    
    <?php
        include 'Footer.php'
    ?>

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->
    
    




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== All Plugins js ======-->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script>
    

    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>
    
    
</body>
</html>