<?php 

session_start();
if(isset($_SESSION["fname"])){
  header("Location:http://localhost/DeccanOverseasOrder/signin.php");
}
?>
<?php

include 'db.php';

if (isset($_POST['addCart'])) {
  session_start();
  $prodId = $_POST['PIC'];
  $prodname  = $_POST['PNC'];
  $prodprice = $_POST['PPC'];
  $prodQuantity = $_POST['PQC'];
  $user = $_SESSION['users_id'];

  $sql1 = "INSERT INTO cart (prod_id,user_id,prod_name,prodC_price,prodC_quantity) 
  VALUES('{$prodId}','{$user}','{$prodname}','{$prodprice}','{$prodQuantity}')";
  if (mysqli_query($conn, $sql1)) {
    header("location: http://localhost/DeccanOverseasOrder/cart.php");
}else{
 echo "try again";
}
}


include 'db.php';

if (isset($_POST['addWish'])) {

    session_start();

    $prodId = $_POST['PIC'];
    $prodname  = $_POST['PNC'];
    $prodprice = $_POST['PPC'];
    $user = $_SESSION['users_id'];

    $sql = "INSERT INTO wishlist (user_id,prod_id,prod_name,prod_price) VALUES('{$user}','{$prodId}','{$prodname}','{$prodprice}')";
    if (mysqli_query($conn, $sql)) {
           header("location: http://localhost/DeccanOverseasOrder/wishlist.php");
    }else{
        echo "try again";
    }

}


?>