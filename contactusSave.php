<?php
include 'db.php';
    $fullname = mysqli_real_escape_string($conn , $_POST['name']);
    $phone = mysqli_real_escape_string($conn , $_POST['phone']);
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $subject = mysqli_real_escape_string($conn , $_POST['subject']);
    $messagee = mysqli_real_escape_string($conn , $_POST["msg"]);

    $sql = "INSERT INTO contactus (fullname,phone,email,subject,messagee) VALUES('{$fullname}','{$phone}','{$email}','{$subject}','{$messagee}')";
    if (mysqli_query($conn , $sql)) {
        header("location:http://localhost/DeccanOverseasOrder/contact-us.php");
    }else{
        echo '<script>alert("FAILED")</script>';
    }

?>