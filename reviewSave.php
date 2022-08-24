<?php
session_start();
if ($_SESSION['fname']) {
  
include 'db.php';
$prodid = mysqli_real_escape_string($conn , $_POST['prodid']);
// $prodname = mysqli_real_escape_string($conn , $_POST['prodname']);
$fullname = mysqli_real_escape_string($conn , $_POST['fullname']);
$review = mysqli_real_escape_string($conn , $_POST['review']);

$sqlr = "INSERT INTO review (prod_id,full_name,message) VALUES ('{$prodid}','{$fullname}','{$review}') ";
// $resultr =  or die("QUery Failed");

if (mysqli_query($conn, $sqlr)) {
    header("location:http://localhost/DeccanOverseasOrder/index.php");
}

}
?>

