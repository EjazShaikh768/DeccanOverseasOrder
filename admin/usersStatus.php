<?php

include 'db.php';

$usts = $_GET['usts'];
$status = $_GET['status'];

$sql = "UPDATE users SET status = $status WHERE users_id = {$usts} ";
$result = mysqli_query($conn , $sql) or die("query Failed");

header("location:http://localhost/DeccanOverseasOrder/admin/userShow.php");
?>