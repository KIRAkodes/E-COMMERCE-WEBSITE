<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after loggin out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BLUE LAGOON SHOPPING | ACCOUNT</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css"
                    href="styles.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <header>
    <div class="topnav" id="mytopnav">
      <nav>
        <ul>
        <li><a href="#">Blue Lagoon Shopping</a></li>
        <li><a href="#"></a></li>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">Customer Service</a></li>
        <li><a href="logger.html">Login/Signup</a></li>
        <li><a href="cart.html">Cart</a></li>
        <li><a class="active" href="#">Your Account</a></li>
        <li><a href="category.html">Category</a>
        <ul>
          <li><a href="category.html#electronics">Electronics</a></li>
          <li><a href="category.html#groceries">Groceries</a></li>
          <li><a href="category.html#fashion">Fashion</a></li>
          <li><a href="category.html#kitchen">Kitchen</a></li>
          <li><a href="category.html#accessories">Accessories</a></li>
          </ul>
          </li>
          <li><a href="offers.html">Offers</a>
          <ul>
            <li><a href="offers.html#discount">Discount</a></li>
            <li><a href="offers.html#cashback">Cashback</a></li>
            <li><a href="offers.html#primeoffers">Prime Offers</a></li>
            <li><a href="offers.html#50off">50% OFF</a>
            </ul>
            </li>
            </ul>
      </nav>
      </header>
      <div class="slideshow-container h-100">
        <img src="ac.jpg" alt="">
      </div>
      <br>
      <div class="content">

              <!-- Creating notification when the
                      user logs in -->

              <!-- Accessible only to the users that
                      have logged in already -->
              <?php if (isset($_SESSION['success'])) : ?>
                  <div class="error success" >
                      <h3>
                          <?php
                              echo $_SESSION['success'];
                              unset($_SESSION['success']);
                          ?>
                      </h3>
                  </div>
              <?php endif ?>

              <!-- information of the user logged in -->
              <!-- welcome message for the logged in user -->
              <?php  if (isset($_SESSION['username'])) : ?>
                  <p>
                      Welcome
                      <strong>
                          <?php echo $_SESSION['username']; ?>
                      </strong>
                  </p>
                  <p>
                      <a href="account.php?logout='1'" style="color: red;">
                          Click here to Logout
                      </a>
                  </p>
              <?php endif ?>
          </div>
<br>
<div class="twodiv">
  <div class="section-heading">
    <h2>YOUR ORDERS</h2>
  </div>
  <hr>
  <div class="orders">
    <ul>
      <li><h4>1.LOUIS PHILLIPE Blue Shirt</h4></li>
      <li><h4>2.APPLE MACBOOK PRO 13" </h4></li>
    </ul>
  </div>
</div>
<br>
<!--/grids-->
<div class="coupons">
    <div class="coupons-grids text-center">
      <div class="w3layouts_mail_grid">
        <div class="col-md-3 w3layouts_mail_grid_left" style="float:left">
          <div class="w3layouts_mail_grid_left1 hvr-radial-out">
            <i class="fa fa-truck" aria-hidden="true"></i>
          </div>
          <div class="w3layouts_mail_grid_left2">
            <h3>FREE SHIPPING</h3>
            <p>WE SHIP IT FREE RIGHT TO YOUR DOORSTEP</p>
          </div>
        </div>
        <div class="col-md-3 w3layouts_mail_grid_left" style="float:left">
          <div class="w3layouts_mail_grid_left1 hvr-radial-out">
            <i class="fa fa-headphones" aria-hidden="true"></i>
          </div>
          <div class="w3layouts_mail_grid_left2">
            <h3>24/7 SUPPORT</h3>
            <p>NEED HELP ? CALL US WE WILL SERVE 24/7</p>
          </div>
        </div>
        <div class="col-md-3 w3layouts_mail_grid_left" style="float:left">
          <div class="w3layouts_mail_grid_left1 hvr-radial-out">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
          </div>
          <div class="w3layouts_mail_grid_left2">
            <h3>MONEY BACK GUARANTEE</h3>
            <p>DON'T LIKE A PRODUCT ? 
            GET 100% REFUND</p>
          </div>
        </div>
          <div class="col-md-3 w3layouts_mail_grid_left" style="float:left">
          <div class="w3layouts_mail_grid_left1 hvr-radial-out">
            <i class="fa fa-gift" aria-hidden="true"></i>
          </div>
          <div class="w3layouts_mail_grid_left2" style="float:right">
            <h3>FREE GIFT COUPONS</h3>
            <p>LUCKY CUSTOMERS GET FREE GIFT CARDS WITH ORDERS</p>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>

    </div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
  <div class="footer_agile_inner_info_w3l">
    <div class="col-md-3 footer-left" style="float:left">
      <h2><a href="index.html"><span>BLUE</span>Lagoon Shopping</a></h2>
     
      <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                              <li><a href="#" class="facebook">
                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                              <li><a href="#" class="twitter">
                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                              <li><a href="#" class="instagram">
                                  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                              <li><a href="#" class="pinterest">
                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                            </ul>
    </div>
    <div class="col-md-9 footer-right">
      <div class="sign-grds">
        <div class="col-md-4 sign-gd"  style="float:left">
          <h4>Our <span>Information</span> </h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">Customer Service</a></li>
            <li><a href="logger.html">Login/Signup</a></li>
            <li><a href="category.html">Categories</a></li>
            <li><a href="offers.html">Offers</a></li>
          </ul>
        </div>

        <div class="col-md-5 sign-gd-two"  style="float:right">
          <h4>Store <span>Information</span></h4>
          <div class="w3-address">
            <div class="w3-address-grid">
              <div class="w3-address-left">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <div class="w3-address-right">
                <h6>Phone Number</h6>
                <p>+91 9717583143</p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="w3-address-grid">
              <div class="w3-address-left">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
              <div class="w3-address-right">
                <h6>Email Address</h6>
                <p>Email :<a href="mailto:example@email.com"> prateeknanda10@gmail.com</a></p>
              </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3-address-grid">
              <div class="w3-address-left">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <div class="w3-address-right">
                <h6>Location</h6>
                <p>Lovely Professional University, Phagwara, Punjab, India.

                </p>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
    <p class="copy-right">&copy 2020 Blue Lagoon Shopping. All rights reserved | Design by PRATEEK NANDA</a></p>
  </div>
</div>
<!-- //footer -->
</body>
</html>
