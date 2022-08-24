  
<?php
include 'db.php';



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js">
    <title>Bootstrap demo</title>
    <style>
      
       
body{
  background-image: url('images/bg5.jpg');
  background-repeat: no-repeat;
  background-size: 100%;
 
}
     



      
    </style>
</head>

<body>
   
   <div class="container" >
         <div class="row  align-items-center justify-content-center" style="height: 350px" >
         <div class="col-sm-10">
                    <div class="row" style="">
                   
             <div class=" col-sm-12  col-md-4 col-lg-4 " style="">
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                          <center>   <h2 class=" m-4" style="color:white; text-decoration:underline;"><b> SIGN IN </b></h2> </center>
                          <div class="form-group mt-3">
                            <label for="fullname" style="color:white;"> EMAIL </label>
                                <input type="email" name="email" class="form-control">
                          </div>
                          <div class="form-group mt-3" style="color:white;">
                            <label for="fullname"> PASSWORD </label>
                                <input type="password" name="password" class="form-control">
                          </div>  
                          <div style="text-align:center ;">
                            <button class="btn btn-primary m-3 " name="save" style="width:180px ;margin-right:50px;"> SUBMIT</button>
                          </div>
                   </form>
             </div>
         </div>
   </div>

<?php
include 'db.php';
if (isset($_POST['save'])) {
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $password =  md5($_POST['password']);
    $sql = "SELECT * FROM employees WHERE emp_email = '{$email}' AND emp_password = '{$password}' ";
    $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            
     
    session_start();
    $_SESSION['emp_name'] = $row['emp_name'];
    $_SESSION['emp_id'] = $row['emp_id'];
    $_SESSION['emp_email'] = $row['emp_email'];
    $_SESSION['emp_role'] = $row['emp_role'];
    $_SESSION['emp_image'] = $row['emp_image'];

  
    header("location:http://localhost/DeccanOverseasOrder/admin/dashboard.php");
     }
        }else{
    echo '<div class="alert alert-danger w-60">Username and Password are not matched.</div>';

}
}


?>





    <!--# Footer #-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
</body>

</html>