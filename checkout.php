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
            color:white;
            
            
        }
        .cart-box-main{
        }
    </style>
</head>

<body >

    


    <!-- Start All Title Box -->
    <!-- <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="container cart-box-main" >
        <form action="CheckoutSave.php" method="POST" >
            <div class="row  ">
              
                <div class="col-sm-12 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>SHIPPING ADDRESS</h3>
                    </div>
                    <!-- <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Please Check It</a></h5> -->
                    <!-- <form class="mt-3 collapse review-form-box" id="formRegister"> -->
                                   
                        <?php
                        include 'db.php';
                        $sql0 = "SELECT * FROM users WHERE fname = '{$_SESSION["fname"]}' ";
                        $result0 = mysqli_query($conn , $sql0);
                        if(mysqli_num_rows($result0) > 0){
                            while($row0 = mysqli_fetch_assoc($result0) ){
                        ?>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">FULL NAME</label> 
                                <input type="hidden" class="form-control" value="<?php echo $row0['users_id']; ?>" id="InputName" placeholder="First Name" name="users_id" required> 
                                <input type="text" class="form-control" value="<?php echo $row0['fname']; ?>" id="InputName" placeholder="First Name" name="fullname" required> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">PHONE NUMBER </label>
                                <input type="text" class="form-control" value="<?php echo $row0['phone']; ?>" id="InputLastname" placeholder="Last Name" name="phone" required> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" value="<?php echo $row0['email']; ?>" id="InputEmail1" placeholder="Enter Email" name="email" required> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">ALTERNATE NUMBER  <sup> * </sup></label>
                                <input type="text" class="form-control"  placeholder="optional" name="altphone" required> 
                            </div>
                            <div class="form-group col-md-12">
                                <label for="InputPassword1" class="mb-0">ADDRESS </label>
                                <input type="text" class="form-control" id="InputPassword1" value="<?php echo $row0['address']; ?>" placeholder="Password" name="address" required> 
                                <span class="text-muted"> IF YOU NOT ORDER THIS ADDRESS PLEASE EDIT AND THEN CHECKOUT<sup>*</sup> </span>
                            </div>
                        </div>
                        <!-- <button type="submit" class="btn hvr-hover">Register</button> -->
                    <!-- </form> -->
                    <?php   }     } ?>
                </div> 
               
                <div class="col-sm-12 col-lg-6 mb-3">
                    <div class="row">
                     
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    

                                    <h3>Shopping cart</h3>
                                    <input type="hidden" value="<?php echo (rand()); ?>"name="random" >
                                </div>
                                <div class="rounded p-2 bg-light">
                                <?php
                                    $ptotal = 0;
                                    $total =0;
                                    $dscnt = 0;
                                       ?>
                                <?php
                                         include 'db.php';
                                       
                                         $sql = "SELECT * FROM cart WHERE user_id = '{$_SESSION["users_id"]}' ";
                                         $result = mysqli_query($conn , $sql) or die("query Failed");
                                         if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){

                                         ?>
                                         <?php 
                                                $ptotal = $row['prodC_price'] * $row['prodC_quantity'];
                                                $total += $row['prodC_price'] *$row['prodC_quantity'] ;  $ptotal = $row['prodC_price'] * $row['prodC_quantity'];
                                                $dscnt = $total * 15 / 100;
                                                $grandTotal = $total - $dscnt ;
                                         ?>
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"><?php echo $row['prod_name']; ?></</a>
                                        <input type="hidden" value="<?php echo $row['prod_id']; ?>" name="prodid">
                                        <input type="hidden" value="<?php echo $row['prod_name']; ?>" name="prodname">
                                            <div class="small text-muted">Price:  &nbsp;<b> <?php echo $row['prodC_price']; ?></b></<span class="mx-2"> &nbsp; &nbsp; &nbsp;|  &nbsp; &nbsp; &nbsp;</span> Qty:  &nbsp; <b><?php echo $row['prodC_quantity']; ?></b></ <span class="mx-2">&nbsp; &nbsp; &nbsp;|&nbsp; &nbsp;&nbsp;</span> Subtotal:  &nbsp;<b> <?php echo $ptotal; ?></b></div>
                                     
                                            <input type="hidden" value="<?php echo $row['prodC_price']; ?>" name="prodprice">
                                        <input type="hidden" value="<?php echo $row['prodC_quantity']; ?>" name="prodquntity">
                                        <input type="hidden" value="<?php echo $ptotal;  ?>" name="prodtotal">
                                        </div>
                                    </div>
                                   <?php } } ?>
                                   
                                </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"> 
                                        &#8377;&nbsp; <?php echo  $total ; ?>
                                <input type="hidden" value=" <?php echo  $total ; ?>"  name= "total"> 
                                     </div>

                                </div>
                                <div class="d-flex">
                                    <h4>Discount</h4>
                                    <div class="ml-auto font-weight-bold"> 
                                         &#8377;&nbsp; <?php echo $dscnt; ?>
                                <input type="hidden" value=" <?php echo  $dscnt ; ?>"  name= "dscnt"> 
                             </div>
                                </div>
                                 <!-- <div class="d-flex">
                                    <h4>Coupon Discount</h4>
                                    <div class="ml-auto font-weight-bold"> &#8377;&nbsp; 10 
                                <input type="text" value=" <?php echo  $total ; ?>"  name= "total"> 
                            </div> -->
                                </div> 
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <div class="ml-auto font-weight-bold"> &#8377;&nbsp; 0 
                                <input type="hidden" value=" <?php echo  0 ; ?>"  name= "tax"> 
                            </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold"> Free
                                <input type="hidden" value=" <?php echo  0 ; ?>"  name= "shipping">
                              </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5">&#8377;&nbsp; <?php if (isset(  $grandTotal)) {
                                echo  $grandTotal;
                                
                                 
                            }else{
                                echo "0";
                            } ?> <input type="hidden" value=" <?php echo  $grandTotal; ?>"  name= "grandTotal"></div>
                                </div>
                                <hr> </div>
                               <div class="text-right">
                               <button   class=" btn hvr-hover" name="submit" >Place Order</button> 
                               </div> 
                           
                        </div>
                            
                    </div>
                </div>
            </div>

        </div>
                        </form>
    </div>
    <!-- End Cart -->

