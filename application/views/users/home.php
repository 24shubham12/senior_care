<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Senior Care</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
        <!-- css libraries -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/fonts/icomoon/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/css/aos.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/asset/css/style.css">
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>


            <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-xl-2">
                            <div class="mb-0 site-logo"><a href="index.html" class="mb-0">Elderly<span class="text-primary">.</span> </a></div>
                        </div>

                        <div class="col-12 col-md-10 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right" role="navigation">

                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                    <li style="position:relative;">
                                        <a href="index.html" class="active nav-link">Home</a>
                                        <span class="border_botm"></span>
                                    </li>
                                    <li class="has-children">
                                        <a href="services.html" class="nav-link">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="https://labs.medlife.com/" class="nav-link">24*7 Pathology labs</a></li>
                                            <li><a href="https://www.netmeds.com/" class="nav-link">Order Medicines</a></li>
                                            <li><a href="https://www.bigbasket.com/" class="nav-link">Medical Groceries</a></li>
                                            <li><a href="#" class="nav-link">Book Ambulance</a></li>
                                            <li><a href="#" class="nav-link"></a></li>
                                            <li class="has-children">
                                                <a href="#">Emergency</a>
                                                <ul class="dropdown">
                                                    <li><a href="https://medulance.com/">Call Ambulance</a></li>
                                                    <li><a href="javascript:void(0);">On Call Doctor</a></li>
                                                    <li><a href="javascript:void(0);">Home Treatment</a></li>
                                                    <!--<li><a href="#">Menu Three</a></li>-->
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="testimonial.html" class="nav-link">Book Appointments</a></li>-->


                                    
                                    <li><a href="<?= base_url(); ?>Users/patient_login" class="nav-link">Login</a></li>
                                    <li><a href="<?php echo base_url(); ?>Admin/index" class="nav-link">Doctor's Login</a></li>
                                    <li><a href="javascript:void(0);" class="nav-link">Contact us</a></li>

                                    <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                                    <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                                    <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
                                </ul>
                            </nav>
                        </div>


                        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-white"></span></a></div>

                    </div>
                </div>

            </header>


            <!-- MAIN -->
            <div class="slide-item overlay imager-back" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <h1 class="heading mb-3">Expert Care for the Elderly</h1>
                            <p class="lead text-white mb-5"></p>
                            <!--<p><a href="#" class="btn btn-primary">Get In Touch</a></p>-->
                        </div>
                    </div>
                </div>  
            </div>
            <div class="feature-v1">
                <div class="d-lg-flex align-items-center w-100">
                    <div class="d-flex pagination-item  h-100">
                        <span class="icon-wrap">
                            <img src="<?php echo base_url(); ?>application/views/asset/images/svg/svg/001-elderly.svg" alt="Image" class="img-fluid">
                        </span>
                        <div>
                            <span class="subheading">Try Our Services</span>
                            <h3 class="heading">Independent Living For Senior Couples</h3>
                            <a href="#" class="small">Learn More</a>
                        </div>
                    </div>
                    <div class="d-flex pagination-item h-100">
                        <span class="icon-wrap">
                            <img src="<?php echo base_url(); ?>application/views/asset/images/svg/svg/002-elderly-1.svg" alt="Image" class="img-fluid">
                        </span>
                        <div>
                            <span class="subheading">Try Our Services</span>
                            <h3 class="heading">We Are Helping the Senior Elderly People</h3>
                            <a href="#" class="small">Learn More</a>
                        </div>
                    </div>
                    <div class="d-flex pagination-item h-100">
                        <span class="icon-wrap">
                            <img src="<?php echo base_url(); ?>application/views/asset/images/svg/svg/003-rocking-chair.svg" alt="Image" class="img-fluid">
                        </span>
                        <div>
                            <span class="subheading">Try Our Services</span>
                            <h3 class="heading">Senior Home Patient Care Services</h3>
                            <a href="#" class="small">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                            <div class="service">
                                <a href="#" class="d-block"><img src="<?php echo base_url(); ?>application/views/asset/images/img_4_sq.jpg" alt="Image" class="img-fluid"></a>
                                <div class="service-inner">
                                    <h3>Special Care</h3>
                                    <p>Lorem ipsum dolor sit amet elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                            <div class="service">
                                <a href="#" class="d-block"><img src="<?php echo base_url(); ?>application/views/asset/images/img_1_sq.jpg" alt="Image" class="img-fluid"></a>
                                <div class="service-inner">
                                    <h3>Special Care</h3>
                                    <p>Lorem ipsum dolor sit amet elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                            <div class="service">
                                <a href="#" class="d-block"><img src="<?php echo base_url(); ?>application/views/asset/images/img_2_sq.jpg" alt="Image" class="img-fluid"></a>
                                <div class="service-inner">
                                    <h3>Special Care</h3>
                                    <p>Lorem ipsum dolor sit amet elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                            <div class="service">
                                <a href="#" class="d-block"><img src="<?php echo base_url(); ?>application/views/asset/images/img_3_sq.jpg" alt="Image" class="img-fluid"></a>
                                <div class="service-inner">
                                    <h3>Special Care</h3>
                                    <p>Lorem ipsum dolor sit amet elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section bg-primary count-numbers">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter-wrap text-center">
                                <strong class="counter d-block"><span class="number" data-number="5890"></span></strong>
                                <span>Rooms Available</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter-wrap text-center">
                                <strong class="counter d-block"><span class="number" data-number="530"></span></strong>
                                <span>Nurse Staff</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter-wrap text-center">
                                <strong class="counter d-block"><span class="number" data-number="4029"></span></strong>
                                <span>Senior Living</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter-wrap text-center">
                                <strong class="counter d-block"><span class="number" data-number="7020"></span></strong>
                                <span>Happy People</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7">
                            <div class="section-heading">
                                <h2 class="heading mb-3">Senior Care Center is for Your Family</h2>
                                <p class="mb-5">Provideing care for the Senior Care Families</p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="<?php echo base_url(); ?>application/views/asset/images/img_3.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled ul-check primary">
                                            <li>Medical supervisions</li>
                                            <li>Healthcare Experts</li>
                                            <li>Health care Teams</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">

                            <div class="d-block custom-media algin-items-stretch">
                                <div class="text text-center">
                                    <h3>You can live here with love</h3>
                                </div>
                                <div class="img-bg side-imger" style=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cover overlay side-imger2" style="">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-7 mx-auto text-center align-self-center">
                            <h1 class="mb-5 heading">Our Goal is to Make Your Life Better</h1>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="feature">
                                        <span class="img-wrap">
                                            <img src="<?php echo base_url(); ?>application/views/asset/images/svg/svg/006-elderly-3.svg" alt="Image" class="img-fluid">
                                        </span>
                                        <h3>Expert Nursing Staff</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="feature">
                                        <span class="img-wrap">
                                            <img src="<?php echo base_url(); ?>application/views/asset/images/svg/svg/005-elderly-2.svg" alt="Image" class="img-fluid">
                                        </span>
                                        <h3>Expert Nursing Staff</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="feature">
                                        <span class="img-wrap">
                                            <img src="<?php echo base_url(); ?>application/views/asset/images/svg/svg/004-nurse.svg" alt="Image" class="img-fluid">
                                        </span>
                                        <h3>Expert Nursing Staff</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="site-section bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="testimonial text-center">
                                <img src="<?php echo base_url(); ?>application/views/asset/images/person_1.jpg" alt="Image" class="img-fluid">
                                <blockquote>
                                    <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                                    <cite class="author">Elizabeth Anderson, Senior</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="testimonial text-center">
                                <img src="<?php echo base_url(); ?>application/views/asset/images/person_1.jpg" alt="Image" class="img-fluid">
                                <blockquote>
                                    <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                                    <cite class="author">Elizabeth Anderson, Senior</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="testimonial text-center">
                                <img src="<?php echo base_url(); ?>application/views/asset/images/person_1.jpg" alt="Image" class="img-fluid">
                                <blockquote>
                                    <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                                    <cite class="author">Elizabeth Anderson, Senior</cite>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section">
                <div class="container">
                    <div class="row mb-5 justify-content-center">
                        <div class="col-7 text-center">
                            <div class="heading">
                                <h2 class="text-black">Other Opportunities</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, culpa.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="d-block d-flex custom-media algin-items-stretch">
                                <div class="text text-left">
                                    <h3>You can live here with love</h3>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, commodi.</p>
                                    <p><a href="#" class="btn btn-outline-white">Learn More</a></p>
                                </div>
                                <div class="img-bg lower-img1" style=""></div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="d-block d-flex custom-media algin-items-stretch">
                                <div class="text text-left">
                                    <h3>You can live here with love</h3>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, commodi.</p>
                                    <p><a href="#" class="btn btn-outline-white">Learn More</a></p>
                                </div>
                                <div class="img-bg lower-img2" style=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mb-5 mb-md-0">
                            <img src="<?php echo base_url(); ?>application/views/asset/images/about.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-5 ml-auto">
                            <div class="section-heading">
                                <h2 class="heading mb-3 text-white">Senior &amp; Elder Home Care Center</h2>

                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique amet nostrum facere hic! Inventore cumque ipsam eum, sit sequi illum.</p>
                                <p class="mb-4 text-white">Optio ex ullam eveniet magnam molestiae laborum, dignissimos dolorum ipsam minus, ipsum vel illo aut molestias suscipit voluptatem hic voluptatibus!</p>
                                <p class="text-white mb-5"><strong class="h3">&ldquo;We care for elderly people&rdquo;</strong></p>
                                <p><a href="#" class="btn btn-white">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="site-section">
                <div class="container">
                    <div class="row mb-5 justify-content-center">
                        <div class="col-7 text-center">
                            <div class="heading">
                                <h2 class="text-black">News &amp; Updates</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, culpa.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="blog-entry">
                                <a href="#" class="d-block">
                                    <img src="<?php echo base_url(); ?>application/views/asset/images/img_1.jpg" alt="Image" class="img-fluid">
                                </a>
                                <div class="post-meta d-flex justify-content-center">
                                    <span>
                                        <span class="icon-calendar"></span>
                                        <span>23 Jul</span>
                                    </span>
                                    <span>
                                        <span class="icon-user"></span>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <span class="icon-comment"></span>
                                        <span>2 Comments</span>
                                    </span>
                                </div>
                                <h2><a href="#">We're Providing the Quality Care</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog-entry">
                                <a href="#" class="d-block">
                                    <img src="<?php echo base_url(); ?>application/views/asset/images/img2.jpg" alt="Image" class="img-fluid">
                                </a>
                                <div class="post-meta d-flex justify-content-center">
                                    <span>
                                        <span class="icon-calendar"></span>
                                        <span>23 Jul</span>
                                    </span>
                                    <span>
                                        <span class="icon-user"></span>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <span class="icon-comment"></span>
                                        <span>2 Comments</span>
                                    </span>
                                </div>
                                <h2><a href="#">We're Providing the Quality Care</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog-entry">
                                <a href="#" class="d-block">
                                    <img src="<?php echo base_url(); ?>application/views/asset/images/img_3.jpg" alt="Image" class="img-fluid">
                                </a>
                                <div class="post-meta d-flex justify-content-center">
                                    <span>
                                        <span class="icon-calendar"></span>
                                        <span>23 Jul</span>
                                    </span>
                                    <span>
                                        <span class="icon-user"></span>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <span class="icon-comment"></span>
                                        <span>2 Comments</span>
                                    </span>
                                </div>
                                <h2><a href="#">We're Providing the Quality Care</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-footer bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="footer-heading mb-4">About</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi cumque tenetur inventore veniam, hic vel ipsa necessitatibus ducimus architecto fugiat!</p>
                            <div class="my-5 social">
                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h2 class="footer-heading mb-4">Quick Links</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Amazing Atmosphere</a></li>
                                        <li><a href="#">Caring Staff</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <h2 class="footer-heading mb-4">Helpful Link</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Hospice Care</a></li>
                                        <li><a href="#">Excellent Cuisine</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Terms</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <h2 class="footer-heading mb-4">Resources</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Health Care</a></li>
                                        <li><a href="#">Elderly Care</a></li>
                                        <li><a href="#">Care with Love</a></li>
                                        <li><a href="#">Quality Care</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-5">
                                <p class="copyright"><small>
                                       Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank" >Shubham Meshram</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .site-wrap -->

    <script src="<?php echo base_url(); ?>application/views/asset/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/jquery-ui.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/jquery.countdown.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/aos.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/jquery.animateNumber.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/jquery.sticky.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application/views/asset/js/main.js" type="text/javascript"></script>

</body>
</html>