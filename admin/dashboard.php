<?php


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Deccan Overseas Order</title>
    <style>
      
        body {
            background-color: #FFFFFF;
        }
        #sidebar{
            height: 100%;
        }
        #sidebar  li a{
            width: 100%;
            font-size: 25px;
            color: black;
            text-decoration: none;
            
        }
        body{
        }
    </style>
</head>

<body >
<div class="container-fluid">
    <div class="row "  >
        <div class="col-sm-6 text-center">
        <h1 style="color: #484848;">    <img src="images/logo.jpeg" alt="" style="width:100px ;">DeccanOverseas</h1> 
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-2 " >
        <?php include 'includes/sidebar.php'; ?> 
        </div>
    </div>
   </div>
<div class="container-fluid" style="background-color:#fbffe3;">
    <div class="row justify-content-around" >
      
        <div class="col-sm-12 col-md-12 col-lg-12  "  style="height:100%; padding-bottom: 50px;">
                <div class="row mt-3 justify-content-center">
                    <div class="  col-sm-6 col-md-3 col-lg-3 my-4  text-center">
                   <center><img src="images/categoryicon2.png" alt="" style="width: 70px ;"></center> 
                         
                    <h1>
                        <?php
                        include 'db.php';
                        $sql = "SELECT * FROM category  ";
                        if ($result = mysqli_query($conn, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows( $result ); 
                            // Display result
                            echo( $rowcount);
                        }
                        ?>
                    </h1>
                        <h3> <a href="CategoryShow.php" style="color:grey">  CATEGORY'S</a> </h3>
                    </div>
                    <div class=" col-sm-6 col-md-3 col-lg-3  my-4 text-center">
                   <center><i class="fa-solid fa-grip-lines fa-4x"></i></center> 
                         
                    <h1>
                        <?php
                        include 'db.php';
                        $sql = "SELECT * FROM sub_category   ";
                        if ($result = mysqli_query($conn, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows( $result );
                            // Display result   
                            printf( $rowcount);
                        }
                        ?>
                    </h1>
                        <!-- <center><img src="images/vegitables.jpg" alt="" style="width: 90px ;"></center> -->
                    
                        <h3> <a href="subCategoryShow.php" style="color:grey"> SUB CATEGORY'S </a> </h3>
                    </div>
                    <div class=" col-sm-6 col-md-3 col-lg-3  my-4 text-center">
                   <center><i class="fa-solid fa-box-open fa-4x"></i></center> 
                         
                    <h1>
                        <?php
                        include 'db.php';
                        $sql = "SELECT * from product";
                        if ($result = mysqli_query($conn, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows( $result );
                            // Display result
                            printf( $rowcount);
                        }
                        ?>
                    </h1>
                       <!-- <center> <img src="images/employeeicon.jpg" alt="" style="width: 100px ;"></center>
                       <br> -->
                        <h3> <a href="ProductShow.php" style="color:grey"> PRODUCT'S</a> </h3>
                    </div>
                    <div class=" col-sm-6 col-md-3 col-lg-3  my-4 text-center">
                   <center><i class="fa-solid fa-heart fa-4x"></i></center> 
                         
                        <h1>  <?php
                        include 'db.php';
                        $sql = "SELECT * from wishlist";
                        if ($result = mysqli_query($conn, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows( $result );
                            // Display result
                            printf( $rowcount);
                        }
                        ?>  </h1>
                        <h3> <a href="1wishList.php" style="color:grey">WISH LIST</a> </h3>
                    </div>

                   
                <div class=" col-sm-6 col-md-3 col-lg-3  my-4 text-center">
                    <center> <i class="fa-solid fa-user-gear fa-4x" ></i></center>
                 
                        <h1>
                            <?php
                            include 'db.php';
                            $sql = "SELECT * from employees";
                            if ($result = mysqli_query($conn, $sql)) {
                                // Return the number of rows in result set
                                $rowcount = mysqli_num_rows( $result );
                                // Display result
                                printf( $rowcount);
                            }
                            ?>
                        </h1>
                        <h3>EMPLOYEE'S</h3>
                    </div>
                    <div class=" col-sm-6 col-md-3 col-lg-3 my-4  text-center">
                    <center> <i class="fa-solid fa-users fa-4x" ></i></center>
               
                        <h1>
                            <?php
                            include 'db.php';
                            $sql = "SELECT * from users";
                            if ($result = mysqli_query($conn, $sql)) {
                                // Return the number of rows in result set
                               echo mysqli_affected_rows($conn);
                            }
                            ?>
                        </h1>
                        <h3> <a href="userShow.php" style="color:grey">USER'S </a> </h3>
                    </div>
                    <div class=" col-sm-6 col-md-3 col-lg-3 my-4 text-center">
                    <center> <i class="fa fa-shopping-bag fa-4x"></i></center>
                        <h1>   <?php
                            include 'db.php';
                            $sql = "SELECT * from cart";
                            if ($result = mysqli_query($conn, $sql)) {
                                // Return the number of rows in result set
                               echo mysqli_affected_rows($conn);
                            }
                            ?> </h1>
                        <h3> <a href="ContactusShow.php" style="color:grey">CONTACT US</a> </h3>
                    </div>
                    <div class=" col-sm-6 col-md-3 col-lg-3  my-4 text-center">
                    <center> <i class="fa fa-shopping-bag fa-4x"></i></center>
                        <h1>   <?php
                            include 'db.php';
                            $sql = "SELECT * from cart";
                            if ($result = mysqli_query($conn, $sql)) {
                                // Return the number of rows in result set
                               echo mysqli_affected_rows($conn);
                            }
                            ?> </h1>
                        <h3> <a href="1cartList.php" style="color:grey">ORDER'S CART</a> </h3>
                    </div>
                   

                <div class=" col-sm-6col-md-3 col-lg-3 my-4 text-center">
                    <center> <i class="fa-regular fa-circle-check fa-4x"></i></center>
                        <h1> 0 </h1>
                        <h3> <a href="1OrderList.php" style="color:grey"> PENDING</a> </h3>
                    </div>
                    <div class=" col-sm-6 col-md-3 col-lg-3 my-4 text-center">
                    <center> <i class="fa-regular fa-circle-check fa-4x"></i></center>
                      
                        <h1> 0 </h1>
                        <h3> <a href="CartListRecord.php" style="color:grey"> DELIVERED</a> </h3>
                    </div>
                </div>
        </div>
    </div>
</div>


    <!--# Footer #-->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
      
</body>

</html>