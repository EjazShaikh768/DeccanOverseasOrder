<?php

include 'db.php';

$psts = $_GET['prsts'];
$status = $_GET['status'];

$sql = "UPDATE product SET prstatus = $status WHERE prod_id  = {$psts} ";
 $result = mysqli_query($conn , $sql) or die("query Failed");

// echo $sql;
 header("location:http://localhost/DeccanOverseasOrder/admin/ProductShow.php");
?>