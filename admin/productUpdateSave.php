<?php
include "db.php";

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
    
  $prod_Id = mysqli_real_escape_string($conn , $_POST['prod_Id']);
  $prod_name = mysqli_real_escape_string($conn , $_POST['prod_name']);
  $prod_descs = mysqli_real_escape_string($conn , $_POST['prod_descs']);
  $price = mysqli_real_escape_string($conn , $_POST['price']);
  $quantity = mysqli_real_escape_string($conn , $_POST['quantity']);
  
  $sql = "UPDATE product SET prod_name='{$prod_name}',prod_description='{$prod_descs}',prod_image='{$image_name}',prod_price='{$price}',prod_quantity='{$quantity}' WHERE prod_id= {$prod_Id} ";
  if (mysqli_query($conn, $sql)) {
    header("location:http://localhost/DeccanOverseasOrder/admin/ProductShow.php");
   //echo "Success";
                } else{
                  echo '<script>alert("Please Try Again")</script>';
                }
 
  
  



?>
