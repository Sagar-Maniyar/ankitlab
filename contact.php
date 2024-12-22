<?php include 'layouts/header.php'; ?>

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->   
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content mt-50">
                        <h1 class="breadcumb-title">Contact Us</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
<!--==============================
        Contact Area  
    ==============================-->
    <div class="contact-area space mt-40" data-bg-src="assets/img/bg/contact-page-bg.png">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <img src="assets/img/icon/location-icon.svg" alt="icon">
                        </div>
                        <div class="contact-details">
                            <h4 class="title">Office Address</h4>
                            <span>03 PM - 04 PM</span>
                            <p>Sunday, Sept. 18th 2022. One</p>
                            <p>World Observatory, 285 Fulton</p>
                            <p>Street</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <img src="assets/img/icon/envelope.svg" alt="icon">
                        </div>
                        <div class="contact-details">
                            <h4 class="title">Email Address</h4>
                            <span>24/7 Anytime</span>
                            <p>info@ovation-wedding.com</p>
                            <p>live-event@ovation.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <img src="assets/img/icon/phone.svg" alt="icon">
                        </div>
                        <div class="contact-details">
                            <h4 class="title">Phone Number</h4>
                            <span>24/7 Anytime</span>
                            <p>+(258) 159 21 21536,</p>
                            <p>+(856) 215 21 5692</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Reservation Area  
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="contact-page-wrap">
                <div class="row gx-0 justify-content-center flex-row-reverse">
                    <div class="col-xl-5">
                        <div class="map-sec">
                            <iframe src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&t=m&z=10&output=embed&iwloc=near" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-form-wrap">
                            <div class="title-area mb-30">
                                <span class="sub-title style2">Contact Us
                                </span>
                                <h2 class="sec-title">Get In Touch!</h2>
                            </div>
                            <form action="mail.php" method="POST" class="contact-form ajax-contact">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-user"></i>
                                            <input type="text" class="form-control style-border" name="name" id="name" placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-envelope"></i>
                                            <input type="text" class="form-control style-border" name="email" id="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-comment"></i>
                                            <textarea name="message" placeholder="Type Your Message" id="contactForm" class="form-control style-border"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn col-12 text-center">
                                    <button type="submit" class="btn">MAKE RESERVATION</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'layouts/footer.php'; ?>