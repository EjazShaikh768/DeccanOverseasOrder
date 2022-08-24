<?php
include 'db.php';
    
$fname = mysqli_real_escape_string($conn , $_POST['fname']);
$phone = mysqli_real_escape_string($conn , $_POST['phone']);
$email = mysqli_real_escape_string($conn , $_POST['email']);

$sql = "INSERT INTO users (fname,phone,email) VALUES('{$fname}','{$phone}','{$email}')";
$result = mysqli_query($conn , $sql) or die("query Failed");

header("location:http://localhost/DeccanOverseasOrder/signin.php");

?>

