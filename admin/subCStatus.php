<?php

include 'db.php';

$psts = $_GET['psts'];
$status = $_GET['status'];

$sql = "UPDATE sub_category SET status = $status WHERE subcat_id  = {$psts} ";
$result = mysqli_query($conn , $sql) or die("query Failed");

header("location:http://localhost/DeccanOverseasOrder/admin/subCategoryShow.php");
?>