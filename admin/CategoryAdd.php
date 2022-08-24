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
      
        body {
            background-color: #FFFFFF;
        }
        #sidebar{
            height: 100%;

        }
        #sidebar  li a{
            width: 100%;
            font-size: 25px;
            color: black;
            text-decoration: none;
            
        }
    </style>
</head>

<body>
   
   


<div class="container-fluid" style="margin-top:40px;">
    <div class="row justify-content-around" >

      
        <div class=" card col-sm-8 "  style="height:100%; padding-bottom:50px;">
                <div class="row justify-content-between">
                     <center> <h1> ADD VEGITABLES </h1></center>
                     <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"  >
                        <div class="form-group mt-3">
                          <label for="cat_name"> CATEGORY NAME</label>
                              <input type="text" name="catname" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                              <input type="file" name="catname" class="form-control">
                        </div>
                        <div style="text-align:right ;">
                             <button class="btn btn-primary mt-4" name="submit" style="width:180px ;margin-right:50px;"> SUBMIT</button>
                        </div>
                     </form>
                </div>
        </div>

    </div>
</div>

<?php
  include 'db.php';
 if (isset($_POST['submit'])) {
     $catname = mysqli_real_escape_string($conn , $_POST['catname']);

  $sql = "INSERT INTO category (category_name) VALUES('{$catname}')";
  $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
// header("location:http://localhost/DeccanOverseasOrder/admin/CategoryShow.php");    

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