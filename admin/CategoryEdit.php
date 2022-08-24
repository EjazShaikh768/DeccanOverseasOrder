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
     
    </style>
</head>

<body>



  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                <?php
                          include 'db.php';
                          $catID = $_GET['Eid'];
                          $sql = "SELECT * FROM category WHERE category_id  = {$catID} ";
                          $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                           if (mysqli_num_rows($result) > 0) {
                             while ($row = mysqli_fetch_assoc($result)) {
                               

                        ?>
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST"  enctype="multipart/form-data">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['category_id']; ?>" placeholder="">
                      </div>
                        <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']; ?>"  placeholder="" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="file" class="form-control" name="new-image">
                            <img  src="upload/<?php echo $row['category_image']; ?>" height="150px">
                            <input type="hidden" name="old-image"  value="<?php echo $row1['category_image']; ?>">
                        </div>
                      <input type="submit" name="sumbit" class="btn btn-primary mt-3" value="Update" required />
                  </form>
                  <?php
                             }
                           }
                           ?>
                </div>
              </div>
            </div>
          </div>

          <?php
include 'db.php';

if(isset($_POST['sumbit'])){
                
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
  
    if($file_size > 2097152){
      $errors[] = "File size must be 2mb or lower.";
    }
  
    if($file_size > 2097152){
      $errors[] = "File size must be 2mb or lower.";
    }
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
    
                $cat_id = mysqli_real_escape_string($conn , $_POST['cat_id']);
                $cat_name = mysqli_real_escape_string($conn , $_POST['cat_name']);
            
                $sql1 = "UPDATE category SET category_name = '{$cat_name}',category_image= '{$image_name}' WHERE category_id  = {$cat_id} ";
                $result1 = mysqli_query($conn , $sql1) or die("query unsuccesfull");
                header("location:http://localhost/DeccanOverseasOrder/admin/CategoryShow.php");
                
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
  