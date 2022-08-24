<?php include 'header.php'; ?>




    <!-- Start All Title Box -->
    <div class="all-title-box">
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
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Account Login</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Click here to Login</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formLogin">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputEmail" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">Password</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Password"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Login</button>
                    </form>
                </div>
                <!-- <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Create New Account</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Click here to Register</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formRegister">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">First Name</label>
                                <input type="text" class="form-control" id="InputName" placeholder="First Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Last Name</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Last Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Password</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Register</button>
                    </form>
                </div> -->
            </div> 
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        <form class="needs-validation" action="checkoutSave.php" method="POST" novalidate>
                            <iv class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="firstName">First name *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="lastName">Last name *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="firstName">Number *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="lastName">Alternate Number *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                                <div class="col-sm-12  mb-3">
                                    <label for="address">Address *</label>
                                    <input type="text" class="form-control" id="address" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                               
                               
                                <div class="col-sm-12  mb-3">
                               
                                        
                                      
                                       
                                </div>
                                
                                <center> <button class="btn mt-3"> ORDER NOW</button> </center>
                            </div>
                          
                           
                          
                         
                          
                            <hr class="mb-1"> 
                        </form>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Shipping Method</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <!-- <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio"> -->
                                        <label class="" for="shippingOption1">Standard Delivery</label> <span class="float-right font-weight-bold">FREE</span> </div>
                                    <div class="ml-4 mb-2 small">(2 - 3 Hours )</div>
                                    <div class="custom-control custom-radio">
                                        <!-- <input id="shippingOption2" name="shipping-option" class="custom-control-input" type="radio"> -->
                                        <label class="" for="shippingOption2">Express Delivery</label> <span class="float-right font-weight-bold">&#8377;10.00</span> </div>
                                    <div class="ml-4 mb-2 small">(IN 1  Hour )</div>
                                    
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                               
                                <?php
                                 $ptotal = 0;
                                 $total =0;
                                 $dscnt = 0;
                                         include 'db.php';
                                       
                                         $sql = "SELECT * FROM cart ";
                                         $result = mysqli_query($conn , $sql) or die("query Failed");
                                         if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){

                                         ?>
                                         <?php 
                                                $ptotal = $row['prod_price'] * $row['prod_quantity'];
                                                $total += $row['prod_price'] *$row['prod_quantity'] ;  $ptotal = $row['prod_price'] * $row['prod_quantity'];
                                                $dscnt = $total * 15 / 100;
                                                $grandTotal = $total - $dscnt ;
                                         ?>
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="detail.html"><?php echo $row['prod_name']; ?></</a>
                                            <div class="small text-muted">Price: <b> <?php echo $row['prod_price']; ?></b></<span class="mx-2"> &nbsp;| &nbsp;</span> Qty: <b><?php echo $row['prod_quantity']; ?></b></ <span class="mx-2">&nbsp; |&nbsp;</span> Subtotal:<b> <?php echo $ptotal; ?></b></div>
                                        </div>
                                    </div>
                                   <?php } } ?>
                                   
                                </div>
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
                                    <div class="ml-auto font-weight-bold"> &#8377;&nbsp; <?php echo  $total ; ?> </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Discount</h4>
                                    <div class="ml-auto font-weight-bold">  &#8377;&nbsp; <?php echo $dscnt; ?> </div>
                                </div>
                                <hr class="my-1">
                                <!-- <div class="d-flex">
                                    <h4>Coupon Discount</h4>
                                    <div class="ml-auto font-weight-bold"> &#8377;&nbsp; 10 </div>
                                </div> -->
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <div class="ml-auto font-weight-bold"> &#8377;&nbsp; 0 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold"> Free </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5">&#8377;&nbsp; <?php if (isset(  $grandTotal)) {
                                echo  $grandTotal;
                            }else{
                                echo "0";
                            } ?> </div>
                                </div>
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <a href="checkout.html" class="ml-auto btn hvr-hover">Place Order</a> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->


    <?php include 'footer.php'; ?>