<?php include 'header.php'; ?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $ptotal = 0;
                                    $total =0;
                                    $dscnt = 0;
                                       ?>
                                        <form action='addcart.php' method='POST'>

                                         <?php
                                         include 'db.php';
                                       
                                         $sql = "SELECT * FROM cart c JOIN  product p ON c.prod_id = p.prod_id WHERE user_id = '{$_SESSION["users_id"]}' ";
                                         $result = mysqli_query($conn , $sql) or die("query Failed");
                                         if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){

                                         ?>
                                         <?php 
                                                $ptotal = $row['prodC_price'] * $row['prodC_quantity'];
                                                $total += $row['prodC_price'] * $row['prodC_quantity'] ;  $ptotal = $row['prodC_price'] * $row['prodC_quantity'];
                                                $dscnt = $total * 15 / 100;
                                                $grandTotal = $total - $dscnt ;
                                         ?>
                                        <tr>
                                        
                                        <td class='thumbnail-img'>
                                            <a href='#'>
                                        <img class='img-fluid' src='admin/upload/<?php echo $row['prod_image']; ?>' alt='' >
                                    </a>
                                        </td>
                                        <td > <?php echo $row['prod_name']; ?></td>
                                        <td >  <?php echo $row['prodC_price']; ?></td>
                                        <td > <?php echo $row['prodC_quantity']; ?></td>
                                        <td >
                                            <p><?php echo $ptotal ?></p>
                                        </td>
                                        <td class='remove-pr'><a class='btn' href="DltCart.php?cartID=<?php echo $row['cart_id'];  ?>" name='remove'> <i class='fas fa-times'></i></a></td>
                                        <td > <input type='hidden' name='item' value=''> </td>
                                    
                                    </tr>
                                    <?php 
                                            }    }  ?>
                                    </form>
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <!-- <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button">Apply Coupon</button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Update Cart" type="submit">
                    </div>
                </div> -->
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h2> <b> ORDER  SUMMARY </b> </h2>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold"> &#8377; &nbsp;<?php echo  $total ; ?> </div>
                        </div>
                        <div class="d-flex">
                            <h4>Discount</h4>
                            <div class="ml-auto font-weight-bold"> - &nbsp;  <?php echo $dscnt; ?> </div>
                        </div>
                        <hr class="my-1">
                        <!-- <div class="d-flex">
                            <h4>Coupon Discount</h4>
                            <div class="ml-auto font-weight-bold"> &#8377;&nbsp; - 10 </div>
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
                            <div class="ml-auto h5">&#8377; &nbsp;<?php if (isset(  $grandTotal)) {
                                echo  $grandTotal;
                            }else{
                                echo "0";
                            } ?> </div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.php" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->


    <?php include 'footer.php'; ?>