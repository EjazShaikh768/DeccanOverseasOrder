<?php

include 'db.php';

$fullname = mysqli_real_escape_string($conn , $_POST['fullname']);
$number = mysqli_real_escape_string($conn , $_POST['number']);
$alt_number = mysqli_real_escape_string($conn , $_POST['altnumber']);
$aadhar = mysqli_real_escape_string($conn , $_POST['aadhar']);
$address = mysqli_real_escape_string($conn , $_POST['address']);
$city = mysqli_real_escape_string($conn , $_POST['city']);
$pincode = mysqli_real_escape_string($conn , $_POST['pincode']);
$role = mysqli_real_escape_string($conn , $_POST['role']);
$joining_date = mysqli_real_escape_string($conn , $_POST['dateOFjoining']);
$email = mysqli_real_escape_string($conn , $_POST['email']);
$password = mysqli_real_escape_string($conn , md5($_POST['Password']));

$sql = "INSERT INTO employees(emp_name,emp_phone,emp_phone2,emp_aadhar,emp_address,emp_city,emp_pincode,emp_role,emp_joiningDate,emp_email,emp_password) 
                      VALUES('{$fullname}', '{$number}', '{$alt_number}', '{$aadhar}', '{$address}', '{$city}', '{$pincode}', 
                      	'{$role}', '{$joining_date}','{$email}', '{$password}')";

 $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
 header("location:http://localhost/DeccanOverseasOrder/admin/EmpShow.php");                   
?>