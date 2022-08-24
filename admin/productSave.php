<?php

include 'db.php';

    if (isset($_FILES['fileToUpload'])) {
        $errors = array();

        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $file_type = $_FILES['fileToUpload']['type'];
        $file_ext = (explode('.', $file_name));

        // $extension = array("jpeg" , "jpg" , "png");

        // if (in_array($file_ext, $extension) === false) {
        //     $errors[] = "THis extion file not allowed";
        // }

        // if ($file_size > 2097152) {
        //     $errors[] = "file size must be 2 mb or lower ";
        // }

        $new_name = time()."_".basename($file_name);
        $target = "upload/".$new_name;

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $target);
        }else{
            print_r($errors);
            die();
        }
    }


$category = mysqli_real_escape_string($conn , $_POST['category']);
$subcategory = mysqli_real_escape_string($conn , $_POST['subcategory']);
$prodname = mysqli_real_escape_string($conn , $_POST['prodname']);
$proddesc = mysqli_real_escape_string($conn , $_POST['proddesc']);
$prodPrice = mysqli_real_escape_string($conn , $_POST['prodPrice']);
$prodQuantity = mysqli_real_escape_string($conn , $_POST['prodQuantity']);

$sql = "INSERT INTO  product(prod_name,prod_description,prod_image,sub_category,category,prod_price,prod_quantity)
 VALUES('{$prodname}' , '{$proddesc}', '{$new_name}', '{$subcategory}', '{$category}', '{$prodPrice}', '{$prodQuantity}');";
$sql .= "UPDATE  sub_category  SET product_quntity = product_quntity + 1 WHERE subcat_id = {$subcategory}";

if(mysqli_multi_query($conn , $sql)) {
header("location:http://localhost/DeccanOverseasOrder/admin/productShow.php");
}else{
     echo "<div class='alert alert-danger'>Query Failed.</div>";
}



?>