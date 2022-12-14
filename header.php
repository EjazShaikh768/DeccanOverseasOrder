<?php
include 'db.php';

  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Deccan Overseas - Online Fruits Order</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .offer-img1{
            background-image: url("images/black.jpg");
        }.offer-img2{
            background-image: url("images/white.jpg");
        }
        .main-top h4{
            color:white
        }
    </style>
</head>

<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
				
                    <div class="right-phone-box">
                        <!-- <p>Call US :- <a href="#"> +91 9657223638</a></p> -->
                    </div>
                    <div class="our-link">
                        <ul>
                            <li>
                            <?php  if (isset($_SESSION["fname"])) {
           
           echo'
           <a class="" href="logout.php">LOG OUT </a>';
    }else{
         echo '<a class="" href="signin.php">SIGN IN </a>';
    } ?></li>
                            <li><a href="#address"> <?php if (isset( $_SESSION["fname"])) {
                                echo " HELLO " ."&nbsp; ".$_SESSION["fname"];
                                echo '<li><a href="wishlist.php"><i class="fa fa-heart"></i></a></li>';
                                echo '<li ><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>'; 
                            } ?></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> <h4 style="color:white">20% off Entire Purchase Promo code: offT80</h4>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> <h4 style="color:white">50% - 80% off on Vegetables</h4>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> <h4 style="color:white"> Off 10%! Shop Vegetables</h4>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> <h4 style="color:white">Off 50%! Shop Now</h4>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> <h4 style="color:white">Off 10%! Shop Vegetables</h4>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> <h4 style="color:white">50% - 80% off on Vegetables</h4>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> <h4 style="color:white">20% off Entire Purchase Promo code: offT30</h4>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> <h4 style="color:white"> Off 50%! Shop Now </h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
              
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg  navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/fevicon.jpeg" class="logo" alt="" style="width:80px ;">
                     <h5>Deccan Overseas </h5>
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link " data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.php">MENU</a></li>
								<!-- <li><a href="shop-detail.php">Shop Detail</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="my-account.php">My Account</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> -->
                        <!-- <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge">3</span>
							</a>
						</li> -->
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <!-- <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div> -->
            <!-- End Side Menu -->
            
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->