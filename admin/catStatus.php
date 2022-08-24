<?php

include 'db.php';

$csts = $_GET['csts'];
$status = $_GET['status'];

$sql = "UPDATE category SET status = $status WHERE category_id = {$csts} ";
$result = mysqli_query($conn , $sql) or die("query Failed");

header("location:http://localhost/DeccanOverseasOrder/admin/CategoryShow.php");
?>