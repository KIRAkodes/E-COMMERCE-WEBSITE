<?php
    session_start();
    require("connections.php");
    if(isset($_GET['page'])){

        $pages=array("products", "cart");

        if(in_array($_GET['page'], $pages)) {

            $_page=$_GET['page'];

        }else{

            $_page="products";

        }

    }else{

        $_page="products";

    }
?>
<?php

    if(isset($_GET['action']) && $_GET['action']=="add"){

        $id=intval($_GET['id']);

        if(isset($_SESSION['cart'][$id])){

            $_SESSION['cart'][$id]['quantity']++;

        }else{

            $sql_s="SELECT * FROM products
                WHERE id_product={$id}";
            $query_s=mysqli_query($connection, $sql_s);
            if(mysqli_num_rows($query_s)!=0){
                $row_s=mysqli_fetch_array($query_s);

                $_SESSION['cart'][$row_s['id_product']]=array(
                        "quantity" => 1,
                        "price" => $row_s['price']
                    );


            }else{

                $message="This product id it's invalid!";

            }

        }

    }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BLUE LAGOON SHOPPING | HOME</title>
    <?php
    if(isset($message)){
        echo "<h2>$message</h2>";
    }
?>
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
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style1.css" />
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
        <li><a href="login.php">Login/Signup</a></li>
        <li><a class="active" href="carts.php">Cart</a></li>
        <li><a href="account.php">Your Account</a></li>
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
      <!-- Slideshow container -->
  <div class="slideshow-container h-100">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext"><h4>1 / 5</h4></div>
      <img src="banner1.jpg" style="width:100%">
      <div class="text"><h1 style="color:#00b300">Shop Now to get instant discount of 10%</h1></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext"><h4>2 / 5</h4></div>
      <img src="banner2.jpg" style="width:100%">
      <div class="text"><h1 style="color:#00b300">HUGE SALE ON MEN'S PARTY WEAR</h1></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext"><h4>3 / 5</h4></div>
      <img src="banner3.jpg" style="width:100%">
      <div class="text"><h1 style="color:#00b300">WOMEN'S SALE IN 3 HOURS</h1></div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext"><h4>4 / 5</h4></div>
      <img src="banner4.jpg" style="width:100%">
      <div class="text"><h1 style="color:#00b300">BEST EVER DISCOUNTS ON SHOES</h1></div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext"><h4>5 / 5</h4></div>
      <img src="banner5.jpg" style="width:100%">
      <div class="text"><h1 style="color:#00b300">ACCESSORIES AVAILABLE AT LOWEST COST</h1></div>
    </div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
  </div>
  <div id="container">

          <div id="main">

              <?php require($_page.".php"); ?>
              <h1>Product List</h1>
      <table>
          <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Action</th>
          </tr>
          <?php

    $sql="SELECT * FROM products ORDER BY name ASC";
    $query=mysqli_query($connection, $sql);

    while ($row=mysqli_fetch_array($query)) {

  ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['price'] ?>$</td>
            <td><a href="carts.php?page=products&action=add&id=<?php echo $row['id_product'] ?>">Add to cart</a></td>
        </tr>
  <?php

    }

  ?>
      </table>
          </div><!--end of main-->

          <div id="sidebar">
            <h1>Cart</h1>
<?php

    if(isset($_SESSION['cart'])){

        $sql="SELECT * FROM products WHERE id_product IN (";

        foreach($_SESSION['cart'] as $id => $value) {
            $sql.=$id.",";
        }

        $sql=substr($sql, 0, -1).") ORDER BY name ASC";
        $query=mysqli_query($connection, $sql);
        if(empty($query))
        {
          echo "Cart is empty";
        }
        else {
        while($row=mysqli_fetch_array($query)) {
        ?>
            <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p>
        <?php
        }
      }
    ?>
        <hr />
        <a href="carts.php?page=cart">Go to cart</a>
    <?php

    }else{

        echo "<p>Your Cart is empty. Please add some products.</p>";

    }

?>
          </div><!--end of sidebar-->

      </div><!--end container-->









  <!-- footer -->
  <div class="footer">
    <div class="footer_agile_inner_info_w3l">
      <div class="col-md-3 footer-left" style="float:left">
        <h2><a href="#"><span>BLUE</span>Lagoon Shopping</a></h2>
        
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
              <li><a href="#">Home</a></li>
              <li><a href="about.html">Customer Service</a></li>
              <li><a href="login.php">Login/Signup</a></li>
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
  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>
  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  </script>
    </body>
    </html>
