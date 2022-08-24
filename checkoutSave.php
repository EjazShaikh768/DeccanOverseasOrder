<?php

       include 'db.php';
      
       
       $userid = mysqli_real_escape_String($conn , $_POST['users_id']);
       $fullname = mysqli_real_escape_String($conn , $_POST['fullname']);
       $phone = mysqli_real_escape_String($conn , $_POST['phone']);
       $email = mysqli_real_escape_String($conn , $_POST['email']);
       $altphone = mysqli_real_escape_String($conn , $_POST['altphone']);
       $address = mysqli_real_escape_String($conn , $_POST['address']);
       $total = mysqli_real_escape_String($conn , $_POST['total']);
       $dscnt = mysqli_real_escape_String($conn , $_POST['dscnt']);
       $tax = mysqli_real_escape_String($conn , $_POST['tax']);
       $shipping = mysqli_real_escape_String($conn , $_POST['shipping']);
       $grandTotal = mysqli_real_escape_String($conn , $_POST['grandTotal']);


       // $cart_order_id = mysqli_real_escape_string($conn , $_POST['cart_order_id']);
       $prodid = mysqli_real_escape_string($conn , $_POST['prodid']);
       $prodname = mysqli_real_escape_string($conn , $_POST['prodname']);
       $prodprice = mysqli_real_escape_string($conn , $_POST['prodprice']);
       $prodquntity = mysqli_real_escape_string($conn , $_POST['prodquntity']);
       $prodtotal = mysqli_real_escape_string($conn , $_POST['prodtotal']);
       $random = mysqli_real_escape_string($conn , $_POST['random']);

       $sql = "INSERT INTO cartorder (user_id,full_name,email,phone,altphone,address,total,dscnt,tax,shipping,grandTotal,tracker_id) 
       VALUES('{$userid}','{$fullname}','{$email}','{$phone}','{$altphone}','{$address}','{$total}','{$dscnt}','{$tax}','{$shipping}','{$grandTotal}','{$random}');";
      
      $sql .= "INSERT INTO OrderItem (cart_order_id, user_id,prod_id,prod_name,prod_price,prod_quantity,prod_total) 
              VALUES('{$cart_order_id}','{$userid}','{$prodid}','{$prodname}','{$prodprice}','{$prodquntity}','{$prodtotal}')";

       if(mysqli_multi_query($conn , $sql)){
            header("location:http://localhost/DeccanOverseasOrder/paymentMode.php");

          
       }else{
        
        echo '<script>alert("TRY AGAIN");</script>';
       }


?>