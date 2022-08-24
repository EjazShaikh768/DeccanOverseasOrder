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
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Nothing</option>
									<option value="1">Popularity</option>
									<option value="2">High Price → High Price</option>
									<option value="3">Low Price → High Price</option>
									<option value="4">Best Selling</option>
								</select>
                                </div>
                                <p>Showing all 4 results</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                     <div class="row">
                                        
                                     <?php 
                                           include 'db.php';
                                           $sql1 = "SELECT * FROM product p JOIN sub_category sc ON p.sub_category = sc.subcat_id ORDER BY prod_id DESC";
                                           $result1 = mysqli_query($conn , $sql1) or die("query Failed");
                                           if (mysqli_num_rows($result1)) {
                                            while ($row1 = mysqli_fetch_assoc($result1)){
                                        ?>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale"> <a href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?> " class="fa-solid fa-eye "></a> </p>
                                                    </div>
                                                    <img src="admin/upload/<?php echo $row1['prod_image']; ?>"  alt="Image" height="220px" width="100%">
                                                    <div class="mask-icon">
                                                        <ul>
                              <li style="color:white"> <?php echo substr($row1['prod_description'],0,100)."..."; ?>  </li>
                                                         <!--   <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                             <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> 
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>-->
                                                        </ul>
                                                        <!-- <a class="cart" href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?>">Add to Cart</a> -->
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h3><?php echo $row1['prod_name']; ?></h3>
                                                    <h4 ><?php echo $row1['subcat_name']; ?></h4>
                                                    <h5> <del> &#8377; <?php echo $row1['dlt_price'];  ?></del> &nbsp; &nbsp; &#8377; <?php echo $row1['prod_price']; ?> /-</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } } ?>
                                    </div> 
                                </div>


                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="list-view-box">
                                        <?php 
                                           include 'db.php';
                                           $limit01 = 4;
                                           if(isset( $_GET['prodPage'])){
                                               $prodPage = $_GET['prodPage'];
                                           }else{
                                               $prodPage = 1;
                                           }
                                           $offset01 = ($prodPage - 1) * $limit01;
                                           $sql = "SELECT * FROM product ORDER BY prod_id ASC   LIMIT {$offset01},{$limit01} ";
                                           $result = mysqli_query($conn , $sql) or die("query Failed");
                                           if (mysqli_num_rows($result)) {
                                            while ($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-3">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <!-- <p class="new">New</p> -->
                                                        </div>
                                                        <img src="admin/upload/<?php echo $row['prod_image'];  ?>"  alt="Image" height="220px" width="100%">
                                                        <div class="mask-icon">
                                                            <ul>
                                                               <!--  <li><a href="shop-detail.php?pid=<?php echo $row["prod_id"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> 
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>-->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8 mt-3">
                                                <div class="why-text full-width">
                                                    <h4><?php echo $row['prod_name'];  ?></h4>
                                                    <h5> <del> &#8377; <?php echo $row['dlt_price'];  ?></del> &nbsp; &nbsp; &#8377; &nbsp; <?php echo $row['prod_price'];  ?></h5>
                                                    <p><?php echo substr($row['prod_description'],0,150)." ....";  ?></p>
                                                    <a class="btn hvr-hover" href="shop-detail.php?pid=<?php echo $row["prod_id"]; ?>">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                   <?php  }     } ?>
                                  <div class="row justify-content-center">
                                  <?php
                      include 'db.php';
                      $sql01 = "SELECT * FROM product ";
                      $result01 = mysqli_query($conn , $sql01) or die("query unsuccesfull");
                      if(mysqli_num_rows($result01) > 0){
                       
                        $total_records01 = mysqli_num_rows($result01);
                        $total_page01 = ceil($total_records01 / $limit01);

                        echo '<nav aria-label="Page navigation example">';
                        echo ' <ul class="pagination">';
                          
                        if($prodPage >= 1){
                            echo '<li class="page-item"><a class="page-link" href="shope.php#list-view?prodPage='.($prodPage - 1).'">Prev</a></li>';
                        }

                         for($j = 1; $j <=$total_page01; $j++){
                            if($j == $prodPage){
                                $active = "active";
                              }else{
                                $active = "";
                              }
                            echo '<li class="active"><a class="page-link" href="shope.php#list-view?prodPage='.$j.'">'.$j.'</a></li>';
                         }
                         if($total_page01 >= $prodPage){
                            echo '<li class="page-item"><a class="page-link" href="shope .php#list-view?prodPage='.($prodPage + 1).'">Next</a></li>';
                        }
                        echo '</ul>';
                        echo '</nav>';
                       }

                ?>
                                  </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                           
                                <div class="list-group-collapse sub-men">
                                <?php 
                                               $sqla = "SELECT * FROM category  ";
                                               $resulta = mysqli_query($conn , $sqla) or die("query failed");
                                               if (mysqli_num_rows($resulta) > 0) {
                                                   $rowa = mysqli_fetch_assoc($resulta);
                                            ?>
                                    <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1"><?php echo $rowa['category_name']; ?><small class="text-muted">(<?php echo $rowa['subcat_quntity']; ?>)</small>
								</a>
                                <?php }  ?>
                                    <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <?php 
                                               $sqlz = "SELECT * FROM sub_category WHERE cat_name = 1 ";
                                               $resultz = mysqli_query($conn , $sqlz) or die("query failed");
                                               if (mysqli_num_rows($resultz) > 0) {
                                                   while($rowz = mysqli_fetch_assoc($resultz)){
                                            ?>
                                            <a href="SubCatsingle.php?subcatid=<?php echo $rowz['subcat_id'];?>" class="list-group-item list-group-item-action active"><?php echo $rowz['subcat_name']; ?> <small class="text-muted">(<?php echo $rowz['product_quntity']; ?>)</small></a>
                                            <!-- <a href="#" class="list-group-item list-group-item-action">Fruits 2 <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Fruits 3 <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Fruits 4 <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Fruits 5 <small class="text-muted">(20)</small></a> -->
                                            <?php  }
                                               } ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="list-group-collapse sub-men">
                                <?php 
                                               $sqla = "SELECT * FROM category WHERE category_id = 2 ";
                                               $resulta = mysqli_query($conn , $sqla) or die("query failed");
                                               if (mysqli_num_rows($resulta) > 0) {
                                                   $rowa = mysqli_fetch_assoc($resulta);
                                            ?>
                                    <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2"><?php echo $rowa['category_name']; ?> 
								<small class="text-muted">(<?php echo $rowa['subcat_quntity']; ?>)</small>
								</a>
                                <?php } ?>
                                    <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                                        <?php 
                                               $sqly = "SELECT * FROM sub_category WHERE cat_name = 2 ";
                                               $resulty = mysqli_query($conn , $sqly) or die("query failed");
                                               if (mysqli_num_rows($resulty) > 0) {
                                                   while($rowy = mysqli_fetch_assoc($resulty)){
                                            ?>
                                            <a href="SubCatsingle.php?subcatid=<?php echo $rowy['subcat_id'];?>" class="list-group-item list-group-item-action"><?php echo $rowy['subcat_name']; ?> <small class="text-muted">(<?php echo $rowy['product_quntity']; ?>)</small></a>
                                            <!-- <a href="#" class="list-group-item list-group-item-action">Vegetables 2 <small class="text-muted">(20)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Vegetables 3 <small class="text-muted">(20)</small></a> -->
                                            <?php } } ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-collapse sub-men">
                                <?php 
                                               $sqla = "SELECT * FROM category WHERE category_id = 3 ";
                                               $resulta = mysqli_query($conn , $sqla) or die("query failed");
                                               if (mysqli_num_rows($resulta) > 0) {
                                                   $rowa = mysqli_fetch_assoc($resulta);
                                            ?>
                                    <a class="list-group-item list-group-item-action" href="#sub-men3" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men3"><?php echo $rowa['category_name']; ?> 
								<small class="text-muted">(<?php echo $rowa['subcat_quntity']; ?>)</small>
								</a>
                                <?php } ?>
                                    <div class="collapse" id="sub-men3" data-parent="#list-group-men">
                                        <div class="list-group">
                                        <?php 
                                               $sqly = "SELECT * FROM sub_category WHERE cat_name = 3 ";
                                               $resulty = mysqli_query($conn , $sqly) or die("query failed");
                                               if (mysqli_num_rows($resulty) > 0) {
                                                   while($rowy = mysqli_fetch_assoc($resulty)){
                                            ?>
                                            <a href="#" class="list-group-item list-group-item-action"><?php echo $rowy['subcat_name']; ?> <small class="text-muted">(10)</small></a>
                                            <!-- <a href="#" class="list-group-item list-group-item-action">Vegetables 2 <small class="text-muted">(20)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Vegetables 3 <small class="text-muted">(20)</small></a> -->
                                            <?php } } ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-collapse sub-men">
                                <?php 
                                               $sqla = "SELECT * FROM category WHERE category_id = 4 ";
                                               $resulta = mysqli_query($conn , $sqla) or die("query failed");
                                               if (mysqli_num_rows($resulta) > 0) {
                                                   $rowa = mysqli_fetch_assoc($resulta);
                                            ?>
                                    <a class="list-group-item list-group-item-action" href="#sub-men4" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men4"><?php echo $rowa['category_name']; ?> 
								<small class="text-muted">(<?php echo $rowa['subcat_quntity']; ?>)</small>
								</a>
                                <?php } ?>
                                    <div class="collapse" id="sub-men4" data-parent="#list-group-men">
                                        <div class="list-group">
                                        <?php 
                                               $sqly = "SELECT * FROM sub_category WHERE cat_name = 4 ";
                                               $resulty = mysqli_query($conn , $sqly) or die("query failed");
                                               if (mysqli_num_rows($resulty) > 0) {
                                                   while($rowy = mysqli_fetch_assoc($resulty)){
                                            ?>
                                            <a href="#" class="list-group-item list-group-item-action"><?php echo $rowy['subcat_name']; ?> <small class="text-muted">(10)</small></a>
                                            <!-- <a href="#" class="list-group-item list-group-item-action">Vegetables 2 <small class="text-muted">(20)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Vegetables 3 <small class="text-muted">(20)</small></a> -->
                                            <?php } } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-collapse sub-men">
                                <?php 
                                               $sqla = "SELECT * FROM category WHERE category_id = 5 ";
                                               $resulta = mysqli_query($conn , $sqla) or die("query failed");
                                               if (mysqli_num_rows($resulta) > 0) {
                                                   $rowa = mysqli_fetch_assoc($resulta);
                                            ?>
                                    <a class="list-group-item list-group-item-action" href="#sub-men5" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men5"><?php echo $rowa['category_name']; ?> 
								<small class="text-muted">(<?php echo $rowa['subcat_quntity']; ?>)</small>
								</a>
                                <?php } ?>
                                    <div class="collapse" id="sub-men5" data-parent="#list-group-men">
                                        <div class="list-group">
                                        <?php 
                                               $sqly = "SELECT * FROM sub_category WHERE cat_name = 5 ";
                                               $resulty = mysqli_query($conn , $sqly) or die("query failed");
                                               if (mysqli_num_rows($resulty) > 0) {
                                                   while($rowy = mysqli_fetch_assoc($resulty)){
                                            ?>
                                            <a href="#" class="list-group-item list-group-item-action"><?php echo $rowy['subcat_name']; ?> <small class="text-muted">(10)</small></a>
                                            <!-- <a href="#" class="list-group-item list-group-item-action">Vegetables 2 <small class="text-muted">(20)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Vegetables 3 <small class="text-muted">(20)</small></a> -->
                                            <?php } } ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->


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