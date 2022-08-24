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

        <div class="col-sm-12 col-md-3 col-lg-3"  style="height:100%; padding-bottom:50px;">
        <?php include 'includes/sidebar.php'; ?>
        </div></div>
        <div class="col-sm-12 col-md-12 col-lg-9 "  style="height:100%; padding-bottom:50px;">
                <div class="row justify-content-between">
                     <center> <h1> ADD PRODUCT  </h1></center>
                     <form action="productSave.php" method="post" enctype="multipart/form-data" >
                     <div class="row">
                      <div class="col-sm-6 form-group mt-3" >
                          <label for="prodPrice">SELECT  CATEGORY</label>
                  <select class="form-select" aria-label="Default select example" name="category">
                    <?php
                       include 'db.php';
                       $sql = "SELECT * FROM category";
                       $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                       if (mysqli_num_rows($result) > 0) {
                           while ($row = mysqli_fetch_assoc($result)) {
                      echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>"; }  }   ?>
                  </select>
                </div>
                      <div class="col-sm-6 form-group mt-3" >
                          <label for="subcategory"> SELECT SUB CATEGORY</label>
                  <select class="form-select" aria-label="Default select example" name="subcategory">
                    <?php
                       include 'db.php';
                       $sql = "SELECT * FROM sub_category ";
                       $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                       if (mysqli_num_rows($result) > 0) {
                           while ($row = mysqli_fetch_assoc($result)) {
                      echo "<option value='{$row['subcat_id']}'>{$row['subcat_name']}</option>"; }  }   ?>
                  </select>
                           </div>
                      </div>
                      <div class="row">
                      <div class="form-group mt-3">
                          <label for="prodname"> PRODUCT NAME</label>
                              <input type="text" name="prodname" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                          <label for="proddesc"> PRODUCT DESCRIPTION</label>
                              <textarea  name="proddesc" class="form-control" rows="3"> </textarea>
                        </div>
                        <div class="form-group mt-3">
                              <input type="file" name="fileToUpload" class="form-control">
                        </div>
                     
                      <div class="col-sm-4 form-group mt-3">
                          <label for="prodPrice"> PRODUCT PRICE</label>
                              <input type="text" name="prodPrice" class="form-control">
                    </div>
                    <div class="col-sm-4 form-group mt-3">
                          <label for="prodQuantity"> PRODUCT QUANTITY</label>
                              <input type="text" name="prodQuantity" class="form-control">
                    </div>
                      <div class="col-sm-4 form-group mt-3" style=" text-align:right ;">
                        <button class="btn btn-primary mt-4 w-100" name="submit" style="width:180px ;margin-right:50px;"> SUBMIT</button>
                     </div>
                      </div>
                       
                     </form>
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