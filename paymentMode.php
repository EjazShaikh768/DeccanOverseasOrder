<!DOCTYPE html>
<html lang="en">
<head>
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

</head>
<body>
    <p class="text-muted">page under construction <sup>*</sup> </p>
<?php

    include 'db.php';

?>

<div class="container" style="margin-top: 10%;">
    <div class="row justify-content-center" >
        <div class="card col-sm-12 col-md-4 col-lg-4 ">
         <div class="card-header">
         <center> <h1 class="card-header"> <b>PAYMENT MODE</b></h1></center>
         </div>
         <form action="" method="post">
            
         </form>



         <?php
         $sql = "SELECT * FROM cartorder ORDER BY cartOrder_id  DESC ";
         $result = mysqli_query($conn , $sql) or die("QUERY ERROR");
         if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_Assoc($result)
?>
 <h4 class="text-muted">CASH ON DELIVERY </h4>
 <!-- <h3>DECCAN OVERSEAS</h3> 
 <h4 class="text-muted">  AMOUNT </h4>--> 
<h2>  <span class="text-info" >TRACKER ID :</span> &nbsp; <?php echo $row['tracker_id']; ?></h2>
<h2>  <span class="text-info" >AMOUNT</span> &nbsp; &#8377;<?php echo $row['grandTotal']; ?></h2>

<!-- <hr>
<h4>YOUR DETAIL > <span class="text-info" >PAYMENT</span> </h4>
<hr> -->

<?php 
            }
         
         ?><div class="text-center">
         <h4 class="text-muted ">YOUR ORDER DELIVER WITH IN 2 HOUR <br> YOU CAN TRACK YOUR ORDER</h4>
       </div>
        </div>
        
    </div>
</div>



    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>