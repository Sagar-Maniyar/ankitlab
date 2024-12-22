<?php include 'layouts/header.php'; ?>
<!--==============================
    Reservation Area  
    ==============================-->
    <div class="space" >
        <div class="container mt-40">
            <div class="reservation-page">
                <div class="row gx-0 justify-content-center flex-row-reverse">
                    <div class="col-xl-5">
                        <div class="reservation-thumb">
                            <img class="w-100" src="assets/img/normal/reservation-thumb.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="reservation-form-wrap">
                            <div class="title-area text-center mb-30">
                                <span class="sub-title style2">RSVP
                                </span>
                                <h2 class="sec-title">Make Reservation</h2>
                            </div>
                            <form action="mail.php" method="POST" class="reservation-form ajax-contact">
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
                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="fas fa-users"></i>
                                            <input type="text" class="form-control style-border" name="guest" id="guest" placeholder="No. of Guests">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="date" class="form-control style-border" name="date" id="date">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="fas fa-box"></i>
                                            <input type="text" class="form-control style-border" name="message" id="event" placeholder="Select Event">
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