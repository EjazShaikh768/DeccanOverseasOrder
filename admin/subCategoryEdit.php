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

       
        <div class="col-sm-12 col-md-12 col-lg-9 "  style="height:100%; padding-bottom:50px;">
                <div class="row justify-content-between">
                     <center> <h1> UPDATE SUB CATEGORY  </h1></center>
                     <?php
                               include 'db.php';
                               $subCATID = $_GET['Eid'];
                               $sql1 = "SELECT * FROM sub_category WHERE  subcat_id = {$subCATID} ";
                               $result1 = mysqli_query($conn , $sql1) or die("query unsuccesfull");
                               if (mysqli_num_rows($result1) > 0) {
                                   while ($row1 = mysqli_fetch_assoc($result1)) {
                            ?>
                     <form action="subCategoryUpdateSave.php" method="post" enctype="multipart/form-data" >
                     <div class="form-group">
                <input type="hidden" name="subcat_id"  class="form-control" value="<?php echo $row1['subcat_id']; ?>" placeholder="">
            </div>
                        <div class="form-group mt-3">
                          <label for="subcatname"> SUB CATEGORY NAME</label>
                              <input type="text" name="subcatname" value="<?php echo $row1['subcat_name']; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                          <label for="subcadesc">SUB CATEGORY DESCRIPTION</label>
                              <textarea  name="subcadesc" class="form-control" rows="3"> <?php echo $row1['description']; ?></textarea>
                        </div>
                        <div class="form-group mt-3">
                <input type="file" class="form-control" name="new-image">
                <img  src="upload/<?php echo $row1['category_image']; ?>" height="150px">
                <input type="hidden" name="old-image"  value="<?php echo $row1['category_image']; ?>">
            </div>
                        <div class="form-group mt-3" >
                  <select class="form-select" aria-label="Default select example" name="category">
                     
                       <?php 
                    include 'db.php';
                    $sql1 = "SELECT * FROM category";

                    $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                    if(mysqli_num_rows($result1) > 0){
                      while($row1 = mysqli_fetch_assoc($result1)){
                        if($row['cat_name'] == $row1['category_id']){
                          $selected = "selected";
                        }else{
                          $selected = "";
                        }
                        echo "<option {$selected} value='{$row1['category_id']}'>{$row1['category_name']}</option>";
                      }
                    }
                  ?>
                  </select>
                </div>
      
                    <div style="text-align:right ;">
                      <button class="btn btn-primary mt-4" name="submit" style="width:180px ;margin-right:50px;"> SUBMIT</button>
                    </div>
                     </form>
                     <?php } } ?>
                </div>
        </div>

    </div>
</div>

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