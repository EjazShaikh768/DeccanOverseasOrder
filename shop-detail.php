<?php
include 'db.php';

  session_start();
  if (isset($_SESSION['fname'])) {
    # code...
  }else{
    header("location:http://localhost/DeccanOverseasOrder/signin.php");
  }
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
                                echo '<li><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>'; 
                            } ?></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
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
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge">3</span>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
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
            </div>
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

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- S  tart Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
                   <?php 
                            include 'db.php';
                            $pid = $_GET['pid'];
                            $sql = "SELECT * FROM product WHERE prod_id = '{$pid}' ";
                            $result = mysqli_query($conn , $sql) or die("Query Failed");
                            if (mysqli_num_rows($result)> 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="admin/upload/<?php echo $row['prod_image']; ?>" alt="First slide"  height="450px" width="300px"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="admin/upload/<?php echo $row['prod_image']; ?>" alt="Second slide" height="450px" width="300px"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="admin/upload/<?php echo $row['prod_image']; ?>" alt="Third slide" height="450px" width="300px"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="admin/upload/<?php echo $row['prod_image']; ?>"  alt="" />
                              </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="admin/upload/<?php echo $row['prod_image']; ?>" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="admin/upload/<?php echo $row['prod_image']; ?>" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                   
                    <div class="single-product-details">
                           <form action="addcart.php" method="POST">
                        <h2> <?php echo $row['prod_name']; ?> </h2>
                        <input type="hidden" name="PNC" value="<?php echo $row['prod_name']; ?> ">
                        <input type="hidden" name="PIC" value="<?php echo $row['prod_id']; ?> ">
                           
                        <h5>  &nbsp;&nbsp; <del>  &#8377;<?php echo $row['dlt_price'];  ?></del> &nbsp;&nbsp;  &#8377; <?php echo $row['prod_price']; ?>/-   </h5>
                        <input type="hidden" name="PPC" value="<?php echo $row['prod_price']; ?> ">

                        <p class="available-stock" >&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<b> <?php echo $row['prod_quantity']; ?> KG </b><p>
						<h4>Short Description:</h4>
						<p><?php echo $row['prod_description']; ?> </p>
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Quantity</label>
									<input type="number" class="form-control" value="1" min="1" max="20"  name="PQC" >
								</div>
							</li>
						</ul>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
                                <button class="btn hvr-hover" name="addWish"><i class="fas fa-heart"></i> ADD TO wishlist</button>
                               <?php 
                               if ( ($row['prstatus'] == 1)) {
                                echo ' <button class="btn hvr-hover" name="addCart">ADD TO CART</button>';
                               }else {
                                echo '<button class="btn hvr-hover" name="addCart" disabled>UNAVAILABLE</button>';
                               }
                               ?>
							</div>
						</div>

						<div class="add-to-btn">
							<div class="add-comp">
							</div>
							
						</div>
                        </form>
                    </div>
                   
                </div>
            </div>
            <?php }   } ?>
          	<div class="row my-5 justify-content-center" style="height:400px;">
               <div class="col-sm-10">
               <div class="card card-outline-secondary my-4">
					<div class="card-header">
						<h2>Product Reviews</h2>
					</div>
					<div class="card-body" >
						<div class="media mb-3">
						      <?php
                             include 'db.php';
                             $sqlr = "SELECT * FROM review  WHERE prod_id = '{$pid}' ";
                             $resultr =mysqli_query($conn , $sqlr) or die("Query Failed");
                             if (mysqli_num_rows($resultr) > 0) {
                                while($rowr = mysqli_fetch_assoc($resultr)){
                                 //echo $rowr['fullname'];echo $rowr['date'];
                                
                            ?> 
							<div class="media-body">
								<h3> <?php echo $rowr['full_name']; ?> </h3>
								<p> <?php echo $rowr['message']; ?> </p>
								<small class="text-muted">Posted by Anonymous on <b> <?php echo $rowr['date']; ?> </b> </small>
							</div>
						 <hr>
                            <?php } } ?>
                            
						</div>
							</div>
				  </div>
               </div>         
			</div>

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
                    <?php 
                            include 'db.php';
                            $sql1 = "SELECT * FROM product  ";
                            $result1 = mysqli_query($conn , $sql1) or die("Query Failed");
                            if (mysqli_num_rows($result1)> 0) {
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                    ?>
                        <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="admin/upload/<?php echo $row1['prod_image']; ?>"  alt="Image"  height="240px" width="300px">
                                    <div class="mask-icon">
                                        <ul>
                                             <li><a href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                           <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> -->
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart "></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                   <center>  <h4><?php echo $row1['prod_name']; ?></h4></center>
                                    <center>  <h5>&nbsp;&nbsp;<b> <?php echo $row1['prod_quantity']; ?> KG  </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row1['prod_price']; ?>/- Rs&nbsp;&nbsp;</h5> </center>
                      </div>
                            </div>
                        </div>
                        <?php } } ?>
                  
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->


     <!-- Start Instagram Feed  -->
     <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
        <?php 
                            include 'db.php';
                            $sql = "SELECT * FROM sub_category";
                            $result = mysqli_query($conn , $sql) or die("Query Failed");
                            if (mysqli_num_rows($result)> 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
            <div class="item">
                <div class="ins-inner-box">
                <img src="admin/upload/<?php echo $row['category_image']; ?>"  alt="Image" height="250px" width="100%">
                        <div class="hov-in">
                        <a href="#" style="color:white;"> <b> <?php echo $row['subcat_name']; ?> </b> </i></a>
                    </div>
                </div>
            </div>
            <?php } } ?>
               

        </div>
    </div>
    <!-- End Instagram Feed  -->    



    <?php include 'footer.php'; ?>