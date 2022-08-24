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
    
  $emp_id = mysqli_real_escape_string($conn , $_POST['empid']);
  $emp_name = mysqli_real_escape_string($conn , $_POST['fullname']);
  $emp_phone = mysqli_real_escape_string($conn , $_POST['number']);
  $emp_phone1 = mysqli_real_escape_string($conn , $_POST['altnumber']);
  $emp_Address = mysqli_real_escape_string($conn , $_POST['address']);
  $emp_city = mysqli_real_escape_string($conn , $_POST['city']);
  $emp_pincode = mysqli_real_escape_string($conn , $_POST['pincode']);
  $emp_role = mysqli_real_escape_string($conn , $_POST['role']);
  
  $sql = "UPDATE  employees  SET emp_name='{$emp_name}',emp_image='{$image_name}',emp_phone='{$emp_phone}',emp_phone2='{$emp_phone1}',
         emp_address='{$emp_Address}',emp_city='{$emp_city}',emp_pincode='{$emp_pincode}',emp_role='{$emp_role}' WHERE emp_id= {$emp_id} ";
  if (mysqli_query($conn, $sql)) {
    header("location:http://localhost/DeccanOverseasOrder/admin/EmpShow.php");
   //echo "Success";
                } else{
                  echo '<script>alert("Please Try Again")</script>';
                }
 
  
  



?>
