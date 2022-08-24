<?php

include 'db.php';


if(empty($_FILES['new-image']['name'])){
    $new_name = $_POST['old_image'];
  }else{
    $errors = array();
  
    $file_name = $_FILES['new-image']['name'];
    $file_size = $_FILES['new-image']['size'];
    $file_tmp = $_FILES['new-image']['tmp_name'];
    $file_type = $_FILES['new-image']['type'];
    $file_ext = (explode('.',$file_name));
  
    // $extensions = array("jpeg","jpg","png");
  
    // if(in_array($file_ext,$extensions) === false)
    // {
    //   $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
    // }
  
    // if($file_size > 2097152){
    //   $errors[] = "File size must be 2mb or lower.";
    // }
  
    // if($file_size > 2097152){
    //   $errors[] = "File size must be 2mb or lower.";
    // }
    $new_name = time(). "-".basename($file_name);
    $target = "upload/".$new_name;
    $image_name = $new_name;
    if(empty($errors) == true){
      move_uploaded_file($file_tmp,$target);
    }else{
      print_r($errors);
      die();
    }
  }
    

$subcat_Id = mysqli_real_escape_string($conn , $_POST['subcat_id']);
$subcatname = mysqli_real_escape_string($conn , $_POST['subcatname']);
$subcadesc = mysqli_real_escape_string($conn , $_POST['subcadesc']);
$category = mysqli_real_escape_string($conn , $_POST['category']);

$sql = "UPDATE  sub_category  SET subcat_name ='{$subcatname}', description= '{$subcadesc}' , category_image = '{$image_name}',
          cat_name = '{$category}'  WHERE subcat_id = {$subcat_Id} ";
        

if(mysqli_query($conn , $sql)) {
header("location:http://localhost/DeccanOverseasOrder/admin/subCategoryShow.php");
}else{
     echo "<div class='alert alert-danger'>Query Failed.</div>";
}

// $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
// header("location:http://localhost/DeccanOverseasOrder/admin/subCategoryShow.php");


?>