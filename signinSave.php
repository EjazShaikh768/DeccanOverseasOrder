
<?php
include 'db.php';
    $phone = mysqli_real_escape_string($conn , $_POST['phone']);

    $sql = "SELECT *  FROM users WHERE phone = '{$phone}'AND  status = 1 ";

    $result = mysqli_query($conn , $sql) or die("query failed");

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION['users_id'] = $row['users_id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['email'] = $row['email'];


            header("location:http://localhost/DeccanOverseasOrder/index.php");
        }
    }else{
        
    echo '<div class="alert alert-danger w-60">Mobile Number are not matched.</div>';
    }

?>
