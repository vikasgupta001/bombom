<?php
    session_start();
    if(!isset($_SESSION['error']))
        header("Location: index.html");
?>
<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Exam Form | India Airport Services</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="India Airport Services">
    <meta name="author" content="India Airport Services">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="css/bootstrap.3.2.0.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/bootstrap.theme.css">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/form.css">
    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>
    <style>
        .bv-form .help-block{margin-bottom:0}.bv-form .tooltip-inner{text-align:left}.nav-tabs li.bv-tab-success>a{color:#3c763d}.nav-tabs li.bv-tab-error>a{color:#a94442};
        #success_message{ display: none;}
        #datepicker{width:180px;}
        #datepicker > span:hover{cursor: pointer;}
    </style>
</head>
<body>

<div class="body">
    <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/home/AirportLogo.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row pt-3" style="visibility: hidden;">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item d-none d-sm-block">
                                        <a class="nav-link" href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
                                    </li>
                                    <li class="nav-item d-none d-sm-block">
                                        <a class="nav-link" href="contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-search d-none d-md-block">
                                <form id="searchForm" action="page-search-results.html" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                        <span class="input-group-btn">
													<button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
												</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="header-row">
                            <div class="header-nav">
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item active" href="index.html">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class="nav-link" href="about-us.html">
                                                    About us
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-mega">
                                                <a class="dropdown-item" href="#">
                                                    Services
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" href="recuitments.html">
                                                    Recruitment
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-item" href="contact-us.html">
                                                    Contact Us
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <ul class="header-social-icons social-icons d-none d-sm-block" style="visibility: hidden;">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="main" role="main" style="text-align:center">
        <div class="jumbotron text-xs-center">
              <h1 class="display-3">
                <?php 
                    if(isset($_SESSION['error']) && $_SESSION['error'] == true )
                        echo "Sorry!";
                    else echo "Congrats.";
                ?>
              </h1>
                <p class="lead">
                     <?php 
                        if(isset($_SESSION['error']) && $_SESSION['error'] == true )
                            echo "There was problem in processing the Payment";
                        else echo " <strong>Registration Successful</strong>, Check your email for the details";

                        session_destroy();
                    ?>
                    
                </p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us at indiaairservice@gmail.com</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="http://indiaairportservices.co.in" role="button">Continue to homepage</a>
  </p>
</div>
    </div>

    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-ribbon">
                    <span>Get in Touch</span>
                </div>
                <div class="col-lg-3">
                    <div class="newsletter">
                        <h4>Newsletter</h4>
                        <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>


                        <form id="newsletterForm">
                            <div class="input-group">
                                <input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                                <span class="input-group-btn">
											<button class="btn btn-light" type="submit">Go!</button>
										</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Latest Tweets</h4>
                    <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 2}">
                        <p>Please wait...</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-details">
                        <h4>Contact Us</h4>
                        <ul class="contact">
                            <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
                            <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
                            <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h4>Follow Us</h4>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <a href="index.html" class="logo">
                            <img alt="India Airport Services" class="img-fluid" src="img/home/AirportLogo.jpg">
                        </a>
                    </div>
                    <div class="col-lg-11">
                        <p>© Copyright 2018. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="js/bootstrap.3.2.0.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="js/views/view.contact.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>
<script src="js/bootstrapValidator.js"></script>
<script src="js/bootstrap.datepicker.js"></script>
</body>
</html>
