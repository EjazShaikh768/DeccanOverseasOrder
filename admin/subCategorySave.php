<?php

include 'db.php';

    if (isset($_FILES['fileToUpload'])) {
        $errors = array();

        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $file_type = $_FILES['fileToUpload']['type'];
        $file_ext = (explode('.', $file_name));

        //$extension = array("jpeg" , "jpg" , "png");

        // if (in_array($file_ext, $extension) === false) {
        //     $errors[] = "THis extion file not allowed";
        // }

        if ($file_size > 2097152) {
            $errors[] = "file size must be 2 mb or lower ";
        }

        $new_name = time()."_".basename($file_name);
        $target = "upload/".$new_name;

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $target);
        }else{
            print_r($errors);
            die();
        }
    }


$subcatname = mysqli_real_escape_string($conn , $_POST['subcatname']);
$subcadesc = mysqli_real_escape_string($conn , $_POST['subcadesc']);
$category = mysqli_real_escape_string($conn , $_POST['category']);

$sql = "INSERT INTO sub_category (subcat_name,description,category_image,cat_name)
 VALUES('{$subcatname}' , '{$subcadesc}', '{$new_name}', '{$category}');";
$sql .= "UPDATE category SET subcat_quntity = subcat_quntity + 1 WHERE category_id  = {$category}";

if(mysqli_multi_query($conn , $sql)) {
header("location:http://localhost/DeccanOverseasOrder/admin/subCategoryShow.php");
}else{
     echo "<div class='alert alert-danger'>Query Failed.</div>";
}



?>